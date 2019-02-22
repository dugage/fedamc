@extends('layout.form')

@section('content-title')
	Nuevo Usuario
@endsection

@section('content-description')
	Estas por crear un nuevo usuario. Recuerda rellenar los campos <strong>Nombre</strong>, <strong>Apellidos</strong>, <strong>Correo Electrónico</strong>, <strong>Contraseña</strong> y el <strong>Tipo de usuario</strong> ya que son obligatorios.
@endsection

@section('form-action')
	action = "{{ route('usuarios.nuevo') }}" enctype="multipart/form-data"
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
	</div>
	<div class="row">
	  <div class="col-md-6">
	  	<div class="form-group row">
	      <label class="col-sm-3 col-form-label">Correo Electrónico</label>
	      <div class="col-sm-9">
	        <input name="email" class="form-control" placeholder="Correo Electrónico" value="{{ old('email') }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Número de Licencia</label>
	      <div class="col-sm-9">
	        <input name="licence" class="form-control" type="text" placeholder="Licencia" name="{{ old('licence') }}">
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Contraseña</label>
	      <div class="col-sm-9">
	        <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Contraseña" value="">
	      </div>
	    </div>
	  </div>

	  <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Usuario tipo</label>
          <div class="col-sm-9">
            <select name="typeUser" class="form-control">
              <option value="federado">Federado</option>
              <option value="maestro">Maestro</option>
              <option value="maestro">Director</option>
              <option value="maestro">Administrador</option>
            </select>
          </div>
        </div>
      </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
          <label class="col-sm-3 col-form-label">Foto de Perfil</label>
          <div class="input-group col-sm-9">
            <input type="file" name="profilePicture" class="form-control file-upload-info" placeholder="Subir imagen" accept="image/png, image/jpeg, image/gif">
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-info" type="button">Subir</button>
            </span>
          </div>
        </div>
	  </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <button type="submit" class="btn btn-danger mr-2">Enviar</button>
	      <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
	    </div>
	  </div>
	</div>
@endsection