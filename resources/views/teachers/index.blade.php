@extends('layout.table')

@section('content-title')
	Lista de Maestros
@endsection

@section('content-description')
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
@endsection

@section('form-button')
	href="{{ route('maestros.nuevo') }}"
@endsection

@section('table-head')
	
	<th>Usuario</th>
	<th>Nombre</th>
	<th>Correo Electrónico</th>
	<th>Estado</th>
	<th>Licencia</th>
	<th>Acciones</th>

@endsection

@section('table-body')

	@foreach ($teachers as $teacher)
		<tr>
		    <td class="py-1">
		      <img src="{{ asset('fedamc/images/faces-clipart/pic-1.png') }}" alt="image">
		    </td>
		    <td>
		      {{ $teacher->name }}
		    </td>
		    <td>
		      {{ $teacher->email }}
		    </td>
		    <td>
		    	@if ($teacher->active == 0)
		    		<label class="badge badge-danger">Inactivo</label>
		    	@else
		    		<label class="badge badge-success">Activo</label>
		    	@endif
		      
		    </td>
		    <td>
		      <strong>#{{ $teacher->license }}</strong>
		    </td>
		    <td>
		    	<div class="btn-group" role="group" aria-label="Basic example">
	              <a href="{{ route('maestros.editar', ['teachers' => $teacher->id]) }}" class="btn btn-outline-secondary px-2">
	              	<i class="mdi mdi-pencil"></i>
	              </a>
	              <a href="{{ route('maestros.ver', ['teachers' => $teacher->id]) }}" class="btn btn-outline-secondary px-2">
					<i class="mdi mdi-eye"></i>
	              </a>
	              <button id="boton-eliminar" class="btn btn-outline-secondary px-2" onclick="document.getElementById('{{$teacher->id}}').submit()">
					<i class="mdi mdi-delete"></i>
	              </button>

	              <form class="d-none" id="{{$teacher->id}}" method="POST" action="{{ route('maestros.eliminar', ['teachers' => $teacher->id]) }}">
                        @csrf
                        @method('DELETE')
                   </form>
	            </div>
		    </td>
		</tr>
	@endforeach

@endsection