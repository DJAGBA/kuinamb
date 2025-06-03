<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class HistoryController extends Controller
{
    public function index()
    {
        // Récupère les commandes passées de l'utilisateur connecté
        $orders = Order::where('user_id', auth()->id())->latest()->paginate(10);

        return view('client.history', compact('orders'));
    }
}

