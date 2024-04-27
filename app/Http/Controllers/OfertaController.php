<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ofertas = Oferta::all();
        return $ofertas;
    }

    public function page(Request $request)
    {
        // Obtener los parámetros de la solicitud
        $page = $request->input('page', 1); // Si no se proporciona, establecerá el valor predeterminado en 1
        $pageSize = $request->input('pageSize', 10);

        // Realizar la consulta paginada utilizando Eloquent
        $results = Oferta::paginate($pageSize, ['*'], 'page', $page);

        // Retornar los resultados paginados
        return response()->json($results);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oferta $oferta)
    {
        //
    }
}
