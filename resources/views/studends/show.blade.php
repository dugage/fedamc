@extends('layout.form')

@section('content-title')
	Detalles Federado
@endsection

@section('content-description')
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam delectus necessitatibus consequuntur sit explicabo odit ad!
@endsection

@section('form-action')
	action = "{{ route('federados.editar') }}"
@endsection

@section('form-content')
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">
	      		Nombre
	      </label>
	      <div class="col-sm-9">
	        <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ $studend->name }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Apellidos</label>
	      <div class="col-sm-9">
	        <input name="lastname" type="text" class="form-control" placeholder="Apellidos" value="{{ $studend->lastname }}">
	      </div>
	    </div>
	  </div>
	</div><div class="row">
	  <div class="col-md-6">
	  	<div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
	      <div class="col-sm-9">
	        <input name="fNacimiento" class="form-control" placeholder="dd/mm/yyyy" value="{{ $studend->fNacimiento }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Número de Licencia</label>
	      <div class="col-sm-9">
	        <input name="license" class="form-control" type="text" placeholder="Licencia" value="{{ $studend->license }}">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Inicio de Licencia</label>
	      <div class="col-sm-9">
	        <input name="startLicense" class="form-control" placeholder="dd/mm/yyyy" value="{{ $studend->starLicense }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fin de Licencia</label>
	      <div class="col-sm-9">
	        <input name="endLicense" class="form-control" placeholder="dd/mm/yyyy" value="{{ $studend->endLicense }}">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Club</label>
	      <div class="col-sm-9">
	        <input name="club" class="form-control" type="text" placeholder="Club" value="{{ $studend->club }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Maestro</label>
	      <div class="col-sm-9">
	        <select name="idTeacher" class="form-control">
	          <option>Eligue uno</option>
	          <option value="">Maestro1</option>
	          <option value="">Maestro2</option>
	          <option value="">Maestro4</option>
	          <option value="">Maestro5</option>
	        </select>
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
	        <input type="text" class="form-control" placeholder="Calle" value="{{ $studend->address }}">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Cuidad</label>
	      <div class="col-sm-9">
	        <input type="text" class="form-control" placeholder="Cuidad" value="{{ $studend->city }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Código Postal</label>
	      <div class="col-sm-9">
	        <input type="text" class="form-control" placeholder="C.P" value="{{ $studend->cp }}">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
          <label class="col-sm-3 col-form-label">Foto de Perfil</label>
          <input name="profilePicture" type="file" name="img[]" class="file-upload-default">
          <div class="input-group col-sm-9">
            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Subir imagen">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-info" type="button">Subir</button>
            </span>
          </div>
        </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Contraseña</label>
	      <div class="col-sm-9">
	        <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Contraseña" value="{{ $studend->password }}">
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <a href="{{ route('federados.editar', ['studends' => $studend->id ]) }}" class="btn btn-danger mr-2">Editar</button>
	      <a href="{{ route('federados') }}" class="btn btn-light">Volver a la lista</a>
	    </div>
	  </div>
	</div>
@endsection