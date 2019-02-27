@extends('layout.form')

@section('content-title')
	Detalles Maestro #{{ $teacher->id }}
@endsection

@section('content-description')
	
@endsection

@section('form-action')
	
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
	        <input name="name" type="text" class="form-control" placeholder="Nombre" value="{{ $teacher->name }}" disabled>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Apellidos</label>
	      <div class="col-sm-9">
	        <input name="lastname" type="text" class="form-control" placeholder="Apellidos" value="{{ $teacher->lastname }}" disabled>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	  	<div class="form-group row">
	      <label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
	      <div class="col-sm-9">
	        <input name="fNacimiento" type="date" class="form-control" placeholder="dd/mm/yyyy" value="{{ $teacher->fNacimiento }}" disabled>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Número de Licencia</label>
	      <div class="col-sm-9">
	        <input name="license" class="form-control" type="text" placeholder="Licencia" value="{{ $teacher->license }}" disabled>
	      </div>
	    </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Teléfono</label>
	      <div class="col-sm-9">
	        <input name="phone" class="form-control" type="text" placeholder="Teléfono" value="{{ $teacher->phone }}" disabled>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Correo Electrónico</label>
	      <div class="col-sm-9">
	        <input name="email" class="form-control" type="text" placeholder="Correo Electrónico" value="{{ $teacher->email }}" disabled>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Actividad</label>
	      <div class="col-sm-9">
	        <input name="activity" class="form-control" type="text" placeholder="Actividad" value="{{ $teacher->activity }}" disabled>
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
              <input name="rate" type="text" class="form-control" placeholder="00.00" aria-label="Username" aria-describedby="basic-addon1" value="{{ $teacher->rate }}" disabled>
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
            <input type="file" name="profilePicture" class="form-control file-upload-info" placeholder="Subir imagen" accept="image/png, image/jpeg, image/gif" disabled>
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-info" type="button">Subir</button>
            </span>
          </div>
          <div class="col-sm-3 col-form-label"></div>
          <div class="col-sm-1 col-form-label">
            <img class="img-md rounded-circle mb-4 mb-md-0" src="{{ Storage::url($teacher->user->profilePicture) }}" alt="profile image">
          </div>
        </div>
	  </div>
	  <div class="col-md-6">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Contraseña</label>
	      <div class="col-sm-9">
	        <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Contraseña" value="{{ $teacher->user->password }}" disabled>
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
	        <input name="address" type="text" class="form-control" placeholder="Calle" value="{{ $teacher->address }}" disabled>
	      </div>
	    </div>
	  </div>


	  <div class="col-md-4">
	    <div class="form-group row">
	      <label class="col-sm-3 col-form-label">Cuidad</label>
	      <div class="col-sm-9">
	        <input name="city" type="text" class="form-control" placeholder="Cuidad" value="{{ $teacher->city }}" disabled>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-2">
	    <div class="form-group row">
	      <label class="col-sm-4 col-form-label">C.P</label>
	      <div class="col-sm-8">
	        <input name="cp" type="text" class="form-control" placeholder="C.P" value="{{ $teacher->cp }}" disabled>
	      </div>
	    </div>
	  </div>
	  
	</div>
	<div class="row">
      <div class="col-md-6">
        <div class="form-group row">
          <label class="col-sm-3 col-form-label">Estado</label>
          <div class="col-sm-9">
            <select name="active" class="form-control" disabled>
              <option value="1" {{ $teacher->user->active == '1' ? 'selected' : ''}}>Activo</option>
              <option value="0" {{ $teacher->user->active == '0' ? 'selected' : ''}}>Inactivo</option>
            </select>
          </div>
        </div>
      </div>
    </div>

	<div class="row">
	  <div class="col-md-6">
	    <div class="form-group row">
	      <a href="{{ route('maestros.editar', ['teachers' => $teacher->id ]) }}" class="btn btn-danger mr-2">Editar</button>
	      <a href="{{ route('maestros') }}" class="btn btn-light">Volver a la lista</a>
	    </div>
	  </div>
	</div>
@endsection