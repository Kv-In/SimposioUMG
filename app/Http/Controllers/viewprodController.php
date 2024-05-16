<?php

namespace App\Http\Controllers;

use App\Models\TableProducto;
use Illuminate\Http\Request;

class viewprodController extends Controller
{
    /*
    public function index(){
        $tableProductos = TableProducto::paginate();
        return view('welcome', compact('tableProductos'));
    }*/

    public function index()
    {
        $idCont1 = 1;
        $idCont2 = 2;
        $idCont3 = 3;

        $tableProductosCont1 = TableProducto::where('id', $idCont1)->get();
        $tableProductosCont2 = TableProducto::where('id', $idCont2)->get();
        $tableProductosCont3 = TableProducto::where('id', $idCont3)->get();

        return view('welcome', compact('tableProductosCont1', 'tableProductosCont2', 'tableProductosCont3'));
    }

    public function indexSouv()
    {
        $products = TableProducto::paginate();

        return view('layouts.Productos', compact('products'));

//        $idCont1 = 1;
//        $idCont2 = 2;
//        $idCont3 = 3;
//        $idCont4 = 4;
//
//
//        $tableProductosCont1 = TableProducto::where('id', $idCont1)->get();
//        $tableProductosCont2 = TableProducto::where('id', $idCont2)->get();
//        $tableProductosCont3 = TableProducto::where('id', $idCont3)->get();
//        $tableProductosCont4 = TableProducto::where('id', $idCont4)->get();
//        return view('layouts.Productos', compact('tableProductosCont1', 'tableProductosCont2', 'tableProductosCont3','tableProductosCont4'));
    }

}

