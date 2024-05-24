<?php

namespace App\Http\Controllers;

use App\Models\TableProducto;
use Illuminate\Http\Request;

class viewprodController extends Controller
{
    
    public function indexProducto(){
        $tableProductos = TableProducto::paginate();
        return view('layouts.Productos', compact('tableProductos')); 
        
        /*$idCont1 = 1;
        $idCont2 = 2;
        $idCont3 = 3;
        $idCont4 = 4;
        $idCont5 = 5;
        $idCont6 = 6;
        
    
        // Obtener los datos de las tablas respectivas
        $tableProductosCont1 = TableProducto::where('id', $idCont1)->get();
        $tableProductosCont2 = TableProducto::where('id', $idCont2)->get();
        $tableProductosCont3 = TableProducto::where('id', $idCont3)->get();
        $tableProductosCont4 = TableProducto::where('id', $idCont4)->get();
        $tableProductosCont5 = TableProducto::where('id', $idCont5)->get();
        $tableProductosCont6 = TableProducto::where('id', $idCont6)->get();

        return view('layouts.Productos', compact(
            'tableProductosCont1', 'tableProductosCont2', 'tableProductosCont3',
            'tableProductosCont4', 'tableProductosCont5', 'tableProductosCont6',
        ));*/



    }


}

