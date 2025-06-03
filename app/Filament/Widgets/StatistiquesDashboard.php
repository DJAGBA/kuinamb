<?php

namespace App\Filament\Widgets;
use App\Models\Order;

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
            // Card::make('Commandes en attente', Order::where('status', 'en_attente')->count()),
            // Card::make('Commandes validées', Order::where('status', 'validee')->count()),
            // Card::make('Commandes Livrées', Order::where('status', 'terminee')->count()),
            // Card::make('Commandes annulées', Order::where('status', 'annulee')->count()),
            Card::make('Nombre total de boutiques', User::where('role', 'vendeur')->whereNotNull('boutique')->count()),
            Card::make('Montant total des ventes', number_format(Order::where('status', 'validee')->sum('prix'), 0, ',', ' ') . ' FCFA'),
            Card::make('Montant annulé', number_format(Order::where('status', 'annulee')->sum('prix'), 0, ',', ' ') . ' FCFA'),
            Card::make('Montant en attente', number_format(Order::where('status', 'en_attente')->sum('prix'), 0, ',', ' ') . ' FCFA'),
            Card::make('Montant total des commandes', number_format(Order::sum('prix'), 0, ',', ' ') . ' FCFA'),
        ];
    }
}
