@extends('back.layout.master')
@section('title', 'Config')
@section('main')
<div class="pagetitle">
	<h1>Data Web Admin Garuda UMKM</h1>
	<nav>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
	    <li class="breadcrumb-item active">Detail Web</li>
	  </ol>
	</nav>
</div>

<div class="card">
	<div class="card-header">
		{{--<a href="{{url('config-update')}}"><button type="button" class="btn btn-info rounded-pill" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-pencil-fill"></i>Ubah Data</button></a>--}}
		@if(Session::has('success'))
			<div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
	      {{Session::get('success')}}
	      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>
	  @elseif(Session::has('error'))
	  	<div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
	      {{Session::get('error')}}
	      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	    </div>
    @endif
	</div>

	<ul class="nav nav-tabs nav-tabs-bordered">
    <li class="nav-item">
      <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview">Overview</button>
    </li>
    <li class="nav-item">
      <button class="nav-link" data-bs-toggle="tab" data-bs-target="#edit">Edit Config</button>
    </li>
  </ul>

  <div class="card-body">
  	<!-- OVERVIEW -->
  	<div class="tab-content pt-2">
	    <div class="tab-pane fade show active profile-overview" id="overview">
	      <h5 class="card-title">About</h5>
	      <p class="small fst-italic">{{$data->app_desc}}</p>

	      <h5 class="card-title">Detail</h5>
	      <div class="row mt-2">
	        <div class="col-lg-3 col-md-4 label "><span class="badge border-dark border-1 text-dark">App Name</span></div>
	        <div class="col-lg-9 col-md-8">{{$data->app_name}}</div>
	      </div>
	      <div class="row mt-2">
	        <div class="col-lg-3 col-md-4 label"><span class="badge border-dark border-1 text-dark">App Author</span></div>
	        <div class="col-lg-9 col-md-8">{{$data->app_author}}</div>
	      </div>
	      <div class="row mt-2">
	        <div class="col-lg-3 col-md-4 label"><span class="badge border-dark border-1 text-dark">Year</span></div>
	        <div class="col-lg-9 col-md-8">{{$data->app_year}}</div>
	      </div>
	      <div class="row mt-2">
	        <div class="col-lg-3 col-md-4 label"><span class="badge border-dark border-1 text-dark">Version</span></div>
	        <div class="col-lg-9 col-md-8">{{$data->app_vers}}</div>
	      </div>
	      <div class="row mt-2">
	        <div class="col-lg-3 col-md-4 label"><span class="badge border-dark border-1 text-dark">Icon</span></div>
	        <img class="col-lg-3 col-md-4" src="{{asset('image/'.$data->app_icon)}}" alt="Icon">
	      </div>
	      <div class="row mt-4">
	        <div class="col-lg-3 col-md-4 label"><span class="badge border-dark border-1 text-dark">Favicon</span></div>
	        <img class="col-lg-3 col-md-4" src="{{asset('image/'.$data->app_favicon)}}" alt="Favicon" style="background-color: grey">
	      </div>
	    </div>
	    <!-- EDIT -->
	    <div class="tab-pane fade profile-edit pt-3" id="edit">
      <form action="{{url('config-update')}}" method="POST" enctype="multipart/form-data">
      	@csrf
      	@method('put')
        <div class="row mb-3">
          <label for="icon" class="col-md-4 col-lg-3 col-form-label">Icon</label>
          <div class="col-md-8 col-lg-9">
            <img src="{{asset('image/'.$data->app_icon)}}" alt="Icon" class="col-lg-3 col-md-4">
            <div class="pt-2">
              <input class="form-control" type="file" name="app_icon">
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="icon" class="col-md-4 col-lg-3 col-form-label">Favicon</label>
          <div class="col-md-8 col-lg-9">
            <img src="{{asset('image/'.$data->app_favicon)}}" style="background-color: grey" alt="Icon" class="col-lg-3 col-md-4">
            <div class="pt-2">
              <input class="form-control" type="file" name="app_favicon">
            </div>
          </div>
        </div>

        <div class="row mb-3">
          <label for="fullName" class="col-md-4 col-lg-3 col-form-label">App Name</label>
          <div class="col-md-8 col-lg-9">
            <input name="app_name" type="text" class="form-control" value="{{$data->app_name}}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="company" class="col-md-4 col-lg-3 col-form-label">App Author</label>
          <div class="col-md-8 col-lg-9">
            <input name="app_author" type="text" class="form-control" value="{{$data->app_author}}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="about" class="col-md-4 col-lg-3 col-form-label">App Desc</label>
          <div class="col-md-8 col-lg-9">
            <textarea name="app_desc" class="form-control" style="height: 100px">{{$data->app_desc}}</textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label for="Job" class="col-md-4 col-lg-3 col-form-label">Year</label>
          <div class="col-md-8 col-lg-9">
            <input name="app_year" type="text" class="form-control" value="{{$data->app_year}}">
          </div>
        </div>

        <div class="row mb-3">
          <label for="Country" class="col-md-4 col-lg-3 col-form-label">Version</label>
          <div class="col-md-8 col-lg-9">
            <input name="app_vers" type="text" class="form-control" value="{{$data->app_vers}}">
          </div>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
      </form>
	  	</div>
	  </div>
  </div>
  
	</div>
</div>
@endsection