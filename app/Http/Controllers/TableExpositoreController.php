<?php

namespace App\Http\Controllers;

use App\Models\TableExpositore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TableExpositoreRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TableExpositoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tableExpositores = TableExpositore::paginate();

        return view('table-expositore.index', compact('tableExpositores'))
            ->with('i', ($request->input('page', 1) - 1) * $tableExpositores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tableExpositore = new TableExpositore();

        return view('table-expositore.create', compact('tableExpositore'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TableExpositoreRequest $request): RedirectResponse
    {   
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Apellidos' => 'required|string|max:255',
            'foto' => 'required|image|max:2048',
            'Correo' => 'required|string|max:255',
            'Telefono' => 'nullable|string|max:255',
            'Facebook' => 'nullable|string|max:255',
            'GitHub' => 'nullable|string|max:255',
            'Instagram' => 'nullable|string|max:255',
            'X' => 'nullable|string|max:255',
        ]);



        $newProduct = new TableExpositore();

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = 'images/Expositores/';
            $filename = time() . $file->getClientOriginalName();
            $uploadFile = $request->file('foto')->move($destinationPath, $filename);
            $newProduct->foto = $destinationPath . $filename;
        }

        $newProduct->Nombre = $request->Nombre;
        $newProduct->Apellidos = $request->Apellidos;
        $newProduct->Correo = $request->Correo;
        $newProduct->Telefono = $request->Telefono;
        $newProduct->Facebook = $request->Facebook;
        $newProduct->GitHub = $request->GitHub;
        $newProduct->Instagram = $request->Instagram;
        $newProduct->X = $request->X;
        
        $newProduct->save();

        return Redirect::route('table-expositores.index')
            ->with('success', 'TableExpositore created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tableExpositore = TableExpositore::find($id);

        return view('table-expositore.show', compact('tableExpositore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tableExpositore = TableExpositore::find($id);

        return view('table-expositore.edit', compact('tableExpositore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TableExpositoreRequest $request, TableExpositore $tableExpositore): RedirectResponse
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Apellidos' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
            'Correo' => 'required|string|max:255',
            'Telefono' => 'nullable|string|max:255',
            'Facebook' => 'nullable|string|max:255',
            'GitHub' => 'nullable|string|max:255',
            'Instagram' => 'nullable|string|max:255',
            'X' => 'nullable|string|max:255',
        ]);

        $tableExpositore->Nombre = $request->Nombre;
        $tableExpositore->Apellidos = $request->Apellidos;
        $tableExpositore->Correo = $request->Correo;
        $tableExpositore->Telefono = $request->Telefono;
        $tableExpositore->Facebook = $request->Facebook;
        $tableExpositore->GitHub = $request->GitHub;
        $tableExpositore->Instagram = $request->Instagram;
        $tableExpositore->X = $request->X;

        

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = 'images/Expositores/';
            $filename = time() . $file->getClientOriginalName();
            $uploadFile = $request->file('foto')->move($destinationPath, $filename);
            $tableExpositore->foto = $destinationPath . $filename;
        }

        
        
        $tableExpositore->save();

        return Redirect::route('table-expositores.index')
            ->with('success', 'TableExpositore updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        TableExpositore::find($id)->delete();

        return Redirect::route('table-expositores.index')
            ->with('success', 'TableExpositore deleted successfully');
    }
}
