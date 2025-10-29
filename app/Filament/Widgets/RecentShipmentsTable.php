<?php

namespace App\Filament\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\Facades\Auth;
use App\Models\Shipment;

class RecentShipmentsTable extends BaseWidget
{
    protected static ?string $heading = 'Recent Shipments';

    protected static ?int $sort = 4;

    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        $user = Auth::user();
        $customerIds = $user && !empty($user->customer_ids) ? $user->customer_ids : [0];

        return $table
            ->query(
                Shipment::query()
                    ->whereIn('customer_id', $customerIds)
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('waybill')
                    ->label('Tracking Number')
                    ->searchable()
                    ->weight('bold')
                    ->color('primary'),

                Tables\Columns\TextColumn::make('destination')
                    ->label('Destination')
                    ->limit(40)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 40 ? $state : null;
                    }),

                Tables\Columns\BadgeColumn::make('status_id')
                    ->label('Status')
                    ->colors([
                        'gray' => 'In Warehouse',
                        'warning' => 'In Transit',
                        'info' => 'Out For Delivery',
                        'success' => 'Delivered',
                    ])
                    ->icons([
                        'heroicon-m-building-storefront' => 'In Warehouse',
                        'heroicon-m-truck' => 'In Transit',
                        'heroicon-m-rocket-launch' => 'Out For Delivery',
                        'heroicon-m-check-circle' => 'Delivered',
                    ]),

                Tables\Columns\TextColumn::make('shipment_date')
                    ->label('Date')
                    ->date('M j, Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created')
                    ->since()
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->label('Track')
                    ->icon('heroicon-m-eye')
                    ->color('primary')
                    ->url(fn (Shipment $record): string =>
                        route('filament.customer.resources.shipments.index') . '?tableSearch=' . $record->waybill
                    ),
            ])
            ->emptyStateHeading('No shipments yet')
            ->emptyStateDescription('Your recent shipments will appear here')
            ->emptyStateIcon('heroicon-o-truck')
            ->paginated(false);
    }
}
