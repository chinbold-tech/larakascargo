<?php

namespace App\Http\Controllers;

use App\Models\Order;

class CargoController extends Controller
{
    public function index_view ()
    {
        return view('livewire.cargos', [
            'cargos' => Order::class
        ]);
    }
}
