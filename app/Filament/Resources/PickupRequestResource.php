<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PickupRequestResource\Pages;
use App\Filament\Resources\PickupRequestResource\RelationManagers;
use App\Models\Branch;
use App\Models\Pickup;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PickupRequestResource extends Resource
{
    protected static ?string $model = Pickup::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = 'My Pickup Requests';

    protected static ?string $navigationGroup = 'Tracking';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        // Left Column - Main Information
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Pickup Details')
                                    ->description('Schedule your package collection')
                                    ->schema([
                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('pickup_code')
                                                    ->label('Reference Code')
                                                    ->default(fn () => 'REF' . time())
                                                    ->disabled()
                                                    ->dehydrated()
                                                    ->prefixIcon('heroicon-o-qr-code'),

                                                Forms\Components\DateTimePicker::make('collection_date')
                                                    ->label('Collection Date & Time')
                                                    ->required()
                                                    ->minDate(now()->addHour())
                                                    ->seconds(false)
                                                    ->native(false)
                                                    ->prefixIcon('heroicon-o-calendar'),
                                            ]),

                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\Select::make('status_id')
                                                    ->label('Status')
                                                    ->options([
                                                        'Requested' => 'Requested',
                                                        'Cancelled' => 'Cancelled',
                                                    ])
                                                    ->default('Requested')
                                                    ->required()
                                                    ->prefixIcon('heroicon-o-flag'),


                                                Forms\Components\Select::make('dropping_point')
                                                    ->label('Sorting Point')
                                                    ->required()
                                                    ->searchable()
                                                    ->options(Branch::pluck('name', 'id'))
                                                    ->placeholder('Select branch')
                                                    ->prefixIcon('heroicon-o-map-pin'),
                                            ]),
                                    ])
                                    ->compact()
                                    ->collapsible(),

                                Forms\Components\Section::make('Location & Vehicle')
                                    ->schema([
                                        Forms\Components\TextInput::make('pickup_point')
                                            ->label('Pickup Address')
                                            ->required()
                                            ->placeholder('Enter complete pickup address')
                                            ->maxLength(255)
                                            ->prefixIcon('heroicon-o-home'),

                                        Forms\Components\Radio::make('fleet_type')
                                            ->label('Vehicle Type')
                                            ->options([
                                                'Motor Bike' => 'Motor Bike',
                                                'Van' => 'Van',
                                                'Truck' => 'Truck',
                                            ])
                                            ->required()
                                            ->inline()
                                            ->columns(3)
                                            ->descriptions([
                                                'Motor Bike' => 'Small packages',
                                                'Van' => 'Medium packages',
                                                'Truck' => 'Large packages',
                                            ]),
                                    ])
                                    ->compact()
                                    ->collapsible(),
                            ])
                            ->columnSpan(['lg' => 2]),

                        // Right Column - Package Info & Actions
                        Forms\Components\Group::make()
                            ->schema([
                                Forms\Components\Section::make('Package Details')
                                    ->schema([
                                        Forms\Components\Textarea::make('item_description')
                                            ->label('Items Description')
                                            ->rows(4)
                                            ->placeholder('Describe items to be collected...')
                                            ->maxLength(500)
                                            ->helperText('Be specific about contents'),

                                        Forms\Components\Grid::make(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('quantity')
                                                    ->label('Quantity')
                                                    ->numeric()
                                                    ->minValue(1)
                                                    ->default(1)
                                                    ->suffixIcon('heroicon-o-cube'),

                                                Forms\Components\TextInput::make('weight')
                                                    ->label('Weight')
                                                    ->numeric()
                                                    ->step(0.1)
                                                    ->minValue(0.1)
                                                    ->placeholder('0.0')
                                                    ->suffix('kg'),
                                            ]),
                                    ])
                                    ->compact(),

                                Forms\Components\Section::make('Request Info')
                                    ->schema([
                                        Forms\Components\Placeholder::make('initiator')
                                            ->label('Requested By')
                                            ->content(Auth::user()->name),

                                        Forms\Components\Placeholder::make('created_at')
                                            ->label('Created')
                                            ->content(fn ($record) => $record?->created_at ? $record->created_at->diffForHumans() : 'Now'),
                                    ])
                                    ->compact()
                                    ->hidden(fn ($operation) => $operation === 'create'),
                            ])
                            ->columnSpan(['lg' => 1]),
                    ])
                    ->columns(3),

                // Hidden fields
                Forms\Components\Hidden::make('initiator_id')
                    ->default(Auth::user()->customer_id),

                Forms\Components\Hidden::make('entry_by')
                    ->default(Auth::user()->id),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pickup_code')
                    ->label('Reference')
                    ->searchable()
                    ->weight('bold')
                    ->color('primary')
                    ->copyable()
                    ->copyMessage('Copied!')
                    ->icon('heroicon-o-document-text')
                    ->size('sm'),
//                    ->description(fn ($record) => $record->created_at->diffForHumans()),

                Tables\Columns\TextColumn::make('collection_date')
                    ->label('Collection')
                    ->dateTime('M j, Y • g:i A')
                    ->sortable()
                    ->size('sm')
                    ->color('gray')
                    ->description(fn ($record) => $record->collection_date->isToday() ? 'Today' : ''),

                Tables\Columns\BadgeColumn::make('status_id')
                    ->label('Status')
                    ->colors([
                        'gray' => 'Requested',
                        'warning' => 'Assigned',
                        'info' => 'Collected',
                        'success' => 'Completed',
                        'danger' => 'Cancelled',
                    ])
                    ->icons([
                        'Requested' => 'heroicon-o-clock',
                        'Assigned' => 'heroicon-o-user',
                        'Collected' => 'heroicon-o-check',
                        'Completed' => 'heroicon-o-flag',
                        'Cancelled' => 'heroicon-o-x-mark',
                    ])
                    ->size('sm'),

                Tables\Columns\TextColumn::make('pickup_point')
                    ->label('Pickup Location')
                    ->limit(25)
                    ->size('sm')
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 25 ? $state : null;
                    }),

                Tables\Columns\TextColumn::make('branch.name')
                    ->label('Sorting Point')
                    ->limit(20)
                    ->size('sm')
                    ->placeholder('—')
                    ->color('gray'),

                Tables\Columns\BadgeColumn::make('fleet_type')
                    ->label('Vehicle')
                    ->colors([
                        'gray' => 'Motor Bike',
                        'blue' => 'Van',
                        'orange' => 'Truck',
                    ])
                    ->icons([
                        'Motor Bike' => 'heroicon-o-truck',
                        'Van' => 'heroicon-o-truck',
                        'Truck' => 'heroicon-o-truck',
                    ])
                    ->size('sm'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status_id')
                    ->label('Status')
                    ->options([
                        'Requested' => 'Requested',
                        'Assigned' => 'Assigned',
                        'Collected' => 'Collected',
                        'Completed' => 'Completed',
                        'Cancelled' => 'Cancelled',
                    ])
                    ->indicator('Status'),

                Tables\Filters\SelectFilter::make('fleet_type')
                    ->label('Vehicle Type')
                    ->options([
                        'Van' => 'Van',
                        'Motor Bike' => 'Motor Bike',
                        'Truck' => 'Truck',
                    ])
                    ->indicator('Vehicle'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                        ->icon('heroicon-o-eye')
                        ->color('gray'),

                    Tables\Actions\EditAction::make()
                        ->icon('heroicon-o-pencil')
                        ->color('blue')
                        ->visible(fn (Pickup $record) => $record->status_id === 'Requested'),

                    Tables\Actions\Action::make('cancel')
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->requiresConfirmation()
                        ->modalHeading('Cancel Pickup Request')
                        ->modalDescription('Are you sure you want to cancel this pickup request? This action cannot be undone.')
                        ->modalSubmitActionLabel('Yes, Cancel Request')
                        ->action(fn (Pickup $record) => $record->update(['status_id' => 'Cancelled']))
                        ->visible(fn (Pickup $record) => in_array($record->status_id, ['Requested', 'Assigned'])),
                ])
                    ->icon('heroicon-o-ellipsis-vertical')
                    ->size('sm')
                    ->button()
                    ->color('gray'),
            ])
            ->defaultSort('created_at', 'desc')
            ->groups([
                Tables\Grouping\Group::make('status_id')
                    ->label('Status')
                    ->collapsible(),

                Tables\Grouping\Group::make('collection_date')
                    ->label('Collection Date')
                    ->date()
                    ->collapsible(),
            ])
            ->emptyStateHeading('No pickup requests found')
            ->emptyStateDescription('Create your first pickup request to get started.')
            ->emptyStateIcon('heroicon-o-truck')
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label('Create pickup request')
                    ->url(static::getUrl('create'))
                    ->icon('heroicon-o-plus')
                    ->button(),
            ])
            ->deferLoading()
            ->paginated([10, 25, 50])
            ->striped();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPickupRequests::route('/'),
            'create' => Pages\CreatePickupRequest::route('/create'),
            'edit' => Pages\EditPickupRequest::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (Auth::check() && Auth::user()->customer_id) {
            return $query->where('initiator_id', Auth::user()->customer_id);
        }

        return $query->whereRaw('1 = 0');
    }

    public static function getNavigationBadge(): ?string
    {
        if (Auth::check() && Auth::user()->customer_id) {
            $count = static::getModel()::where('initiator_id', Auth::user()->customer_id)
                ->where('status_id', 'Requested')
                ->count();
            return $count > 0 ? (string) $count : null;
        }
        return null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}
