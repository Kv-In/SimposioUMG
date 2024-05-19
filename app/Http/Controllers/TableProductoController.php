<?php

namespace App\Http\Controllers;

use App\Models\TableProducto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TableProductoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TableProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tableProductos = TableProducto::paginate();

        return view('table-producto.index', compact('tableProductos'))
            ->with('i', ($request->input('page', 1) - 1) * $tableProductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tableProducto = new TableProducto();

        return view('table-producto.create', compact('tableProducto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TableProductoRequest $request): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'imagen' => 'image|max:3048', // Permitir imagen opcional
            'descripcion' => 'nullable|string',
            'precio' => 'nullable|numeric',
        ]);

        $newProduct = new TableProducto();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'images/products/';
            $filename = time() . $file->getClientOriginalName();
            $uploadFile = $request->file('imagen')->move($destinationPath, $filename);
            $newProduct->imagen = $destinationPath . $filename;
        }

        $newProduct->nombre = $request->nombre;
        $newProduct->descripcion = $request->descripcion;
        $newProduct->precio = $request->precio;
        $newProduct->save();


        return Redirect::route('table-productos.index')
            ->with('success', 'TableProducto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tableProducto = TableProducto::find($id);

        return view('table-producto.show', compact('tableProducto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tableProducto = TableProducto::find($id);

        return view('table-producto.edit', compact('tableProducto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TableProductoRequest $request, TableProducto $tableProducto): RedirectResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'imagen' => 'nullable|image|max:3048', // Permitir imagen opcional
            'descripcion' => 'nullable|string',
            'precio' => 'nullable|numeric',
        ]);
    
        // Actualizar campos existentes
        $tableProducto->nombre = $request->nombre;
        $tableProducto->descripcion = $request->descripcion;
        $tableProducto->precio = $request->precio;
    
        // Actualizar imagen si se proporciona una nueva
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'images/products/';
            $filename = time() . $file->getClientOriginalName();
            $uploadFile = $request->file('imagen')->move($destinationPath, $filename);
            $tableProducto->imagen = $destinationPath . $filename;
        }
    
        $tableProducto->save();
    
        return Redirect::route('table-productos.index')
            ->with('success', 'TableProducto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TableProducto::find($id)->delete();

        return Redirect::route('table-productos.index')
            ->with('success', 'TableProducto deleted successfully');
    }
}
