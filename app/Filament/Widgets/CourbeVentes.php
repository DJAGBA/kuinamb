<?php

namespace App\Filament\Widgets;

use Filament\Widgets\LineChartWidget;
use App\Models\Order;

class CourbeVentes extends LineChartWidget
{
    protected static ?string $heading = 'Courbe des ventes (7 derniers jours)';

    protected function getData(): array
    {
        $dates = collect(range(0, 6))->map(function ($i) {
            return now()->subDays($i)->format('Y-m-d');
        })->reverse();

        $sales = $dates->map(function ($date) {
            return Order::whereDate('created_at', $date)->sum('prix');
        });

        return [
            'datasets' => [
                [
                    'label' => 'Ventes',
                    'data' => $sales,
                    'borderColor' => '#4ade80',
                    'backgroundColor' => 'rgba(74, 222, 128, 0.2)',
                ],
            ],
            'labels' => $dates->toArray(),
        ];
    }
}
