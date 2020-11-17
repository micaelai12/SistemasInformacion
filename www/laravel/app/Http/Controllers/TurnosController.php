<?php

namespace App\Http\Controllers;

use App\Turnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TurnosController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('turnos.index');
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listado()
    {
            return view('turnos.listado');

    }
        /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $turnos
     * @return \Illuminate\Http\Response
     */
    public function show(Turnos $turnos)
    {
        //
    }
}
