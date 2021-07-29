@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')
<div class="welcome">
	<div class="container"> 
	<p class="text-center"><h3 class="agileits-title text-center" >Product ANY's PET House</h3></p><br><hr>
			<!-- <div class="row"> -->
		<div class="col-sm-12">
			<div class="agile_gallery_grids">	
					@foreach($produk as $g)
				<div class="col-sm-4 col-xs-4 agile_gallery_grid"> 
				<span class="border border-primary">
					<div class="card" style="width: 18rem;">
					
						<img width="200px" src="{{ url('/produk/'.$g->file) }}" class="card-img-top" alt="...">
						<div class="card-body text-center">
							<h4 class="card-title"><a href="/products/{{ $g->id}}" data-hover="About">{{$g->nama_produk}}</a></h4>
							<p class="card-text">Rp. {{$g->harga}} ,-</p><br>
							<!-- <a href="#" class="btn btn-primary">BELI</a> -->
						</div>
						
					</div>
					</span>
				</div>
				@endforeach
			<!-- </div> -->
			</div>
	</div>
</div>
	@endsection
