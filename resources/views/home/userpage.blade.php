<!DOCTYPE html>
<html lang="en">
<head>
<title>Marrakech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="home/styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="home/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="home/plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="home/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="home/plugins/OwlCarousel2-2.3.4/animate.css">
<link href="home/plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="home/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="home/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="home/styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">Marrakech</a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="{{ route('sult') }}">Home</a></li>
						<li><a href="{{ route('login') }}">Add Rooms</a></li>
						<li><a href="{{ route('login') }}">Add a comment</a></li>
						<li><a href="#">About us</a></li>
					</ul>
				</nav>
				<div class="book_button"><a href="{{ route('make') }}">Make Reservation</a></div>
           <div class="header_phone d-flex flex-row align-items-center justify-content-center">
           <!-- Replace the <span> with a button for registration -->
        <button onclick="window.location.href='{{ route('register') }}'" style="background-color: inherit; color: white; border: none; cursor: pointer; outline: none; font-weight: bold;">Create an Account</button>

          <!-- Add an avatar to the right -->
	
        </div>




				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="#">Add Rooms</a></li>
					<li><a href="blog.html">Add a comment </a></li>
					
				</ul>
			</nav>
        </div>	 
	<div class="menu_extra">
            <div class="menu_book text-right"><a href="#">Make Resevation</a></div>
            <div class="menu_phone d-flex flex-row align-items-center justify-content-center">
                <img src="images/phone-2.png" alt="">
                <span>0183-12345678</span>
            </div>
        </div>
    </div>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
				<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>	
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">Book Easily</div>
										<div class="booking_form_container">
											<form action="#" class="booking_form">
												<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
													<div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
														<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
														<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
													</div>
													<div><button class="booking_button trans_200" href="{{ route('sult') }}">Book Now</button></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">Book Easily</div>
										<div class="booking_form_container">
											<form action="#" class="booking_form">
												<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
													<div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
														<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
														<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
													</div>
													<div><button class="booking_button trans_200">Book Now</button></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">Book Easily</div>
										<div class="booking_form_container">
											<form action="#" class="booking_form">
												<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
													<div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
														<div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
														<div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b" placeholder="Children" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
													</div>
													<div><button class="booking_button trans_200">Book Now</button></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Dots -->
			<div class="home_slider_dots_container">
				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
						<li class="home_slider_custom_dot active">01.</li>
						<li class="home_slider_custom_dot">02.</li>
						<li class="home_slider_custom_dot">03.</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/icon_1.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Fabulous Resorts</h2></div>
						<div class="icon_box_text">
							<p>Fabulous resorts in Marrakech blend Moroccan charm with modern luxury, offering exquisite architecture and impeccable service. From historic Medina to the city outskirts, these hotels cater to diverse tastes. With lush gardens and captivating ambiance, they provide a memorable stay. </p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/icon_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Infinity Pool</h2></div>
						<div class="icon_box_text">
							<p>Marrakech hotels feature exquisite infinity pools, providing a luxurious escape in the heart of the city. Offering breathtaking vistas of the Atlas Mountains or city skyline, these pools enhance the overall guest experience. Guests can relish refreshing swims amidst the enchanting beauty of Marrakech. </p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/icon_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Luxury Rooms</h2></div>
						<div class="icon_box_text">
							<p>Marrakech hotels redefine luxury with opulent rooms that blend comfort and style seamlessly. From intricately designed interiors to plush furnishings, these accommodations offer a lavish retreat in the heart of the city. Whether enjoying stunning city views or the charm of traditional Moroccan decor.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_1.jpg)"></div>
					<a class="colorbox" href="images/gallery_1.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_2.jpg)"></div>
					<a class="colorbox" href="images/gallery_2.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_4.jpg)"></div>
					<a class="colorbox" href="images/gallery_3.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_3.jpg)"></div>
					<a class="colorbox" href="images/gallery_4.jpg"></a>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				
				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_title"><h2>Marrakech hotels / the most luxurious hotels</h2></div>
						<div class="about_text">
							<p>the hotels in Marrakech are among the finest and the most luxurious hotels in Morocco,which tourist flock to,and have a group of cervics for example a hotel IMPERIAL PLAZA,Savoy le Grand and Almamounia hotel</p>
						</div>
					</div>
				</div>

				<!-- About Images -->
				<div class="col-lg-6">
					<div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">
						<img src="images/about_1.png" alt="">
						<img src="images/about_3.jpeg" alt="">	
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="testimonials_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme test_slider">
							
							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">Perfect Stay</a></div>
								<div class="testimonial_text">
									<p>Marrakech hotels offer a captivating blend of Moroccan charm and modern comfort, making it an ideal retreat for tourists seeking an authentic,luxurious and wonderful experience.</p>
								</div>
								<div class="testimonial_image"><img src="images/user_1.jpg" alt=""></div>
								<div class="testimonial_author"><a href="#">Samantha Smith</a>, Germany</div>
							</div>

							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">Nice place</a></div>
								<div class="testimonial_text">
									<p>The hospitality in Marrakech's hotels is exceptional, with each property showcasing unique architecture and providing a perfect base to explore the city's rich culture and vibrant markets.</p>
								</div>
								<div class="testimonial_image"><img src="images/user_2.jpeg" alt=""></div>
								<div class="testimonial_author"><a href="#">Michael Doe</a>, Italy</div>
							</div>

							<!-- Slide -->
							<div  class="test_slider_item text-center">
								<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
								<div class="testimonial_title"><a href="#">We loved it</a></div>
								<div class="testimonial_text">
									<p>Staying in a Marrakech hotel is like entering a world of enchantment, where the warm hospitality, stunning decor, and delectable cuisine create a memorable and immersive experience for every tourist.</p>
								</div>
								<div class="testimonial_image"><img src="images/user_3.jpg" alt=""></div>
								<div class="testimonial_author"><a href="#">Luis Garcia</a>, Spain</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="booking_title text-center"><h2>Book a room</h2></div>
					<div class="booking_text text-center">
						<p>Secure your perfect getaway by booking a room with us today. Immerse yourself in luxury, enjoy impeccable service, and create unforgettable memories. Elevate your travel experience,reserve your room now for an unparalleled stay.</p>
					</div>

					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_1.webp)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$150/Night</div>
								<div class="booking_link"><a href="booking.html">Longue vie hotel</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_2.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$120/Night</div>
								<div class="booking_link"><a href="booking.html">Mamounia hotel</a></div>
							</div>

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_3.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$190/Night</div>
								<div class="booking_link"><a href="booking.html"> IMPERIAL PLAZA hotel</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">

		<!-- Blog Slider -->
		<div class="blog_slider_container">
			<div class="owl-carousel owl-theme blog_slider">
				
				<!-- Slide -->
				<div class="blog_slide">
					<div class="background_image" style="background-image:url(images/index_blog_1.jpg)"></div>
					<div class="blog_content">
						<div class="blog_title"><a href="#">the most luxurious and best hotels in Marrakesh</a></div>
					</div>
				</div>

				<!-- Slide -->
				<div class="blog_slide">
					<div class="background_image" style="background-image:url(images/index_blog_2.jpeg)"></div>
					<div class="blog_content">
						<div class="blog_title"><a href="#">rooms with elegance and wonderful design</a></div>
					</div>
				</div>

				<!-- Slide -->
				<div class="blog_slide">
					<div class="background_image" style="background-image:url(images/index_blog_3.jpeg)"></div>
					<div class="blog_content">
						<div class="blog_title"><a href="#">charming resorts and attractive spaces</a></div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_logo_container text-center">
							<div class="footer_logo">
								<a href="#"></a>
								<div>Marrakech</div>
								<div>Platform</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer_row">
					
					<!-- Address -->
					<div class="col-lg-3">
						<div class="footer_title">Our Address</div>
						<div class="footer_list">
							<ul>
								<li>Beach Str. 345</li>
								<li>67559  cleese</li>
								<li>Marrakech</li>
							</ul>
						</div>
					</div>

					<!-- Reservations -->
					<div class="col-lg-3">
						<div class="footer_title">contact</div>
						<div class="footer_list">
							<ul>
								<li>Tel: 345 5667 889</li>
								<li>Fax; 6783 4567 889</li>
								<li>Marrakech@hotels.com</li>
							</ul>
						</div>
					</div>

					<!-- Newsletter -->
					<div class="col-lg-3">
						<div class="footer_title">Newsletter</div>
						<div class="newsletter_container">
							<form action="#" class="newsletter_form" id="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Your email address" required="required">
								<button class="newsletter_button">Subscribe</button>
							</form>
						</div>
					</div>

					<!-- Footer images -->
					<div class="col-lg-3">
						<div class="certificates d-flex flex-row align-items-start justify-content-lg-between justify-content-start flex-lg-nowrap flex-wrap">
						<div class="cert"><img src="images/cert_2.png" alt=""></div>
					 </div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
	</footer>
</div>

<script src="home/js/jquery-3.3.1.min.js"></script>
<script src="home/styles/bootstrap-4.1.2/popper.js"></script>
<script src="home/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="home/plugins/greensock/TweenMax.min.js"></script>
<script src="home/plugins/greensock/TimelineMax.min.js"></script>
<script src="home/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="home/plugins/greensock/animation.gsap.min.js"></script>
<script src="home/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="home/plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="home/plugins/easing/easing.js"></script>
<script src="home/plugins/progressbar/progressbar.min.js"></script>
<script src="home/plugins/parallax-js-master/parallax.min.js"></script>
<script src="home/plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="home/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="home/js/custom.js"></script>
</body>
</html>