<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;
use App\Models\Shipment;

class ShipmentStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $user = Auth::user();

        if (!$user || !$user->customer_id) {
            return [];
        }

        $customerId = $user->customer_id;

        // Create independent queries for each count
        $total = Shipment::where('customer_id', $customerId)->count();
        $delivered = Shipment::where('customer_id', $customerId)->where('status_id', 'Delivered')->count();
        $inTransit = Shipment::where('customer_id', $customerId)->whereIn('status_id', ['In Transit', 'Out For Delivery'])->count();
        $pending = Shipment::where('customer_id', $customerId)->where('status_id', 'In Warehouse')->count();
        $recentCount = Shipment::where('customer_id', $customerId)->where('created_at', '>=', now()->subDays(30))->count();

        // Calculate delivery rate
        $deliveryRate = $total > 0 ? round(($delivered / $total) * 100, 1) : 0;

        return [
            Stat::make('Total Shipments', number_format($total))
                ->description("$recentCount new this month")
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('primary')
                ->chart([7, 2, 10, 3, 15, 4, 17]),

            Stat::make('Delivered', number_format($delivered))
                ->description("$deliveryRate% success rate")
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success'),

            Stat::make('In Transit', number_format($inTransit))
                ->description('On the way')
                ->descriptionIcon('heroicon-m-truck')
                ->color('warning'),

            Stat::make('In Warehouse', number_format($pending))
                ->description('Awaiting pickup')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('gray'),
        ];
    }
}
