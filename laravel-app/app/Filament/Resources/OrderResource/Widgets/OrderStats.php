<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'new')->count())
                ->color('info'),
            Stat::make('Orders Processing', Order::query()->where('status', 'processing')->count())
                ->color('warning'),
            Stat::make('Orders Cancel', Order::query()->where('status', 'canceled')->count())
                ->color('danger'),
            Stat::make('Orders Delivered', Order::query()->where('status', 'delivered')->count())
                ->color('success'),
            Stat::make('Average Price', Number::currency(Order::query()->avg('grand_total'), 'IDR')),
            Stat::make('Total Price', Number::currency(Order::query()->sum('grand_total'), 'IDR')),
        ]; 
    }
}
