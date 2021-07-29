@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')
<div class="welcome">
	<div class="container"> 
	<h3 class="agileits-title text-center">Information</h3>
	</br>
	@foreach($berita as $b)
			<div class="media">
				<div class="align-self-center mr-3"><hr>
				
					<br><div class="media-body">
						<!-- <div class="col-md-3 w3ls_welcome_right">  -->
						<div class="col-lg-3 home-about-left padding">
							<div class="align-self-center mr-3">
								<img src="{{ url('/berita/'.$b->file) }}" alt="..." width="250" height="150">
							</div>
							</div>
						<div class="col-lg-9 home-about-right padding">
								<h4 class="agileits-title text-uppercase	">{{$b->judul}}</h4><br>
								<!-- <span class="d-inline-block text-truncate" style="max-width:10 px;">
								<p class="text-monospace text-break">{{ $b->keterangan }}</p>
								</span> -->
								<a href="/beritas/{{ $b->id }}" class="badge badge-info">detail</a>
								<!-- <span class="badge badge-info">Info</span> -->
						</div>
					
					</div>
				
			
			</div>
		</div>@endforeach
	</div>
</div>

				@endsection