@extends('back.layout.master')
@section('title', 'Artikel Video Edu')
@section('main')
<div class="pagetitle">
	<h1>Artikel Video Edu</h1>
	<nav>
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a></li>
	    <li class="breadcrumb-item active">Artikel Video Edu</li>
	  </ol>
	</nav>
</div>

<div class="card">
  <div class="card-header">
  	<h5 class="card-title">Tambah Artikel</h5>
  </div>
  <div class="card-body">
  	<form class="row g-3 mt-2" action="{{url('videoedu-artikel-proses')}}" method="POST" enctype="multipart/form-data">
  		@csrf
  		<div class="col-12">
        <label for="judul" class="form-label">Judul<span class="text-danger">*</span> </label>
        <input type="text" required class="form-control" name="judul">
      </div>
      <div class="col-12">
        <label for="judul" class="form-label">Kategori<span class="text-danger">*</span></label>
        <select class="form-select" required name="id_k_edu" aria-label="State">
          <option value="">Select Kategori</option>
          @foreach($kategori as $key => $k)
          <option value="{{$k->id}}">{{$k->kategori}}</option>
          @endforeach
        </select>
      </div>
      <div class="col-12">
        <label for="judul" class="form-label">Video</label>
        <input type="file" required class="form-control @error('video') is-invalid @enderror" name="video">
        @error('produk')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <span class="text-danger">Maximal upload video : 25mb dan bertipe mp4, avi, atau ogg!</span>
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