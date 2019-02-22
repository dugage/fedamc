@extends('layout.form')

@section('content-title')
	Nuevo Maestro
@endsection

@section('content-description')
	Estas por añadir un nuevo maestro. Recuerda que los campos <strong>Nombre</strong>, <strong>Correo Electrónico</strong> y <strong>Licencia</strong> son obligatorios. 
@endsection

@section('form-action')
	action = "{{ route('maestros.nuevo') }}" enctype="multipart/form-data"
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
	      <label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
	      <div class="col-sm-9">
	        <input name="fNaciento" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{ old('fNaciento') }}">
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
	      <label class="col-sm-3 col-form-label">Teléfono</label>
	      <div class="col-sm-9">
	        <input name="phone" class="form-control" type="text" placeholder="Teléfono" value="{{ old('phone') }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Correo Electrónico</label>
	      <div class="col-sm-9">
	        <input name="email" class="form-control" type="text" placeholder="Correo Electrónico" value="{{ old('email') }}">
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Actividad</label>
	      <div class="col-sm-9">
	        <input name="activity" class="form-control" type="text" placeholder="Actividad" value="{{ old('activity') }}">
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Tasa</label>
	      <div class="col-sm-9">
	        <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">€</span>
              </div>
              <input name="rate" type="text" class="form-control" placeholder="00.00" aria-label="Username" aria-describedby="basic-addon1" value="{{ old('rate') }}">
            </div>
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
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Contraseña</label>
	      <div class="col-sm-9">
	        <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Contraseña">
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
	      <label class="col-sm-3 col-form-label">Calle</label>
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
	      <button type="submit" class="btn btn-danger mr-2">Enviar</button>
	      <a href="{{ url()->previous() }}" class="btn btn-light">Cancel</a>
	    </div>
	  </div>
	</div>
@endsection