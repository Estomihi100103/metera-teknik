<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort=2;
    protected function getStats(): array
    {
        return [
            Stat::make('Unique visitors', number_format(\App\Models\Visitor::count())),
            //hitung  jumlah produk yang ada
            Stat::make('Total products', number_format(\App\Models\Product::count())),          
            //hitung jumlah kategori yang ada
            Stat::make('Total categories', number_format(\App\Models\Category::count())),
        ];
    } 
}
