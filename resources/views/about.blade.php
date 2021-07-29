@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')
	<!-- welcome -->	
	<div class="welcome">
		<div class="container"> 
			<div class="col-md-6 w3ls_welcome_right"> 
				<div class="flexslider">
					<ul class="slides">
						<li>	
							<div class="agileits_w3layouts_welcome_grid">
								<img src="image/g1.jpg" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>	
							<div class="agileits_w3layouts_welcome_grid">
								<img src="image/g2.jpg" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>	
							<div class="agileits_w3layouts_welcome_grid">
								<img src="image/g3.jpg" alt=" " class="img-responsive" />
							</div>
						</li>
					</ul>
				</div> 
			</div>
			<div class="col-md-6 w3ls_welcome_left"> 
				<div class="w3ls_welcome_right1">
					<h3 class="agileits-title">About Us</h3>
					<!-- <h6>Want Spoiling <span> YOUR PET? </span>  -->
						<p>Punya peliharaan kesayangan di rumah? Nah, buat kamu yang ingin memanjakannya telusurilah halaman PET HOUSE ini.Pet House menyediakan berbagai jenis makanan dan peralatan hewan peliharaan.
	
							Tak hanya itu, Pet House juga Pet house ini memberikan informasi penitipan dan produk hewan peliharaan khusus kucing dan anjing bagi masyarakat yang ingin mencari informasi untuk menitipkan hewan peliharaannya. Khusus untuk pakan dan peralatan hewan, kamu bisa melakukan pemesanan melalui halaman Product Kami.
							
							Thanks For Your Visiting.....</p>
					<div class="w3l_more">
						<!-- <a href="#" class="button button--nina" data-text="Learn more" data-toggle="modal" data-target="#myModal">
							<span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
						</a> -->
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //welcome -->	

	<div class="contact">
		<div class="container">   
			<h3 class="agileits-title w3title2">Contact Us</h3>
			<div class="map-pos">
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Visit Us</h5>
						<p>UPN "Veteran" Jakarta, Pondok Labu, Jakarta Selatan</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row w3-agileits">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Mail Us</h5>
						<p><a href="mailto:info@example.com"> anyspethouse@gmail.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 address-row">
					<div class="col-xs-2 address-left">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-xs-10 address-right">
						<h5>Call Us</h5>
						<p>+62 8833 2244 556</p>
					</div>
					<div class="clearfix"> </div>
				</div>   
			</div>  
			<!-- <form action="#" method="post">
				<div class="col-sm-6 contact-left">
					<input type="text" name="Name" placeholder="Your Name" required="">
					<input type="email" name="Email" placeholder="Email" required="">
					<input type="text" name="Mobile Number" placeholder="Mobile Number" required="">
				</div>
				<div class="col-sm-6 contact-right"> 
					<textarea name="Message" placeholder="Message" required=""></textarea>
					<input type="submit" value="Submit" >
				</div>
				<div class="clearfix"></div>
			</form> -->
		</div>
	</div>  
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24174.906176932098!2d-73.98255489041246!3d40.765031876857535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258bf12dbe975%3A0xf6bac5dd7bc5f711!2sPookie+and+Sebastian!5e0!3m2!1sen!2sin!4v1482923320436"></iframe> 
	</div> 
	@endsection
	