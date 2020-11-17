@extends('layouts.app')
@section('content')

<div class="container">
@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
	{{	Session::get('Mensaje')}}
</div>
<p></p>

@endif
<a href="{{url('clientes/create')}}" class="btn btn-success">Agregar cliente</a>
<nav class="navbar navbar-light float-right">
  <form class="form-inline">
    <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por DNI" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    <a href="{{url('clientes')}}" class="btn btn-outline-success">Limpiar busqueda</a>
  </form>
</nav>
<br/>
<br/>
<table class="table table-light table-hover">

	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>DNI</th>
			<th>Apellido y Nombre</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach($clientes as $cliente)
		<tr>

			<td>{{$loop->iteration}}</td>
			<td>{{$cliente->DNI}}</td>
			<td>{{$cliente->Apellido}} {{$cliente->Nombre}}</td>
			<td>{{$cliente->Direccion}}</td>
			<td>{{$cliente->Email}}</td>
			<td>

				<a class="btn btn-warning" href="{{url('/clientes/'.$cliente->id.'/edit') }}">Editar
				</a>

			<form method="post" action="{{ url('/clientes/'.$cliente->id) }}" style="display:inline">
				{{csrf_field()}}
				{{method_field('DELETE')}}
				<button class="btn btn-danger"type="submit" onclick="return confirm('Estas seguro?')" > Borrar</button>


			</form>


			 </td>
		</tr>
		@endforeach
	</tbody>

</table>
{{ $clientes->links()}}
</div>
@endsection