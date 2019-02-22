@include('login.header')
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">

            @if ($errors->any())
                <blockquote class="blockquote alert-info">
                  <ul class="list-ticked mb-0">
                  @foreach ($errors->all() as $error)

                      <li>{{ $error }}</li>
                    
                  @endforeach
                  </ul>
                </blockquote>
            @endif

            <h2 class="text-center mb-4">Registro</h2>
            <div class="auto-form-wrapper">
              <form action="{{ route('registro') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                  <div class="input-group">
                    <input name="name" type="text" class="form-control" placeholder="Nombre">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input name="lastname" type="text" class="form-control" placeholder="Apellidos">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input name="email" type="text" class="form-control" placeholder="Correo Electrónico">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input name="password" type="password" class="form-control" placeholder="Contraseña">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <!--
                <div class="form-group d-flex justify-content-center">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Acepto los terminos.
                    </label>
                  </div>
                </div>
              -->
                <div class="form-group">
                  <button type="submit" class="btn btn-primary submit-btn btn-block">Registar</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Tienes una cuenta?</span>
                  <a href="{{ route('login') }}" class="text-black text-small">Iniciar Sesión</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@include('login.footer')