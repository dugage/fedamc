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
	
	<th>Usuario</th>
	<th>Nombre</th>
	<th>DNI</th>
	<th>creado</th>
	<th>Club</th>
	<th>Acciones</th>

@endsection

@section('table-body')

	<tr>
	    <td class="py-1">
	      <img src="{{ asset('fedamc/images/faces-clipart/pic-1.png') }}" alt="image">
	    </td>
	    <td>
	      Herman Beck
	    </td>
	    <td>
	      77985965M
	    </td>
	    <td>
	      Mayo 15, 2015
	    </td>
	    <td>
	    	Sevilla F.C
	    </td>
	    <td>
	    	<div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ route('federados.editar') }}" class="btn btn-outline-secondary px-2">Editar</a>
              <a href="{{ route('federados.ver') }}" class="btn btn-outline-secondary px-2">Ver</a>
              <a href="#" class="btn btn-outline-secondary px-2">Eliminar</a>
            </div>
	    </td>
	</tr>
	<tr>
	    <td class="py-1">
	      <img src="{{ asset('fedamc/images/faces-clipart/pic-1.png') }}" alt="image">
	    </td>
	    <td>
	      Erick Beck
	    </td>
	    <td>
	      77987685Q
	    </td>
	    <td>
	      Mayo 28, 2015
	    </td>
	    <td>
	    	Betis
	    </td>
	    <td>
	    	<div class="btn-group" role="group" aria-label="Basic example">
              <a href="{{ route('federados.editar') }}" class="btn btn-outline-secondary px-2">Editar</a>
              <a href="{{ route('federados.ver') }}" class="btn btn-outline-secondary px-2">Ver</a>
              <button class="btn btn-outline-secondary px-2">Eliminar</button>
            </div>
	    </td>
	</tr>

@endsection