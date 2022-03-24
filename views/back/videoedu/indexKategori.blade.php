@extends('back.layout.master')
@section('title', 'Data - Kategori Video Edu')
@section('main')
<div class="pagetitle">
	<h1>Data Kategori Video Edu</h1>
	<nav>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
	    <li class="breadcrumb-item active">Kategori Video Edu</li>
	  </ol>
	</nav>
</div>

<div class="card">
	<div class="card-header">
		<button type="button" class="btn btn-info rounded-pill" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-plus-lg mr"></i>Kategori</button>
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

  <div class="card-body">
	  <div class="table-responsive">
	  	<table class="table table-bordered datatable">
				<thead>
				  <tr>
						<th scope="col">#</th>
						<th scope="col">Kategori</th>
						<th scope="col">Keterangan</th>
						<th scope="col">Act</th>
				  </tr>
				</thead>
				<tbody>
					@foreach($data as $index => $d)
				  <tr>
						<th scope="row">{{$index+1}}</th>
						<td>{{$d->kategori}}</td>
						<td>{{$d->keterangan}}</td>
						<td>
							<a href="{{url('videoedu-kategori-delete', $d->id)}}" onclick="return confirm('Hapus data ini?')"><button class="btn btn-info"><i class="bi bi-trash-fill"></i></button></a>
						</td>
				  </tr>
				  @endforeach
				</tbody>
			</table>
	  </div>
  </div>
</div>
<!-- Modal Tambah -->
<div class="modal fade" id="basicModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Tambah Data Kategori Exportir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form class="row g-3" action="{{url('videoedu-kategori-proses')}}" method="POST" enctype="multipart/form-data">
    			@csrf
	        <div class="col-12">
	          <div class="form-floating">
	            <input type="text" class="form-control" required placeholder="Nama kategori" name="kategori">
	            <label for="floatingName">Kategori<span class="text-danger">*</span></label>
	          </div>
	        </div>
	        <div class="col-12">
	          <div class="form-floating">
	            <textarea class="form-control" required placeholder="Keterangan kategori" name="keterangan" style="height: 100px;"></textarea>
	            <label for="floatingTextarea">Keterangan</label>
	          </div>
	        </div>
	        <div class="text-center">
	          <button type="submit" class="btn btn-primary">Submit</button>
	          <button type="reset" class="btn btn-secondary">Reset</button>
	        </div>
	      </form>
      </div>
    </div>
  </div>
</div>
@endsection