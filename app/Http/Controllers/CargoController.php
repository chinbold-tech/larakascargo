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

    public function pdf_view ($id)
    {
        $data = Order::findOrFail($id);
        return view('pdf.printpdf',['data' => $data]);
    }
}
