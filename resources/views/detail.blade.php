@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')
<div class="welcome">
	<div class="container"> 
	<h3 class="agileits-title text-center">Information</h3>
	</br>
	<!-- @foreach($berita as $b) -->
    <!-- <div class="media">
  <img src="..." class="align-self-center mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Center-aligned media</h5>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div> -->
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
								<h4 class="agileits-title text-uppercase ">{{$berita->judul}}</h4><br>
								<span class="d-inline-block text-truncate" style="max-width: 200 px;">
								<p class="text-monospace text-break" >{{ $berita->keterangan }}</p>
								</span>
						</div>
					
					</div>
				
			
			</div>
		<!-- </div>@endforeach -->
	</div>
</div>

				@endsection