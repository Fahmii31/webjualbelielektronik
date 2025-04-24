<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function index()
    {
        // Contoh data dummy, bisa diganti dengan data dari database
        $data = [
            ['id' => 1, 'produk' => 'Laptop'],
            ['id' => 2, 'produk' => 'Smartphone'],
            ['id' => 3, 'produk' => 'Tablet'],
        ];

        return view('list_product', compact('data'));
    }
}
