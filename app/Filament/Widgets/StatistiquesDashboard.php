<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\User;

class StatistiquesDashboard extends StatsOverviewWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Utilisateurs inscrits', User::count()),
            Card::make('Clients', User::where('role', 'client')->count()),
            Card::make('Vendeurs', User::where('role', 'vendeur')->count()),
            Card::make('Admins', User::where('role', 'admin')->count()),
        ];
    }
}
