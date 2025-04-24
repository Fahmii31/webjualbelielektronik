<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class list2Controller extends Controller
{
    public function list()
    {
        // Data dummy sementara
        $data = [
            ['id' => 1, 'produk' => 'Laptop'],
            ['id' => 2, 'produk' => 'Smartphone'],
            ['id' => 3, 'produk' => 'Tablet']
        ];

        // Kirim data ke view
        return view('list_product', compact('data'));
    }
}
