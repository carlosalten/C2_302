<?php

namespace App\Http\Controllers;

use App\Models\Tarjeta;
use Illuminate\Http\Request;
use App\Http\Requests\TarjetasRequest;

class TarjetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tarjeta::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TarjetasRequest $request)
    {
        $tarjeta = new Tarjeta();
        $tarjeta->numero = $request->numero;
        $tarjeta->marca = $request->marca;
        $tarjeta->cliente = $request->cliente;
        $tarjeta->cupo = $request->cupo;
        $tarjeta->utilizado = $request->utilizado;
        $tarjeta->save();
        return $tarjeta;
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarjeta $tarjeta)
    {
        return $tarjeta;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarjeta $tarjeta)
    {
        $tarjeta->numero = $request->numero;
        $tarjeta->marca = $request->marca;
        $tarjeta->cliente = $request->cliente;
        $tarjeta->cupo = $request->cupo;
        $tarjeta->utilizado = $request->utilizado;
        $tarjeta->save();
        return $tarjeta;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarjeta $tarjeta)
    {
        return $tarjeta->delete();
    }
}
