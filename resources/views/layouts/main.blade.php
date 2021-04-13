<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
	<!-- Framework Css -->
	<link rel="stylesheet" type="text/css" href="/assets/css/lib/bootstrap.min.css">
	<!-- Font Awesome / Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="/assets/css/lib/font-awesome.min.css">
	<!-- Owl Carousel / Carousel- Slider -->
	<link rel="stylesheet" type="text/css" href="/assets/css/lib/owl.carousel.min.css">
	<!-- Video YouTube -->
	<link rel="stylesheet" type="text/css" href="/assets/css/lib/lazyYT.min.css">
	<!-- Carousel- Slider / Vertical -->
	<link rel="stylesheet" type="text/css" href="/assets/css/lib/slick.css">
	<!-- Style Theme -->
	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
	<!-- Responsive Theme -->
	<link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
</head>
<body class="@yield('body_class')">
<div class="wrapper">
	<!--===================== Header ========================-->
	<header>
		<div class="top-bar bg-black">
			<div class="container-large">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 text-left">
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="contact.html">Support</a></li>
						</ul><!--right-top-bar-->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<ul>
							<li><a href="#">Login</a></li>
							<li>
								<select class="custom-select">
									<option value="dollar">us dollar</option>
									<option value="Eur">Eur</option>
									<option value="Eur2">This is just for demo</option>
								</select>
							</li>
						</ul><!--right-top-bar-->
					</div>
				</div>
			</div>
		</div><!--top-bar-->
		<div class="container-large header">
			<div class="row">
				<div class="col-md-5 col-sm-4 col-xs-4">
					<ul class="menu">
						<li><a href="/">home</a></li>
						<li class="children">
							<a href="">Categories</a>
							<ul class="sub-menu">
                                @foreach($categories as $category)
                                    <li><a href="{{route('showCategory', $category['alias'])}}">{{$category->title}}</a></li>
                                @endforeach
							</ul><!--sub-menu-->
						</li>
						<li><a href="blog.html">Recipes</a></li>

					</ul><!--menu-->
					<button type="button" class="menu-button">
						<span></span>
					</button>
				</div>
				<div class="col-md-2 col-sm-3 col-xs-3 text-center">
					<div class="logo"><a href="/"><img src="/assets/images/logo.png" alt="logo"></a></div>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-5 text-right">
					<ul class="info-header">
						<li><a href="#"><i class="fa fa-volume-control-phone"></i>+91-141-4007601</a></li>
						<li class="search-icon"><a href="#"><i class="fa fa-search"></i>search</a></li>
						<li class="cart">
							<a href="cart.html"><i class="fa fa-shopping-bag"></i>Bag (0)</a>
							<div class="cart-modal">
								<ul>
									<li>
										<a href="single-product.html">
											<img src="http://via.placeholder.com/70x70" alt="cart-produc">
											<span class="title">Beech Nut -<br>Just Pumpkin</span>
											<span class="price">$ 6.49</span>
										</a>
									</li>
								</ul>
								<div class="total">
									Cart Subotal: <span class="price">$ 6.49</span>
								</div>
								<div class="button">
									<a href="cart.html" class="custom-btn">view cart</a>
									<a href="cart.html" class="custom-btn pink">checkout</a>
								</div>
							</div><!--cart-modal-->
						</li>
					</ul><!--info-header-->
					<ul class="social-icon">
						<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="tumblr"><a href="#"><i class="fa fa-tumblr"></i></a></li>
						<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul><!--social-icon-->
				</div>
			</div>
			<form class="search">
				<input type="text" placeholder="Search...">
				<span class="close"><img src="/assets/images/close2.png" alt="close"></span>
			</form>
		</div>
	</header>
	<!--============== End of Header ========================-->


        @yield('content')


	<!--===================== Footer ========================-->
	<footer class="bg-yellow">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="subscribe text-center">
						<h2>Join our secret society</h2>
						<form>
							<div class="form-group">
								<input type="text" placeholder="Enter your email...">
								<div class="custom-btn bg-black text-yellow">enter</div>
							</div>
						</form>
					</div><!--subscribe-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="widget-page">
						<h4 class="widget-title">Customer Care</h4>
						<a href="404.html">Register</a>
						<a href="404.html">My Account</a>
						<a href="404.html">Track Order</a>
					</div><!--widget-page-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="widget-page">
						<h4 class="widget-title">FAQ</h4>
						<a href="404.html">Ordering Info</a>
						<a href="404.html">Shipping &amp; Delivery</a>
						<a href="404.html">Our Guarantee</a>
					</div><!--widget-page-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="widget-page">
						<h4 class="widget-title">Our company</h4>
						<a href="404.html">About</a>
						<a href="blog.html">Press</a>
						<a href="single-product.html">Products</a>
					</div><!--widget-page-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="widget-contact">
						<h4 class="widget-title">contact usy</h4>
						<address>123 6th St. Melbourne, FL 32904<br>Phone: (125) 546-4478<br>Email: yesorganic.com</address>
					</div><!--widget-contact-->
				</div>
			</div>
			<div class="copyright">
				<p>Copyright &copy; 2018 cinagro. Theme by <a href="https://fruitfulcode.com/">fruitfulcode</a></p>
			</div>
		</div>
		<div id="back-to-top"><i class="fa fa-angle-up"></i></div>
	</footer>
<!--================= End of Footer =====================-->
</div><!--wrapper-->
<script src="/assets/js/lib/jquery.js"></script>
<script src="/assets/js/lib/bootstrap.min.js"></script>
<script src="/assets/js/lib/owl.carousel.min.js"></script>
<script src="/assets/js/lib/jquery-ui.min.js"></script>
<script src="/assets/js/lib/TweenMax.min.js"></script>
<script src="/assets/js/lib/lazyYT.js"></script>
<script src="/assets/js/lib/masonry.pkgd.min.js"></script>
<script src="/assets/js/lib/jquery.filterizr.min.js"></script>
<script src="/assets/js/lib/slick.min.js"></script>
<script src="/assets/js/lib/jquery.counterup.min.js"></script>
<script src="/assets/js/lib/waypoints.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
