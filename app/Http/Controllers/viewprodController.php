<?php

namespace App\Http\Controllers;

use App\Models\TableProducto;
use Illuminate\Http\Request;

class viewprodController extends Controller
{
    
    public function indexProducto(){
        $tableProductos = TableProducto::paginate();
        return view('layouts.Productos', compact('tableProductos'));
    }


}

