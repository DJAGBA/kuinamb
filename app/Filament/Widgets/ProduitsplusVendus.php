<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\OrderItems;
use App\Models\Product;

class ProduitsPlusVendus extends BarChartWidget
{
    protected static ?string $heading = 'Produits les plus vendus';

    protected function getData(): array
    {
        $topProduits = OrderItems::selectRaw('product_id, SUM(quantity) as total')
            ->groupBy('product_id')
            ->orderByDesc('total')
            ->take(5)
            ->get();

        $labels = [];
        $data = [];

        foreach ($topProduits as $item) {
            $product = Product::find($item->product_id);
            $labels[] = $product ? $product->nom : 'Inconnu';
            $data[] = $item->total;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Quantité vendue',
                    'data' => $data,
                    'backgroundColor' => '#60a5fa',
                ],
            ],
            'labels' => $labels,
        ];
    }
}
