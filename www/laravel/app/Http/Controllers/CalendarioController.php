<?php

namespace App\Http\Controllers;


use App\Calendario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CalendarioController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('calendario.index');
    }

        /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Calendario $calendario)
    {
        //
    }
}
