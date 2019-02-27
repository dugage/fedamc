@extends('layout.form')

@section('content-title')
	Detalles Federado
@endsection

@section('content-description')
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam delectus necessitatibus consequuntur sit explicabo odit ad!
@endsection

@section('form-action')

@endsection

@section('form-content')
	@csrf
	@method('PUT')
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
	      <label class="col-sm-3 col-form-label">Correo Electrónico</label>
	      <div class="col-sm-9">
	        <input name="email" type="text" class="form-control" placeholder="dd/mm/yyyy" value="{{ $studend->email }}">
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
	        <input name="startLicense" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{ $studend->startLicense }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fin de Licencia</label>
	      <div class="col-sm-9">
	        <input name="endLicense" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{ $studend->endLicense }}">
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fecha Nacimiento</label>
	      <div class="col-sm-9">
	        <input name="birdDate" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{ $studend->birdDate }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Club</label>
	      <div class="col-sm-9">
	        <input name="club" class="form-control" type="text" placeholder="Club" value="{{ $studend->club }}">
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
	        <input name="address" type="text" class="form-control" placeholder="Calle" value="{{ $studend->address }}">
	      </div>
	    </div>
	  </div>

	  <div class="col-md-4">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Cuidad</label>
	      <div class="col-sm-9">
	        <input name="city" type="text" class="form-control" placeholder="Cuidad" value="{{ $studend->city }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-2">
	    <div class="form-group row">
	      <label class="col-sm-4 col-form-label">C.P</label>
	      <div class="col-sm-8">
	        <input name="cp" type="text" class="form-control" placeholder="C.P" value="{{ $studend->cp }}">
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
          <div class="col-sm-3 col-form-label"></div>
          <div class="col-sm-1 col-form-label">
            <img class="img-md rounded-circle mb-4 mb-md-0" src="{{ Storage::url($studend->user->profilePicture) }}" alt="profile image">
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
	        	<option value="{{ $studend->idTeacher }}">{{ $studend->teacher->name }} {{ $studend->teacher->lastname }}</option>
	        </select>
	      </div>
	    </div>
	  </div>
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Estado</label>
          <div class="col-sm-9">
            <select name="active" class="form-control">
              <option value="1" {{ $studend->user->active == '1' ? 'selected' : ''}}>Activo</option>
              <option value="0" {{ $studend->user->active == '0' ? 'selected' : ''}}>Inactivo</option>
            </select>
          </div>
        </div>
      </div>
    </div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <a href="{{ route('federados.editar', ['studend' => $studend->id ]) }}" class="btn btn-danger mr-2">Editar</button>
	      <a href="{{ route('federados') }}" class="btn btn-light">Volver a la lista</a>
	    </div>
	  </div>
	</div>
@endsection

@section('custom-js')
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script>
		(function($) {
		  $(function() {
		    $('input').attr("disabled","disabled");
		  });
		})(jQuery);
	</script>
@endsection