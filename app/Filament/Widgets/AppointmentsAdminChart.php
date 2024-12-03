<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\Product;

class AppointmentsAdminChart extends ChartWidget
{
    protected static ?string $heading = 'Cosplay Chart';

    protected static ?int $sort = 5;

    protected function getData(): array
    {
        $data = Trend::model(Product::class)
        ->between(
            start: now()->startOfMonth(),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->count();
 
        return [
        'datasets' => [
            [
                'label' => 'Cosplay Chart',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
