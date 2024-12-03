<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Customer;
use App\Models\Rent;
use App\Models\Accessories;
use App\Models\File;
use App\Models\Product;


class StatsAdminOverview extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            Stat::make('Ads', Rent::query()->count())
                ->description('All Ads from the WebSite')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Cosplay', Product::query()->count())
                ->description('All Cosplays from the WebSite')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Accessories',Accessories::query()->count())
                ->description('All Accessories from the WebSite')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]),
            Stat::make('Templates',File::query()->count())
                ->description('All Templates from the WebSite')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17])
        ];
    }
}
