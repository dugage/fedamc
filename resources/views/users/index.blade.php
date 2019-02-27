@extends('layout.table')

@section('content-title')
	Lista de Usuarios
@endsection

@section('content-description')
	En esta tabla se encuentra todos los usuarios tanto federados como maestros.
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
	@foreach ($data as $user)
		<tr>
		    <td class="py-1">
		      {{ $user->name }}
		    </td>
		    <td>
		      {{ $user->lastname ?? '-' }}
		    </td>
		    <td>
		       {{ $user->email }}
		    </td>
		    <td>
		    	@if (isset($user->teacher))
		    		<a href="{{ route('maestros.ver', ['teachers' => $user->teacher->id ]) }}" class="badge badge-warning">Maestro</a>
		    		
		    	@elseif(isset($user->studend))
					<a href="{{ route('federados.ver', ['studends' => $user->studend->id ]) }}" class="badge badge-success">Federado</a>
				@else
					<a href="{{ route('usuarios.ver', ['user' => $user->id ]) }}" class="badge badge-danger">Director</a>
				@endif
		    	
		    </td>
		    <td>
		    	@if ($user->active == 1)
		    		<label class="badge badge-info">Activo</label>
		    	@else
					<label class="badge badge-dark">Desactivado</label>
		    	@endif
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
