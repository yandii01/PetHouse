@extends('layouts/main')

@section('title', "INFO Pet House")
	@section('mainpage2')
	<!-- gallery -->
	<div class="gallery team">
		<div class="container"> 
			<h3 class="agileits-title w3title2">INFO PET HOUSE</h3>
			<div class="agile_gallery_grids">	
				<div class="col-sm-4 col-xs-4 agile_gallery_grid"> 
				@foreach($hotel as $h)
					<div class="w3ls_gallery_grid">
						<a href="{{ url('/hotel/'.$h->file) }}" class="lsb-preview wthree_p_grid" data-lsb-group="header"> 
						<!-- <img width="150px" src="">  -->
							<img src="{{ url('/hotel/'.$h->file) }}" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
								
								<!-- <tr>
									<td></td> -->
									<!-- <td> -->
									<a href="/hotels/{{ $h->id}}" data-hover="About">{{$h->hotel}}</a>
									{{$h->harga}}
									
								<!-- </tr> -->
								@endforeach
								</div>
							</div> 
						</a>
					</div>
					<!-- di<v class="w3ls_gallery_grid">
						<a href="image/g2.jpg" class="lsb-preview wthree_p_grid" data-lsb-group="header"> 
							<img src="image/g2.jpg" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
									<h3>Best Pets</h3>
									<p>Ne nam facilisis adolescens faucibus.</p>
								</div>
							</div> 
						</a>
					</div>
					<div class="w3ls_gallery_grid">
						<a href="image/g3.jpg" class="lsb-preview wthree_p_grid" data-lsb-group="header">
							<img src="image/g3.jpg" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
									<h3>Best Pets</h3>
									<p>Ne nam facilisis adolescens faucibus.</p>
								</div>
							</div> 
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 agile_gallery_grid"> 
					<div class="w3ls_gallery_grid">
						<a href="image/g4.jpg" class="lsb-preview wthree_p_grid" data-lsb-group="header">
							<img src="image/g4.jpg" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
									<h3>Best Pets</h3>
									<p>Ne nam facilisis adolescens faucibus.</p>
								</div>
							</div> 
						</a>
					</div>
					<div class="w3ls_gallery_grid">
						<a href="image/g5.jpg" class="lsb-preview wthree_p_grid" data-lsb-group="header">
							<img src="image/g5.jpg" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
									<h3>Best Pets</h3>
									<p>Ne nam facilisis adolescens faucibus.</p>
								</div>
							</div> 
						</a>
					</div>
					<div class="w3ls_gallery_grid">
						<a href="image/g6.jpg" class="lsb-preview wthree_p_grid" data-lsb-group="header">
							<img src="image/g6.jpg" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
									<h3>Best Pets</h3>
									<p>Ne nam facilisis adolescens faucibus.</p>
								</div>
							</div> 
						</a>
					</div>
				</div>
				<div class="col-sm-4 col-xs-4 agile_gallery_grid">
					<div class="w3ls_gallery_grid">
						<a href="image/g7.jpg" class="lsb-preview wthree_p_grid" data-lsb-group="header">
							<img src="image/g7.jpg" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
									<h3>Best Pets</h3>
									<p>Ne nam facilisis adolescens faucibus.</p>
								</div>
							</div> 
						</a>
					</div>
					<div class="w3ls_gallery_grid">
						<a href="image/g3.jpg" class="lsb-preview wthree_p_grid" data-lsb-group="header">
							<img src="image/g3.jpg" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
									<h3>Best Pets</h3>
									<p>Ne nam facilisis adolescens faucibus.</p>
								</div>
							</div> 
						</a>
					</div>
					<div class="w3ls_gallery_grid">
						<a href="image/g2.jpg" class="lsb-preview wthree_p_grid" data-lsb-group="header">
							<img src="image/g2.jpg" alt=" " class="img-responsive" />
							<div class="agileinfo_content_wrap">
								<div class="agileits_content">		
									<h3>Best Pets</h3>
									<p>Ne nam facilisis adolescens faucibus.</p>
								</div>
							</div> 
						</a>
					</div>
				</div>  -->
				<div class="clearfix"> </div>
			</div> 
		</div>
	</div>
	@endsection
	