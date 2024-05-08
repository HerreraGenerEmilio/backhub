<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Oferta;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        Log::info('Datos de la solicitud: testeame esta por favor funciona', $request->all());

        
       
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' => 'required|string',
            'publicador' => 'required|integer',
            'sector' => 'required|integer',
        ]);

        Oferta::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'publicador' => $request->publicador,
            'sector' => $request->sector,
        ]);

        return response()->json(['message' => 'Oferta creada exitosamente'], 200);
    }

    public function token()
    {
        return csrf_token();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $oferta = Oferta::findOrFail($id);

        return response()->json($oferta, 200);
    }

    public function user()
    {
        $ofertas = Oferta::where('publicador', auth()->user()->id)->paginate(7); // Paginar con 10 resultados por página
        $username = auth()->user()->name;
        $userId = auth()->user()->id;

        return [
            'userId'=> $userId,
            'username' => $username,
            'ofertas' => $ofertas,
        ];
    }

    public function img()
    {
        $user = User::find(auth()->user()->id);
        $emmpresa = Empresa::find($user->empresa); ;
        $img = $emmpresa->logo;
        return ['img' => $img];
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
    public function update(Request $request)
    {
        Log::info('Datos de la solicitud:', $request->all());
        $oferta = Oferta::findOrFail($request->id);
        $request->validate([
            'id' => 'required|integer', // Aseguramos que la ID esté presente y sea un número entero
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' => 'required|string',
            'publicador' => 'required|integer',
            'sector' => 'required|integer',
        ]);

        // Buscamos la oferta por su ID en la base de datos
        $oferta->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'imagen' => $request->imagen,
            'publicador' => $request->publicador,
            'sector' => $request->sector,
        ]);

        return response()->json(['message' => 'Oferta actualizada exitosamente'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $oferta = Oferta::findOrFail($id);
        $oferta->delete();

        return response()->json(['message' => 'Oferta eliminada exitosamente'], 200);
    }
}
