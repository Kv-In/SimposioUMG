<?php

namespace App\Http\Controllers;

use App\Models\TableExpositore;
use Illuminate\Http\Request;

class viewExpoController extends Controller
{
    public function indexExpo(){
        $tableExpositores = TableExpositore::paginate();
        return view('layouts.Expositores', compact('tableExpositores'));
    }

}
