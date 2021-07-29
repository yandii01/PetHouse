@extends('layouts/main')

@section('title', "INFO Pet House")
	@section('mainpage2')
	<!-- gallery -->
	<div class="gallery team">
		<div class="container"> 
			<h3 class="agileits-title w3title2">INFO PET HOUSE</h3><hr>
			<div class="agile_gallery_grids">	
				@foreach($hotel as $h)
				<div class="col-sm-4 col-xs-4 agile_gallery_grid"> 
					<div class="w3ls_gallery_grid">
						<a href="/hotels/{{ $h->id }}" class="lsb-preview wthree_p_grid" data-lsb-group="header"> 
						<!-- <img width="150px" src="">  -->
							<img src="{{ url('/hotel/'.$h->file) }}" alt=" " class="img-responsive"  width="50px" height="150px"/>
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
								
								<!-- <tr>
									<td></td> -->
									<!-- <td> -->
									<!-- <a href="/hotels/{{ $h->id}}" data-hover="About">{{$h->hotel}}</a> -->
									<h3>{{$h->hotel}}</h3>
									<p>{{$h->alamat}} <span class="glyphicon glyphicon-star"></span> 
									{{$h->notelp}} <span class="glyphicon glyphicon-star"></span> 
									 Rp.{{$h->harga}} - Rp.{{$h->harga2}}</p>
									
								<!-- </tr> -->
								</div>
							</div> 
						</a>
					</div>
				</div>
								@endforeach
		
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div><br><br>
	@endsection
	