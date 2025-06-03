<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Order;

class GraphiqueCommandes extends ChartWidget
{
    protected static ?string $heading = 'Répartition des Commandes';
    protected static ?string $chartId = 'graphique-commandes';
    protected static ?string $maxHeight = '300px';



    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Commandes',
                    'data' => [
                        Order::where('status', 'en_attente')->count(),
                        Order::where('status', 'validee')->count(),
                        Order::where('status', 'annulee')->count(),
                    ],
                    'backgroundColor' => ['orange', 'green', 'red'],
                ],
            ],
            'labels' => ['En attente', 'Validées', 'Annulées'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
