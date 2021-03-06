@extends('layout.form')

@section('content-title')
	Nuevo Federado
@endsection

@section('content-description')
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam delectus necessitatibus consequuntur sit explicabo odit ad!
@endsection

@section('form-action')
	action = "{{ route('federados.store') }}" enctype="multipart/form-data"
@endsection

@section('form-content')
	@csrf
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">
	      		Nombre
	      </label>
	      <div class="col-sm-9">
	        <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Apellidos</label>
	      <div class="col-sm-9">
	        <input name="lastname" type="text" class="form-control" placeholder="Apellidos" value="{{ old('lastname') }}">
	      </div>
	    </div>
	  </div>
	</div><div class="row">
	  <div class="col-md-6">
	  	<div class="form-group row">
	      <label class="col-sm-3 col-form-label">Correo Electrónico</label>
	      <div class="col-sm-9">
	        <input name="email" type="text" class="form-control" placeholder="dd/mm/yyyy" value="{{ old('email') }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Número de Licencia</label>
	      <div class="col-sm-9">
	        <input name="license" class="form-control" type="text" placeholder="Licencia" value="{{ old('license') }}">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Inicio de Licencia</label>
	      <div class="col-sm-9">
	        <input name="startLicense" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{ old('startLicense') }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fin de Licencia</label>
	      <div class="col-sm-9">
	        <input name="endLicense" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{ old('endLicense') }}">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
	      <div class="col-sm-9">
	        <input name="birdDate" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{ old('birdDate') }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Club</label>
	      <div class="col-sm-9">
	        <input name="club" class="form-control" type="text" placeholder="Club" value="{{ old('club') }}">
	      </div>
	    </div>
	  </div>
	  
	</div>
	<p class="card-description">
	  Dirección
	</p>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Calle / Av</label>
	      <div class="col-sm-9">
	        <input name="address" type="text" class="form-control" placeholder="Calle" value="{{ old('address') }}">
	      </div>
	    </div>
	  </div>

	  <div class="col-md-4">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Cuidad</label>
	      <div class="col-sm-9">
	        <input name="city" type="text" class="form-control" placeholder="Cuidad" value="{{ old('city') }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-2">
	    <div class="form-group row">
	      <label class="col-sm-4 col-form-label">C.P</label>
	      <div class="col-sm-8">
	        <input name="cp" type="text" class="form-control" placeholder="C.P" value="{{ old('cp') }}">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
          <label class="col-sm-3 col-form-label">Foto de Perfil</label>
          <div class="input-group col-sm-9">
            <input name="profilePicture" type="file" class="form-control file-upload-info" placeholder="Subir imagen">
          </div>
        </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Contraseña</label>
	      <div class="col-sm-9">
	        <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Contraseña" value="">
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Maestro</label>
	      <div class="col-sm-9">
	        <select name="idTeacher" class="form-control">
	        	@foreach ($teachers as $element)
	        		<option value="{{ $element->id }}">{{ $element->name }} {{ $element->lastname }}</option>
	        	@endforeach
	        </select>
	      </div>
	    </div>
	  </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Estado</label>
          <div class="col-sm-9">
            <select name="active" class="form-control">
              <option value="1">Activo</option>
              <option value="0">Inactivo</option>
            </select>
          </div>
        </div>
      </div>
    </div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <button type="submit" class="btn btn-success mr-2">Guardar Cambios</button>
	      <a href="{{ route('federados') }}" class="btn btn-light">Volver a la lista</a>
	    </div>
	  </div>
	</div>
@endsection