<?php

namespace App\Http\Controllers;
use App\Models\TableOrganizadore;
use App\Models\TableProducto;
use App\Models\TableExpositore;
use Illuminate\Http\Request;

class viewconvinacionController extends Controller
{
    //
    public function showData()
    {
        $expositorIds = [1, 2, 3, 4, 5, 6];
        $productoIds = [1, 2, 3, 4, 5, 6];
        $organizaIds = [1,2, 3, 4, 5,6];

        $tableOrganizadore = TableOrganizadore::where("id", $expositorIds)->get();
        $tableExpositores = TableExpositore::whereIn('id', $expositorIds)->get();
        $tableProductos = TableProducto::whereIn('id', $productoIds)->get();

        return view('welcome', compact('tableExpositores', 'tableProductos','tableOrganizadore' ));
    }
}
