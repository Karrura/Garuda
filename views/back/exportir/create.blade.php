@extends('back.layout.master')
@section('title', 'Artikel Exportir')
@section('main')
<div class="pagetitle">
	<h1>Artikel Exportir</h1>
	<nav>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
	    <li class="breadcrumb-item active">Artikel Exportir</li>
	  </ol>
	</nav>
</div>

<div class="card">
  <div class="card-header">
  	<h5 class="card-title">Tambah Artikel</h5>
  </div>
  <div class="card-body">
  	{{--<form class="row g-3" action="{{url('exportir-artikel-proses')}}" method="POST" enctype="multipart/form-data">
			@csrf
      <div class="col-12">
        <div class="form-floating">
          <input type="text" class="form-control" required placeholder="Nama marketplace" name="marketplace">
          <label for="floatingName">Marketplace<span class="text-danger">*</span></label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" required placeholder="Alamat marketplace" name="alamat" style="height: 100px;"></textarea>
          <label for="floatingTextarea">Alamat<span class="text-danger">*</span></label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="text" class="form-control" required placeholder="+62..." name="telp">
          <label for="floatingName">Nomor Telpon<span class="text-danger">*</span></label>
        </div>
      </div>
      <div class="col-6">
        <div class="form-floating">
          <input type="email" required class="form-control" name="email" placeholder="Email marketplace">
          <label for="floatingEmail">Email<span class="text-danger">*</span></label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Keterangan marketplace" name="keterangan" style="height: 100px;"></textarea>
          <label for="floatingTextarea">Keterangan</label>
        </div>
      </div>
      <div class="col-12">
      	<label for="floatingFile">Foto</label>
        <input class="form-control" type="file" name="foto">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
	  </form>--}}
  	<form class="row g-3 mt-2" action="{{url('exportir-artikel-proses')}}" method="POST" enctype="multipart/form-data">
  		@csrf
  		<div class="col-12">
        <label for="judul" class="form-label">Judul<span class="text-danger">*</span> </label>
        <input type="text" required class="form-control" name="judul">
      </div>
      <div class="col-12">
        <label for="judul" class="form-label">Kategori<span class="text-danger">*</span></label>
        <select class="form-select" required name="id_k_exportir" aria-label="State">
          <option value="">Select Kategori</option>
          @foreach($kategori as $key => $k)
          <option value="{{$k->id}}">{{$k->kategori}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-12">
        <label for="judul" class="form-label">Gambar</label>
        <input type="file" required class="form-control" name="foto">
      </div>
  		<div class="col-12">
  			<label for="judul" class="form-label">Artikel<span class="text-danger">*</span></label>
  			<textarea id="summernote" name="deskripsi" class="form-control" required placeholder="Hello World! Writer is here.."></textarea>
  		</div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </div>
    </form>
  </div>
</div>
<script>
	$(document).ready(function() {
	  $('#summernote').summernote({
	  		placeholder: 'Hello world! Write is here...',
        tabsize: 2,
        height: 250,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
	  });
	});
</script>
@endsection