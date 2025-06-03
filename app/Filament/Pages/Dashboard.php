<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatistiquesDashboard;

class Dashboard extends BaseDashboard
{
    protected function getHeaderWidgets(): array
    {
        return [
            StatistiquesDashboard::class,
            GraphiqueCommandes::class,
            CourbeVentes::class,
            ProduitsPlusVendus::class,
        ];

    }
}
