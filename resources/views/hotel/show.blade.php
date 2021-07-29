@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')	
<div class="container"> 
    <br>
			<h3 class="agileits-title w3title2">INFO PET HOUSE</h3><hr>
      <div class="align-self-center mr-3">
				
		<br><div class="media-body">
          <div class="col-lg-4 home-about-left padding">
							<div class="align-self-center mr-3">
                 <img  width="300" height="200" src="{{ url('/hotel/'.$hotel->file) }}" class="align-self-center mr-3" alt="..." >
               </div>
					</div>
     
          <div class="col-lg-8 home-about-right padding">
            <h3 class="mt-0">{{$hotel->hotel}}</h3>
              <p>{{$hotel->keterangan}}</p>
              <p>{{$hotel->alamat}}</p>
              <p>Rp.{{$hotel->harga}},- <b> s/d </b> Rp.{{$hotel->harga2}},- </p>
            <a href="{{ url('/hotels') }}" class="badge badge-danger" >Kembali</a>
          </div>
      </div><br><br>
      
      </div>
</div>

@endsection
