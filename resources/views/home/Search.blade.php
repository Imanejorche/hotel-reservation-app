<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="home/styles/gold.css">
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
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="{{ route('login') }}">Add Rooms</a></li>
						<li><a href="#">Add a comment</a></li>
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
			
        <div class="background_image" style="background-image:url(images/gallery.jpg)"></div>
			
		</div>
	</div>

	<!-- Features -->
	<div class="features">
		<div class="container">
			<div class="row">
	<div class="box">
        <form class="search-form" action="{{ url('search') }}" method="GET"  >
			<input class="eh" type="search" name="query" placeholder="Explore....">
			<input  class ="th" type="submit" name="" value="Search"> 
        </form>
	</div>

 <div id="content">
 <div id="destinations">
 <h2>Rooms</h2>
 <ul id="destination-list">
    @foreach($res as $room)
 <li>
 <img src="{{ asset('storage/' . $room->image_url) }}" alt="Room Image">
 <div class="info">
 <h3>{{ $room->hotelname }}/{{ $room->roomtype }}</h3>
 <p>{{ $room->price_per_night }} {{ $room->currency}}/per Night</p>
 <a href="{{ route('sult') }}" class="button">Book Now</a>
 </div>
 </li>
    @endforeach
 </ul>
 </div>
 </div>
 <footer class="footer"style=" background-color:  #f6f6f6;" >
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

 
 <script src="home/js/argent.js"></script>
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

 

    
        

       
    
