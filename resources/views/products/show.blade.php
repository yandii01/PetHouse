@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')	
<div class="container"> <br>
	<h3 class="agileits-title w3title2">INFO Produk</h3><hr>
      <div class="align-self-center mr-3">

		<br><div class="media-body">
				<div class="col-lg-4 home-about-left padding">
					<div class="align-self-center mr-3">
			
						<img width="250px" src="{{ url('/produk/'.$produk->file) }}" class="card-img-top" >
					</div>
				</div>
				
				<div class="card-body">
					<h3>{{$produk->nama_produk}}</h3>
					<p>Keteragan : {{$produk->keterangan}}</p>
					<p>Harga : Rp. {{$produk->harga}},-</p><br>
						@if(auth()->user())
							<a href="{{ $produk->id }}/beli"class="btn btn-primary" >Beli</a>
							@else
							<a href="{{ url('/login') }}" class="btn btn-primary">Beli</a>
							@endif
							<a href="{{ url('/products') }}"class="btn btn-danger" >kembali</a>
				</div><br><br>
			</div>
		</div>
</div><br><br>
@endsection
