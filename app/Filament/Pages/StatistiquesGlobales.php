<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

use App\Filament\Widgets\GraphiqueCommandes;
// use App\Filament\Widgets\StatistiquesCommandesWidget;
// use App\Filament\Widgets\MontantTotalWidget;

class StatistiquesGlobales extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.statistiques-globales';

    public function getHeaderWidgets(): array
    {
        return [
            GraphiqueCommandes::class,
            // StatistiquesCommandesWidget::class,
            // MontantTotalWidget::class,
        ];
    }
    public array $headerWidgets = [];

}
