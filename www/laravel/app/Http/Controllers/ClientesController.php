<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $DNI=$request->get('buscarpor');
        $datos['clientes']=Clientes::where('DNI','like',"%$DNI%")->paginate(2);
        return view('clientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('clientes.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $campos=[
                'DNI'=>'required|string|max:10',
                'Apellido'=>'required|string|max:100',
                'Nombre'=>'required|string|max:100',
                'Direccion'=>'required|string|max:100',
                'Email'=>'required|string|max:100',
                'Telefono'=>'required|string|max:15',
        ];
        $Mensaje=["required"=>'El campo :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosCliente=request()->except('_token');


       Clientes::insert($datosCliente);

       return redirect('clientes')->with('Mensaje','Cliente agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente= Clientes::findOrFail($id);

        return view('clientes.edit',compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
         $campos=[
                'DNI'=>'required|string|max:10',
                'Apellido'=>'required|string|max:100',
                'Nombre'=>'required|string|max:100',
                'Direccion'=>'required|string|max:100',
                'Email'=>'required|string|max:100',
                'Telefono'=>'required|string|max:15',
        ];

            $Mensaje=["required"=>'El campo :attribute es requerido'];
            $this->validate($request,$campos,$Mensaje);


         $datosCliente=request()->except(['_token','_method']);



         Clientes::where('id','=',$id)->update($datoscliente);



         return redirect('clientes')->with('Mensaje','Cliente modificado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $cliente= Clientes::findOrFail($id);
        Clientes::destroy($id);
        return redirect('clientes')->with('Mensaje','Cliente eliminado con exito');
    }
}

