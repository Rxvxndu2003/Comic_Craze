<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use App\Models\File;

class CustomerAdminChart extends ChartWidget
{
    protected static ?string $heading = 'Templates Chart';

    protected static string $color = 'warning';

    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $data = Trend::model(File::class)
        ->between(
            start: now()->startOfMonth(),
            end: now()->endOfMonth(),
        )
        ->perDay()
        ->count();
 
        return [
        'datasets' => [
            [
                'label' => 'Templates Chart',
                'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
            ],
        ],
        'labels' => $data->map(fn (TrendValue $value) => $value->date),
    ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
