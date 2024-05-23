<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\TableOrganizadore;
use App\Models\TableProducto;
use App\Models\TableExpositore;

class viewconvinacionController extends Controller
{
   
    public function showData()
    {
        $idCont1 = 1;
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
    
        $tableOrganizadoresCont1 = TableOrganizadore::where('id', $idCont1)->get();
        $tableOrganizadoresCont2 = TableOrganizadore::where('id', $idCont2)->get();
        $tableOrganizadoresCont3 = TableOrganizadore::where('id', $idCont3)->get();
    
        $tableExpositoresCont1 = TableExpositore::where('id', $idCont1)->get();
        $tableExpositoresCont2 = TableExpositore::where('id', $idCont2)->get();
        $tableExpositoresCont3 = TableExpositore::where('id', $idCont3)->get();
    
        // Pasar los datos a la vista
        return view('welcome', compact(
            'tableProductosCont1', 'tableProductosCont2', 'tableProductosCont3',
            'tableProductosCont4', 'tableProductosCont5', 'tableProductosCont6',
            
            'tableOrganizadoresCont1', 'tableOrganizadoresCont2', 'tableOrganizadoresCont3',
            'tableExpositoresCont1', 'tableExpositoresCont2', 'tableExpositoresCont3'
        ));
    }
    
    
}
