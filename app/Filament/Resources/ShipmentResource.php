<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShipmentResource\Pages;
use App\Models\Shipment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ShipmentResource extends Resource
{
    protected static ?string $model = Shipment::class;

    protected static ?string $navigationIcon = 'heroicon-o-truck';

    protected static ?string $navigationLabel = 'My Shipments';
    protected static ?string $navigationGroup = 'Tracking';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('#')
                    ->sortable()
                    ->size('sm'),

                Tables\Columns\TextColumn::make('grn')
                    ->label('GRN')
                    ->searchable()
                    ->size('sm')
                    ->copyable()
                    ->tooltip('Click to copy'),

                Tables\Columns\TextColumn::make('waybill')
                    ->label('Waybill')
                    ->searchable()
                    ->sortable()
                    ->size('sm')
                    ->copyable()
                    ->tooltip('Click to copy'),

                Tables\Columns\TextColumn::make('shipment_date')
                    ->label('Pickup Date')
                    ->date('M j, Y')
                    ->sortable()
                    ->size('sm'),

                Tables\Columns\TextColumn::make('pickup_address')
                    ->label('From')
                    ->limit(20)
                    ->size('sm')
                    ->tooltip(fn ($record) => $record->pickup_address),

                Tables\Columns\TextColumn::make('destination')
                    ->label('To')
                    ->limit(20)
                    ->size('sm')
                    ->tooltip(fn ($record) => $record->destination),

                Tables\Columns\BadgeColumn::make('status_id')
                    ->label('Status')
                    ->colors([
                        'danger' => 'In Warehouse',
                        'warning' => 'In Transit',
                        'primary' => 'Out For Delivery',
                        'success' => 'Delivered',
                    ])
                    ->size('sm'),

                Tables\Columns\TextColumn::make('receiving_date')
                    ->label('Delivered')
                    ->date('M j')
                    ->placeholder('Pending')
                    ->size('sm'),
            ])
            ->defaultSort('shipment_date', 'asc')
            ->striped()
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->label('Details')
                    ->icon('heroicon-m-eye')
                    ->size('sm'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status_id')
                    ->label('Status')
                    ->options([
                        'In Warehouse' => 'In Warehouse',
                        'In Transit' => 'In Transit',
                        'Out For Delivery' => 'Out For Delivery',
                        'Delivered' => 'Delivered',
                    ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                // Header Section with Key Information
                Infolists\Components\Section::make('Shipment Overview')
                    ->description('Quick overview of your shipment details')
                    ->schema([
                        Infolists\Components\Grid::make(4)
                            ->schema([
                                Infolists\Components\Group::make()
                                    ->schema([
                                        Infolists\Components\TextEntry::make('grn')
                                            ->label('GRN NUMBER')
                                            ->copyable()
                                            ->icon('heroicon-m-document-duplicate')
                                            ->weight('font-bold')
                                            ->size('lg'),
                                    ]),

                                Infolists\Components\Group::make()
                                    ->schema([
                                        Infolists\Components\TextEntry::make('waybill')
                                            ->label('WAYBILL NUMBER')
                                            ->copyable()
                                            ->icon('heroicon-m-clipboard-document-list')
                                            ->weight('font-bold')
                                            ->size('lg'),
                                    ]),

                                Infolists\Components\Group::make()
                                    ->schema([
                                        Infolists\Components\TextEntry::make('status_id')
                                            ->label('CURRENT STATUS')
                                            ->badge()
                                            ->color(fn (string $state): string => match ($state) {
                                                'In Warehouse' => 'danger',
                                                'In Transit' => 'warning',
                                                'Out For Delivery' => 'primary',
                                                'Delivered' => 'success',
                                                default => 'gray',
                                            })
                                            ->icon(fn (string $state): string => match ($state) {
                                                'In Warehouse' => 'heroicon-m-building-storefront',
                                                'In Transit' => 'heroicon-m-truck',
                                                'Out For Delivery' => 'heroicon-m-clipboard-document-check',
                                                'Delivered' => 'heroicon-m-check-badge',
                                                default => 'heroicon-m-question-mark-circle',
                                            })
                                            ->size('lg'),
                                    ]),

                                Infolists\Components\Group::make()
                                    ->schema([
                                        Infolists\Components\TextEntry::make('shipment_date')
                                            ->label('SHIPMENT DATE')
                                            ->date('M j, Y')
                                            ->icon('heroicon-m-calendar')
                                            ->color('primary')
                                            ->weight('font-medium'),
                                    ]),
                            ]),
                    ])
                    ->icon('heroicon-m-information-circle')
                    ->collapsible(false),

                // Pickup & Delivery in Side-by-Side Sections
                Infolists\Components\Grid::make(2)
                    ->schema([
                        Infolists\Components\Section::make('Pickup Information')
                            ->description('Origin details')
                            ->schema([
                                Infolists\Components\Grid::make(1)
                                    ->schema([
                                        Infolists\Components\TextEntry::make('pickup_address')
                                            ->label('PICKUP ADDRESS')
                                            ->icon('heroicon-m-map-pin')
                                            ->weight('font-medium')
                                            ->columnSpanFull(),

                                        Infolists\Components\Grid::make(2)
                                            ->schema([
                                                Infolists\Components\TextEntry::make('shipment_date')
                                                    ->label('DATE')
                                                    ->date('F j, Y')
                                                    ->icon('heroicon-m-calendar-days')
                                                    ->color('primary'),

                                                Infolists\Components\TextEntry::make('pickup_time')
                                                    ->label('TIME')
                                                    ->icon('heroicon-m-clock')
                                                    ->color('primary'),
                                            ]),
                                    ]),
                            ])
                            ->icon('heroicon-m-arrow-up-tray')
                            ->collapsible(),

                        Infolists\Components\Section::make('Delivery Information')
                            ->description('Destination details')
                            ->schema([
                                Infolists\Components\Grid::make(1)
                                    ->schema([
                                        Infolists\Components\TextEntry::make('destination')
                                            ->label('DELIVERY ADDRESS')
                                            ->icon('heroicon-m-map-pin')
                                            ->weight('font-medium')
                                            ->columnSpanFull(),

                                        Infolists\Components\Grid::make(2)
                                            ->schema([
                                                Infolists\Components\TextEntry::make('receiving_date')
                                                    ->label('DATE')
                                                    ->date('F j, Y')
                                                    ->placeholder('Pending')
                                                    ->icon('heroicon-m-calendar-days')
                                                    ->color(fn ($state) => $state ? 'success' : 'gray'),

                                                Infolists\Components\TextEntry::make('receiving_time')
                                                    ->label('TIME')
                                                    ->placeholder('Pending')
                                                    ->icon('heroicon-m-clock')
                                                    ->color(fn ($state) => $state ? 'success' : 'gray'),
                                            ]),

                                        Infolists\Components\TextEntry::make('receiver_name')
                                            ->label('RECEIVER')
                                            ->placeholder('Awaiting delivery')
                                            ->icon('heroicon-m-user-circle')
                                            ->color(fn ($state) => $state ? 'success' : 'gray')
                                            ->weight(fn ($state) => $state ? 'font-medium' : 'font-normal'),
                                    ]),
                            ])
                            ->icon('heroicon-m-arrow-down-tray')
                            ->collapsible(),
                    ]),

                // Item Details Section
                Infolists\Components\Section::make('Item Details')
                    ->description('Shipment contents and specifications')
                    ->schema([
                        Infolists\Components\Grid::make(2)
                            ->schema([
                                Infolists\Components\Group::make()
                                    ->schema([
                                        Infolists\Components\TextEntry::make('item_description')
                                            ->label('ITEM DESCRIPTION')
                                            ->icon('heroicon-m-cube')
                                            ->weight('font-medium')
                                            ->columnSpanFull(),
                                    ]),

                                Infolists\Components\Group::make()
                                    ->schema([
                                        Infolists\Components\Grid::make(2)
                                            ->schema([
                                                Infolists\Components\TextEntry::make('quantity')
                                                    ->label('QUANTITY')
                                                    ->suffix(' items')
                                                    ->icon('heroicon-m-calculator')
                                                    ->weight('font-bold')
                                                    ->size('lg')
                                                    ->alignCenter(),

                                                Infolists\Components\TextEntry::make('weight')
                                                    ->label('WEIGHT')
                                                    ->suffix(' kg')
                                                    ->icon('heroicon-m-scale')
                                                    ->weight('font-bold')
                                                    ->size('lg')
                                                    ->alignCenter(),
                                            ]),
                                    ]),
                            ]),
                    ])
                    ->icon('heroicon-m-clipboard-document-list')
                    ->collapsible(),

                // Metadata Section
                Infolists\Components\Section::make('Shipment Metadata')
                    ->description('Additional information')
                    ->schema([
                        Infolists\Components\Grid::make(3)
                            ->schema([
                                Infolists\Components\TextEntry::make('created_at')
                                    ->label('SHIPMENT CREATED')
                                    ->dateTime('F j, Y \a\t g:i A')
                                    ->icon('heroicon-m-plus-circle')
                                    ->color('gray'),

                                Infolists\Components\TextEntry::make('updated_at')
                                    ->label('LAST UPDATED')
                                    ->dateTime('F j, Y \a\t g:i A')
                                    ->icon('heroicon-m-arrow-path')
                                    ->color('gray'),

                                Infolists\Components\TextEntry::make('estimated_delivery')
                                    ->label('ESTIMATED DELIVERY')
                                    ->placeholder('Calculating...')
                                    ->icon('heroicon-m-clock')
                                    ->color('warning'),
                            ]),
                    ])
                    ->icon('heroicon-m-cog-6-tooth')
                    ->collapsible(),

                // Quick Actions Section
            ]);
    }

    // Only allow viewing shipments
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListShipments::route('/'),
            'view' => Pages\ViewShipment::route('/{record}'),
        ];
    }

    // Filter to show only customer's shipments
    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (Auth::check() && !empty(Auth::user()->customer_ids)) {
            $customerIds = Auth::user()->customer_ids;
            return $query->whereIn('customer_id', $customerIds);
        }

        return $query->whereRaw('1 = 0');
    }

    public static function getNavigationBadge(): ?string
    {
        if (Auth::check() && !empty(Auth::user()->customer_ids)) {
            $customerIds = Auth::user()->customer_ids;
            $count = static::getModel()::whereIn('customer_id', $customerIds)
                ->where('status_id', 'Delivered')
                ->count();
            return $count > 0 ? (string) $count : null;
        }
        return null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'success';
    }


}
