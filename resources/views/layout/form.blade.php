@extends('layout.layout')

@section('content')
	<div class="row">
		<div class="col-12 grid-margin">
	      <div class="card">
	        <div class="card-body">
	        	<h2>
	        		@section('content-title')
	          			Horizontal Two column
	          		@show
	      		</h2>
	      		<p class="card-description">
	            	@section('content-description')
	              		Personal info
	              	@show
	            </p>

	          	@if ($errors->any())
	                <blockquote class="blockquote alert-info">
		              <ul class="list-ticked mb-0">
		              @foreach ($errors->all() as $error)

		                  <li>{{ $error }}</li>
		                
		              @endforeach
		              </ul>
		            </blockquote>
	            @endif

	          <form class="form-sample" method="POST" @yield('form-action') >
	          	@section('form-content')
	            <div class="row">
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">
	                  		First Name
	                  </label>
	                  <div class="col-sm-9">
	                    <input type="text" class="form-control">
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Last Name</label>
	                  <div class="col-sm-9">
	                    <input type="text" class="form-control">
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Gender</label>
	                  <div class="col-sm-9">
	                    <select class="form-control">
	                      <option>Male</option>
	                      <option>Female</option>
	                    </select>
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Date of Birth</label>
	                  <div class="col-sm-9">
	                    <input class="form-control" placeholder="dd/mm/yyyy">
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Category</label>
	                  <div class="col-sm-9">
	                    <select class="form-control">
	                      <option>Category1</option>
	                      <option>Category2</option>
	                      <option>Category3</option>
	                      <option>Category4</option>
	                    </select>
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Membership</label>
	                  <div class="col-sm-4">
	                    <div class="form-radio">
	                      <label class="form-check-label">
	                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> Free
	                      <i class="input-helper"></i></label>
	                    </div>
	                  </div>
	                  <div class="col-sm-5">
	                    <div class="form-radio">
	                      <label class="form-check-label">
	                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional
	                      <i class="input-helper"></i></label>
	                    </div>
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
	                  <label class="col-sm-3 col-form-label">Address 1</label>
	                  <div class="col-sm-9">
	                    <input type="text" class="form-control">
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">State</label>
	                  <div class="col-sm-9">
	                    <input type="text" class="form-control">
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Address 2</label>
	                  <div class="col-sm-9">
	                    <input type="text" class="form-control">
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Postcode</label>
	                  <div class="col-sm-9">
	                    <input type="text" class="form-control">
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="row">
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">City</label>
	                  <div class="col-sm-9">
	                    <input type="text" class="form-control">
	                  </div>
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group row">
	                  <label class="col-sm-3 col-form-label">Country</label>
	                  <div class="col-sm-9">
	                    <select class="form-control">
	                      <option>America</option>
	                      <option>Italy</option>
	                      <option>Russia</option>
	                      <option>Britain</option>
	                    </select>
	                  </div>
	                </div>
	              </div>
	            </div>
	            @show
	          </form>
	        </div>
	      </div>
	    </div>
	</div>
@endsection