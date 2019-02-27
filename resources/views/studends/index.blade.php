@extends('layout.table')

@section('content-title')
	Lista de Federados
@endsection

@section('content-description')
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
@endsection

@section('form-button')
	href="{{ route('federados.nuevo') }}"
@endsection

@section('table-head')
	
	<th>Imagen</th>
	<th>Nombre</th>
	<th>E-mail</th>
	<th>Licencia</th>
	<th>creado</th>
	<th>Acciones</th>

@endsection

@section('table-body')

	@foreach ($data as $studend)
		<tr>
		    <td class="py-1">
		      <img src="{{ Storage::url($studend->user->profilePicture) }}" alt="image">
		    </td>
		    <td>
		      	{{ $studend->name }} {{ $studend->lastname }}
		    </td>
		    <td>
		    	{{ $studend->email }}
		    </td>
		    <td>
		     	{{ $studend->license ?? '-' }}
		    </td>
		    <td>
		    	{{ $studend->created_at }}
		    </td>
		    <td>
		    	<div class="btn-group" role="group" aria-label="Basic example">
	              <a href="{{ route('federados.editar', ['studends' => $studend->id]) }}" class="btn btn-outline-secondary px-2">
	              	<i class="mdi mdi-pencil"></i>
	              </a>
	              <a href="{{ route('federados.ver', ['studends' => $studend->id]) }}" class="btn btn-outline-secondary px-2">
					<i class="mdi mdi-eye"></i>
	              </a>
	              <button id="boton-eliminar" class="btn btn-outline-secondary px-2" onclick="document.getElementById('{{$studend->id}}').submit()">
					<i class="mdi mdi-delete"></i>
	              </button>

	              <form class="d-none" id="{{$studend->id}}" method="POST" action="{{ route('federados.eliminar', ['studend' => $studend->id]) }}">
                        @csrf
                        @method('DELETE')
                   </form>
	            </div>
		    </td>
		</tr>
	@endforeach

@endsection