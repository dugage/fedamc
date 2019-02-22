@extends('layout.table')

@section('content-title')
	Lista de Usuarios
@endsection

@section('content-description')
	En esta tabla se encuentra todos los usuarios tanto federados como maestros.

	@isset ($info)

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  {{ $info }}
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>
	   
	@endisset
@endsection

@section('form-button')
	href="{{ route('usuarios.nuevo') }}"
@endsection

@section('table-head')
	
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>Email</th>
	<th>Tipo</th>
	<th>Estado</th>
	<th>Acciones</th>

@endsection

@section('table-body')
	@foreach ($users as $user)
		<tr>
		    <td class="py-1">
		      {{ $user->name }}
		    </td>
		    <td>
		      {{ $user->lastname }}
		    </td>
		    <td>
		       {{ $user->email }}
		    </td>
		    <td>
		    	@if (isset($user->teacher))
		    	    <label class="badge badge-warning">Maestro</label>
		    	@elseif(isset($user->studend))
					<label class="badge badge-success">Federado</label>
				@else
					<label class="badge badge-danger">Director</label>
				@endif
		    	
		    </td>
		    <td>
		    	<label class="badge badge-warning">Activo</label>
		    </td>
		    <td>
		    	<div class="btn-group" role="group" aria-label="Basic example">
	              <a href="{{ route('usuarios.editar', ['user' => $user->id]) }}" class="btn btn-outline-secondary px-2">
	              	<i class="mdi mdi-pencil"></i>
	              </a>
	              <a href="{{ route('usuarios.ver', ['user' => $user->id]) }}" class="btn btn-outline-secondary px-2">
					<i class="mdi mdi-eye"></i>
	              </a>
	              <button id="boton-eliminar" class="btn btn-outline-secondary px-2" onclick="document.getElementById('{{$user->id}}').submit()">
					<i class="mdi mdi-delete"></i>
	              </button>

	              <form class="d-none" id="{{$user->id}}" method="POST" action="{{ route('usuarios.eliminar', ['user' => $user->id ]) }}">
                        @csrf
                        @method('DELETE')
                   </form>
	            </div>
		    </td>
		</tr>
	@endforeach

@endsection
