@extends('layout.layout')

@section('content')

  <div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h2>
            @section('content-title')
              Striped Table
            @show
          </h2>
          <p class="card-description">
            @section('content-description')
              Add class
              <code>.table-striped</code>
            @show
          </p>
          <div class="table-responsive">

            <div class="col-md-2 p-0">
              <a class="btn btn-secondary btn-block" @yield('form-button')>Añadir Nuevo
                <i class="mdi mdi-plus"></i>
              </a>
            </div>
            @section('content-section')
              <table class="table">
                <thead>
                  <tr>
                    @section('table-head')
                      <th>
                        Usuario
                      </th>
                      <th>
                        Nombre
                      </th>
                      <th>
                        Club
                      </th>
                      <th>
                        Tasa
                      </th>
                      <th>
                        Licencia
                      </th>
                    @show
                  </tr>   
                </thead>
                <tbody>
                  @section('table-body')
                    <tr>
                      <td class="py-1">
                        <img src="{{ asset('fedamc/images/faces-clipart/pic-1.png') }}" alt="image">
                      </td>
                      <td>
                        Herman Beck
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 77.99
                      </td>
                      <td>
                        May 15, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="{{ asset('fedamc/images/faces-clipart/pic-2.png') }}" alt="image">
                      </td>
                      <td>
                        Messsy Adam
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $245.30
                      </td>
                      <td>
                        July 1, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="{{ asset('fedamc/images/faces-clipart/pic-3.png') }}" alt="image">
                      </td>
                      <td>
                        John Richards
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $138.00
                      </td>
                      <td>
                        Apr 12, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="{{ asset('fedamc/images/faces-clipart/pic-4.png') }}" alt="image">
                      </td>
                      <td>
                        Peter Meggik
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 77.99
                      </td>
                      <td>
                        May 15, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="{{ asset('fedamc/images/faces-clipart/pic-1.png') }}" alt="image">
                      </td>
                      <td>
                        Edward
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 160.25
                      </td>
                      <td>
                        May 03, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="{{ asset('fedamc/images/faces-clipart/pic-2.png') }}" alt="image">
                      </td>
                      <td>
                        John Doe
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 123.21
                      </td>
                      <td>
                        April 05, 2015
                      </td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="{{ asset('fedamc/images/faces-clipart/pic-3.png') }}" alt="image">
                      </td>
                      <td>
                        Henry Tom
                      </td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>
                        $ 150.00
                      </td>
                      <td>
                        June 16, 2015
                      </td>
                    </tr>
                  @show
                </tbody>
              </table>
            @show
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection