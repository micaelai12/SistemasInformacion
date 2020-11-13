@extends('layouts.app')

@section('content')

<div class="container">
@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
	{{	Session::get('Mensaje')}}
</div>


@endif


<a href="{{url('clientes/create')}}" class="btn btn-success">Agregar cliente</a>
<br/>
<br/>
<table class="table table-light table-hover">

	<thead class="thead-light">
		<tr>
			<th>#</th>
			<th>DNI</th>
			<th>Apellido</th><th>Nombre</th>
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