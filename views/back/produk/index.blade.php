@extends('back.layout.master')
@section('title', 'Data - Produk')
@section('main')
<div class="pagetitle">
	<h1>Data Produk</h1>
	<nav>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
	    <li class="breadcrumb-item active">Produk</li>
	  </ol>
	</nav>
</div>

<div class="card">
	<div class="card-header">
		<button type="button" class="btn btn-info rounded-pill" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bi bi-plus-lg mr"></i>Produk</button>
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
						<th scope="col">Produk</th>
						<th scope="col">Harga</th>
						<th scope="col">Marketplace</th>
						<th scope="col">Act</th>
				  </tr>
				</thead>
				<tbody>
					@foreach($data as $index => $d)
				  <tr>
						<th scope="row">{{$index+1}}</th>
						<td>{{$d->produk}}</td>
						<td>{{$d->harga}}</td>
						<td>{{$d->marketplace}}</td>
						<td>
							<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#detail{{$d->id}}"><i class="bi bi-eye-fill"></i></button>

							<a href="{{url('produk-delete', $d->id)}}" onclick="return confirm('Hapus data ini?')"><button class="btn btn-info"><i class="bi bi-trash-fill"></i></button></a>
						</td>
				  </tr>
					
				  <!-- Modal Detail -->
				  <div class="modal fade" id="detail{{$d->id}}" tabindex="-1">
					  <div class="modal-dialog modal-lg">
					    <div class="modal-content">
					      <div class="modal-header">
					      	<h5 class="modal-title">{{$d->produk}}</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					      	<div class="card-body">
					      		<div class="text-center">
					      			<img src="{{ asset('backend/produk/'.$d->foto) }}" alt="no pict identified"  class="img-fluid">
					      		</div>
					      		<h5 class="card-title">Keterangan</h5>
						      	<p class="small fst-italic">{{$d->keterangan}}</p>
						      	<h5 class="card-title">Detail</h5>
	                  <div class="row">
	                    <div class="col-5 label"><span class="badge border-dark border-1 text-dark">Harga</span></div>
	                    <div class="col-7">{{$d->harga}}</div>
	                  </div>
	                  <div class="row">
	                    <div class="col-5 label"><span class="badge border-dark border-1 text-dark">Marketplace</span></div>
	                    <div class="col-7">{{$d->marketplace}}</div>
	                  </div>
	                  <div class="row">
	                    <div class="col-5 label"><span class="badge border-dark border-1 text-dark">CP Marketplace</span></div>
	                    <div class="col-7">{{$d->telp}} <a style="color: green" target="_blank" href="https://api.whatsapp.com/send?phone={{ $d->telp}}" ><i class="bi bi-whatsapp"></i></a></div>
	                  </div>
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
<!-- Modal Tambah -->
<div class="modal fade" id="basicModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Tambah Data Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<form class="row g-3" action="{{url('produk-proses')}}" method="POST" enctype="multipart/form-data">
    			@csrf
    			@php
    				$market = \DB::table('marketplace')->select('id', 'marketplace')->get();
    			@endphp
    			<div class="col-md-12">
            <div class="form-floating">
              <select class="form-select" required name="id_marketplace" aria-label="State">
                <option value="">Select Marketplace</option>
                @foreach($market as $key => $m)
                <option value="{{$m->id}}">{{$m->marketplace}}</option>
                @endforeach
              </select>
              <label for="floatingSelect">Marketplace<span class="text-danger">*</span></label>
            </div>
          </div>
	        <div class="col-12">
	          <div class="form-floating">
	            <input type="text" class="form-control" required placeholder="Nama produk" name="produk">
	            <label for="floatingName">Produk<span class="text-danger">*</span></label>
	          </div>
	        </div>
	        <div class="col-12">
	          <div class="form-floating">
	            <input type="number" class="form-control" placeholder="Harga produk" name="harga">
	            <label for="floatingTextarea">Harga Produk</label>
	          </div>
	        </div>
	        <div class="col-12">
	          <div class="form-floating">
	            <textarea class="form-control" placeholder="Keterangan produk" name="keterangan" style="height: 100px;"></textarea>
	            <label for="floatingTextarea">Keterangan</label>
	          </div>
	        </div>
	        <div class="col-12">
	        	<label for="floatingFile">Foto Produk</label>
            <input class="form-control" type="file" name="foto">
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