@extends('blog.layout.admin.base')
@section('contenido')
<h1>Usuarios</h1>
<form method="post">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label >Nombre</label>
		<input type="text" name="nombre" id="nombre" class="form-control" value="{{$user->nombre}}">
	</div>
	<div class="form-group">
		<label >Email</label>
		<input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
	</div>
	<div class="form-group">
		<label >
			@if(intval($user->id) > 0)
				Nuevo Password
			@else
				Password
			@endif
		</label>
		<input type="password" name="password" id="password" class="form-control">
	</div>
	<div class="form-group text-right">
		<input type="submit" value="Guardar" class="btn btn-success">
	</div>
</form>
@stop