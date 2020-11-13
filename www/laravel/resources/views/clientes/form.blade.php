<div class="form-group">
<label for="DNI" class="control-label">{{'DNI'}}</label>
<input type="text" class="form-control {{$errors->has('DNI')?'is-invalid':''}} "name="DNI" id="DNI"
value="{{ isset($cliente->DNI)?$cliente->DNI:old('DNI')}}">
{!! $errors->first('DNI','<div class="invalid-feedback">Complete su DNI</div>')!!}
</div>


<div class="form-group">
<label for="Apellido" class="control-label">{{'Apellido'}}</label>
<input type="text" class="form-control {{$errors->has('Apellido')?'is-invalid':''}}" name="Apellido" id="Apellido"
value="{{ isset($cliente->Apellido)?$cliente->Apellido:old('Apellido')}}">
{!! $errors->first('Apellido','<div class="invalid-feedback">Complete su Apellido</div>')!!}
</div>


<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}} "name="Nombre" id="Nombre"
value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre')}}">
{!! $errors->first('Nombre','<div class="invalid-feedback">Complete su Nombre</div>')!!}
</div>


<div class="form-group">
<label for="Direccion" class="control-label">{{'Direccion'}}</label>
<input type="text" class="form-control {{$errors->has('Direccion')?'is-invalid':''}} "name="Direccion" id="Direccion"
value="{{ isset($cliente->Direccion)?$cliente->Direccion:old('Direccion')}}">
{!! $errors->first('Direccion','<div class="invalid-feedback">Complete su Direccion</div>')!!}
</div>


<div class="form-group">
<label for="Email"class="control-label">{{'Email'}}</label>
<input type="email" class="form-control {{$errors->has('Email')?'is-invalid':''}}" name="Email" id="Email"
value="{{ isset($empleado->Email)?$empleado->Email:old('Email')}}">
{!! $errors->first('Email','<div class="invalid-feedback">Complete su Email</div>')!!}
</div>

<div class="form-group">
<label for="Telefono" class="control-label">{{'Telefono'}}</label>
<input type="text" class="form-control {{$errors->has('Telefono')?'is-invalid':''}} "name="Telefono" id="Telefono"
value="{{ isset($cliente->Telefono)?$cliente->Telefono:old('Telefono')}}">
{!! $errors->first('Telefono','<div class="invalid-feedback">Complete su Telefono</div>')!!}
</div>

<br>

<input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}
" >

<a class="btn btn-primary" href="{{url('clientes')}}">Regresar</a>
