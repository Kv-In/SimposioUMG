<?php

namespace App\Http\Controllers;

use App\Models\TableOrganizadore;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TableOrganizadoreRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TableOrganizadoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tableOrganizadores = TableOrganizadore::paginate();

        return view('table-organizadore.index', compact('tableOrganizadores'))
            ->with('i', ($request->input('page', 1) - 1) * $tableOrganizadores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tableOrganizadore = new TableOrganizadore();

        return view('table-organizadore.create', compact('tableOrganizadore'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TableOrganizadoreRequest $request): RedirectResponse
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'url' => 'required|image|max:3048',
            'Lider' => 'nullable|string|max:255',
            'Equipo' => 'nullable|string|max:255',
        ]);
        
        $newProduct = new TableOrganizadore();

        if ($request->hasFile('url')) {
            $file = $request->file('url');
            $destinationPath = 'images/Organizadores/';
            $filename = time() . $file->getClientOriginalName();
            $uploadFile = $request->file('url')->move($destinationPath, $filename);
            $newProduct->url = $destinationPath . $filename;
        }

        $newProduct->Nombre = $request->Nombre;
        $newProduct->Lider = $request->Lider;
        $newProduct->Equipo = $request->Equipo;
        $newProduct->save();

        return Redirect::route('table-organizadores.index')
            ->with('success', 'TableOrganizadore created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tableOrganizadore = TableOrganizadore::find($id);

        return view('table-organizadore.show', compact('tableOrganizadore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tableOrganizadore = TableOrganizadore::find($id);

        return view('table-organizadore.edit', compact('tableOrganizadore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TableOrganizadoreRequest $request, TableOrganizadore $tableOrganizadore): RedirectResponse
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'url' => 'nullable|image|max:3048',
            'Lider' => 'nullable|string|max:255',
            'Equipo' => 'nullable|string|max:255',
        ]);
        
        $tableOrganizadore->Nombre = $request->Nombre;
        $tableOrganizadore->Lider = $request->Lider;
        $tableOrganizadore->Equipo = $request->Equipo;
        

        if ($request->hasFile('url')) {
            $file = $request->file('url');
            $destinationPath = 'images/Organizadores/';
            $filename = time() . $file->getClientOriginalName();
            $uploadFile = $request->file('url')->move($destinationPath, $filename);
            $tableOrganizadore->url = $destinationPath . $filename;
        }

        
        $tableOrganizadore->save();

        return Redirect::route('table-organizadores.index')
            ->with('success', 'TableOrganizadore updated successfully.');
    }

    public function destroy($id): RedirectResponse
    {
        TableOrganizadore::find($id)->delete();

        return Redirect::route('table-organizadores.index')
            ->with('success', 'TableOrganizadore deleted successfully');
    }
}
