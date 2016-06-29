@extends('blog.layout.admin.base')
@section('contenido')
	<h1>Usuarios</h1>
	<div class="row">
		<div class="col-lg-6"></div>
		<div class="col-lg-6 text-right">
			<a href="{{asset('admin/usuarios')}}" class="btn btn-success btn-addUser">Agregar Usuarios</a>
		</div>
	</div>
	<div class="text-right">
		{!! $arUsuarios->render() !!}
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Fecha de creacion</th>
				<th>Estado</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody id="tablaUsuarios">
			@foreach($arUsuarios as $us)
			<tr>
				<td>{{$us->id}}</td>
				<td>{{$us->nombre}}</td>
				<td>{{$us->email}}</td>
				<td>{{Carbon\Carbon::parse($us->created_at)->format('d/m/Y')}}</td>
				<td>
					@if($us->estado == '1')
						Activo
					@else
						Inactivo
					@endif
				</td>
				<td>
					<a href="{{asset('admin/usuarios/edit')}}/{{$us->id}}" class="btn btn-warning btn-editUser">Editar</a>
					<a href="{{asset('admin/usuarios/delete')}}/{{$us->id}}" class="btn btn-danger btn-deleteUser">Eliminar</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
	<div class="text-right">
		{!! $arUsuarios->render() !!}
	</div>
@stop
