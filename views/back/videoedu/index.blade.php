@extends('back.layout.master')
@section('title', 'Artikel Video Edu')
@section('main')
<div class="pagetitle">
	<h1>Data Artikel Video Edu</h1>
	<nav>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
	    <li class="breadcrumb-item active">Artikel Video Edu</li>
	  </ol>
	</nav>
</div>

<div class="card">
	<div class="card-header">
		<a href="{{url('videoedu-artikel-create')}}"><button type="button" class="btn btn-info rounded-pill" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-plus-lg mr"></i>Artikel</button></a>
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
						<th scope="col" width="5%">#</th>
						<th scope="col">Judul</th>
						<th scope="col" width="20%">Act</th>
				  </tr>
				</thead>
				<tbody>
					@foreach($data as $index => $d)
				  <tr>
						<th scope="row">{{$index+1}}</th>
						<td>{{$d->judul}}</td>
						<td>
							<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detail{{$d->id}}"><i class="bi bi-eye-fill"></i></button>

							{{--<a data-bs-toggle="modal" data-bs-target="#edit{{$d->id}}"><button class="btn btn-info"><i class="bi bi-pencil-fill"></i></button></a>--}}

							<a href="{{url('videoedu-artikel-delete', $d->id)}}" onclick="return confirm('Hapus data ini?')"><button class="btn btn-info"><i class="bi bi-trash-fill"></i></button></a>
						</td>
				  </tr>
					
				  <!-- Modal Detail -->
				  <div class="modal fade" id="detail{{$d->id}}" tabindex="-1">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
					      <div class="modal-header">
					      	<h5 class="modal-title">{{$d->judul}}</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					      	<div class="card-body">
					      		<div class="embed-responsive embed-responsive-4by3">
					      			<div class="text-center">
					      			<iframe class="embed-responsive-item" src="{{ asset('backend/videoedu/'.$d->video) }}">
					      			</iframe>
					      		</div>
					      		</div>
					      		<h5 class="card-title">Kategori</h5>
						      	<p class="small fst-italic">{{$d->kategori}}</p>
	                  <h5 class="card-title">Deskripsi</h5>
						      	<p class="small fst-italic">{!! $d->deskripsi !!}</p>
					      	</div>
					      </div>
					    </div>
					  </div>
					</div>
				  @endforeach
				</tbody>
			</table>
	  </div>
  </div>
</div>
@endsection