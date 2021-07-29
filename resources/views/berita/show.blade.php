@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')	
<!-- <div class="card" style="width: 18rem;">
  <img src="{{ url('/berita/'.$berita->file) }}" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">{{$berita->judul}}</h5>
    <p class="card-text">{{$berita->keterangan}}</p>
    <a href="{{ url('/beritas') }}"class="btn btn-primary" >kembali</a>
  </div>
</div> -->
<div class="media">
				<div class="align-self-center mr-3">
				
					<br><div class="media-body">
						<!-- <div class="col-md-3 w3ls_welcome_right">  -->
						<div class="col-lg-3 home-about-left padding">
							<div class="align-self-center mr-3">
								<img src="{{ url('/berita/'.$berita->file) }}" alt="..." width="300" height="200">
							</div>
							</div>
						<div class="col-lg-9 home-about-right padding">
								<h4 class="agileits-title text-uppercase	">{{$berita->judul}}</h4><br>
								<!-- <span class="d-inline-block text-truncate" style="max-width: 200 px;"> -->
								<p class="text-monospace text-break" >{{ $berita->keterangan }}</p>
								<a href="{{ url('/beritas') }}" class="badge badge-info" >kembali</a>
								<!-- <span class="badge badge-info">Info</span> -->
								</span>
						</div>
					
					</div><br><br>
@endsection
