@include('login.header')
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="auto-form-wrapper">
              <form method="post" action="{{ route('login') }}">
                
                {{ csrf_field() }}

                <div class="form-group">
                  <label class="label">Correo Electrónico</label>
                  <div class="input-group">
                    <input name="email" type="text" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Contraseña</label>
                  <div class="input-group">
                    <input name="password" type="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" type="submit">Iniciar Sesión</button>
                </div>
                <!--
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                      <input type="checkbox" class="form-check-input" checked> Mantenerme conectado
                    </label>
                  </div>
                  <a href="#" class="text-small forgot-password text-black">Olvidaste tu contraseña</a>
                </div>
                -->
              <!-- 
                <div class="form-group">
                  <button class="btn btn-block g-login">
                    <img class="mr-3" src="../../images/file-icons/icon-google.svg" alt="">Log in with Google</button>
                </div>
              -->
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">No eres miembro?</span>
                  <a href="  {{  route('registro') }}" class="text-black text-small">Registrate</a>
                </div>
              </form>
            </div>
            <!--
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
          -->
            <p class="footer-text text-center">copyright © 2018 Fedamc. Diseño CREAMERITO.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@include('login.footer')