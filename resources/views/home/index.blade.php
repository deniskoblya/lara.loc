@extends('layouts.main')
@section('title', 'CINAGRO - Органический магазин продуктов питания')

@section('content')


	<!--===================== Base-Slider ========================-->
	<div class="base-slider owl-carousel owl-theme">
		<div class="item">
			<img src="/assets/images/facebook.jpg" alt="slider">
			<div class="text-slider">
				<h2>Nature has always<br>cared for us!</h2>
				<a href="#" class="custom-btn text-center yellow">top tips</a>
			</div><!--text-slider-->
		</div><!--item-->
		<div class="item slide-two">
			<img src="/assets/images/facebook.jpg" alt="slider">
			<div class="text-slider">
				<h2>Organic pancakes<br>homestyle</h2>
				<span class="price">12.99$</span>
				<a href="#" class="custom-btn text-center yellow">top tips</a>
			</div><!--text-slider-->
		</div><!--item-->
		<div class="item slide-three">
			<img src="/assets/images/facebook.jpg" alt="slider">
			<div class="text-slider last">
				<h2>One day sale!<br>large avocados<span class="text-pink">for $5</span></h2>
				<div id="countdown">
					<div><span class="hours">00</span><span class="text">hrs</span></div>
					<div><span class="minutes">00</span><span class="text">min</span></div>
					<div><span class="seconds">00</span><span class="text">sec</span></div>
				</div>
				<a href="#" class="custom-btn green text-center">top tips</a>
			</div><!--text-slider-->
		</div><!--item-->
	</div>

	<!--================== End of Base-Slider ====================-->
	<!--=================== Category Product =====================-->
	<div class="container">
		<div class="category-product">
			<ul>
				<li>
					<a href="shop.html">
					<img src="/assets/images/tractor.png" width="150">
						<span>Natural</span>
					</a>
				</li>
				<li class="center">
					<a href="shop.html">
						<img src="/assets/images/spinach.png" width="150">
						<span>organic</span>
					</a>
				</li>
				<li>
					<a href="shop.html">
					<img src="/assets/images/apple.png" width="150">
						<span>health</span>
					</a>
				</li>
			</ul>
		</div><!--category-product-->
	</div>
	<!--=============== End of Category Product ==================-->
	<!--=================== Product Slider =======================-->
	<div class="container-large">
		<div class="product-slider">
			<div class="title-head">
				<h2 class="text-black">What's Trending</h2>
				<p>Be Healty Organic Food</p>
			</div>
			<div class="slider-product owl-carousel owl-theme">
				<div class="item">
					<div class="product">
						<div class="images text-center">
							<a href="single-product.html"><img src="http://via.placeholder.com/160x230" alt="product1"></a>
							<div class="button-group">
								<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
								<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
							</div><!--button-group-->
						</div><!--images-->
						<div class="info-product">
							<a href="single-product.html" class="title">Daiya - Cheddar</a>
							<span class="price">$20</span>
						</div><!--info-product-->
					</div><!--product-->
				</div>
				<div class="item">
					<div class="product">
						<div class="images text-center">
							<a href="single-product.html"><img src="http://via.placeholder.com/160x230" alt="product2"></a>
							<div class="button-group">
								<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
								<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
							</div><!--button-group-->
						</div><!--images-->
						<div class="info-product">
							<a href="single-product.html" class="title">Vegan Burger - Veggie Mix</a>
							<span class="price">$9.99</span>
						</div><!--info-product-->
					</div><!--product-->
				</div>
				<div class="item">
					<div class="product">
						<div class="images text-center">
							<a href="single-product.html"><img src="http://via.placeholder.com/160x230" alt="product3"></a>
							<div class="button-group">
								<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
								<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
							</div><!--button-group-->
						</div><!--images-->
						<div class="info-product">
							<a href="single-product.html" class="title">Vegan Protein</a>
							<span class="price">$50</span>
						</div><!--info-product-->
					</div><!--product-->
				</div>
				<div class="item">
					<div class="product">
						<div class="images text-center">
							<a href="single-product.html"><img src="http://via.placeholder.com/160x230" alt="product4"></a>
							<div class="button-group">
								<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
								<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
							</div><!--button-group-->
						</div><!--images-->
						<div class="info-product">
							<a href="single-product.html" class="title">Over the Moo - Ice Cream</a>
							<span class="price">$7.99</span>
						</div><!--info-product-->
					</div><!--product-->
				</div>
			</div><!--slider-product-->
			<div class="text-center">
				<a href="shop.html" class="custom-btn text-center green"><span>View the store</span></a>
			</div>
		</div><!--product-slider-->
	</div>
	<!--=============== End of Product Slider ===================-->
	<div class="container-large">
	<div class="den">
	 	 
	</div>@
	
	

	
		<div class="big-banner">
		
		
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<div class="text">
						<h2>Unlock your potential<br>with good nutrion</h2>
						<p>Be Healty Organic Food</p>
						<a href="shop.html" class="custom-btn text-center white">view recipes</a>
					</div><!--text-->
				</div>
			</div>
		</div><!--big-banner-->
	</div>
	<!--=================== Grid Product =======================-->
	<div class="container-large">
		<div class="grid-product">
			<div class="title-head">
				<h2 class="text-black">Our Product</h2>
				<p>Be Healty Organic Food</p>
			</div>
			<div class="row">
			@foreach($products as $product)
			@php
				$image = '';
				if(count($product->images) > 0){
					$image = $product->images[0]['img'];
				} else{
					$image = 'missingimage.png';
				}
			@endphp
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="product">
						<div class="images">
							<a href="{{route('showProduct', ['category', $product->id])}}"><img src="/assets/images/{{$image}}" alt="{{$product->title}}"></a>
							<div class="button-group">
								<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
								<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
							</div><!--button-group-->
						</div><!--images-->
						<div class="info-product">
							<a href="{{route('showProduct', ['category', $product->id])}}" class="title">{{$product->category['title']}} - {{$product->title}}</a>
							<span class="price">
							@if ($product->old_price != null)
							<del>${{$product->old_price}}</del>
							@endif
								<ins>${{$product->price}}</ins>
							</span>
						</div><!--info-product-->
					</div><!--product-->
				</div>
				@endforeach
			</div>
			<div class="text-center"><a href="shop.html" class="custom-btn text-center green">VIEW THE STORE</a></div>
		</div><!--grid-product-->
		<div class="banner-img">
			<div class="row">
				<div class="col-md-6">
					<div class="banner-inside">
						<img src="/assets/images/image.jpg" alt="banner">
						<div class="inside text-right">
							<h2 class="text-black">gift Certificate</h2>
							<p>Give the perfect gift every time</p>
							<a href="blog.html" class="custom-btn text-center white">Read More</a>
						</div><!--inside-->
					</div>
				</div>
				<div class="col-md-6">
					<div class="banner-inside">
						<img src="/assets/images/image.jpg" alt="banner">
						<div class="inside text-right">
							<h2 class="text-black">Fresh Fruits</h2>
							<p>100% freshness guarantee </p>
							<a href="blog.html" class="custom-btn text-center white">Read More</a>
						</div><!--inside-->
					</div>
				</div>
			</div>
		</div><!--banner-->
		<div class="banner-color">
			<div class="row">
				<div class="col-md-4">
					<div class="inside text-center bg-yellow">
						<h5>Delivered to Your Door</h5>
						<p>Skip the store: We ship it all right to you</p>
					</div><!--inside-->
				</div>
				<div class="col-md-4">
					<div class="inside text-center bg-yellow">
						<h5>Top Organic &amp; Non-GMO</h5>
						<p>Browse 4,000 products you know and love.</p>
					</div><!--inside-->
				</div>
				<div class="col-md-4">
					<div class="inside text-center bg-yellow">
						<h5>Save Time &amp; Money</h5>
						<p>Save 25-50% on every item we carry.</p>
					</div><!--inside-->
				</div>
			</div>
		</div><!--banner-color-->
	</div>
	<!--=============== End of Grid Product ===================-->
	<!--===================== Schedule ========================-->
	<div class="container-large">
		<div class="schedule">
			<div class="row">
				<div class="col-md-6 text-center">
					<div class="inside">
						<div class="title-head">
							<h2 class="text-black">Healthy Lunch</h2>
							<p>Be Healty Organic Food</p>
						</div>
						<ul class="week nav nav-tabs">
							<li><a href="#sunday" data-toggle="tab">S</a></li>
							<li class="active"><a href="#monday" data-toggle="tab" aria-expanded="true">M</a></li>
							<li><a href="#tuesday" data-toggle="tab">T</a></li>
							<li><a href="#wednesday" data-toggle="tab">W</a></li>
							<li><a href="#thursday" data-toggle="tab">T</a></li>
							<li><a href="#friday" data-toggle="tab">F</a></li>
							<li><a href="#saturday" data-toggle="tab">S</a></li>
						</ul><!--week-->
						<div class="tab-content">
							<div class="tab-pane fade" id="sunday">
								<ul>
									<li class="first">sunday:</li>
									<li>4 oz. grilled chicken breast</li>
									<li>1/2 cup sliced strawberries</li>
									<li>1/2 cup steamed spinach w/ salt and pepper</li>
									<li>1/2 cup brown rice, steamed</li>
								</ul>
							</div>
							<div class="tab-pane fade in active" id="monday">
								<ul>
									<li class="first">monday:</li>
									<li>4 oz. grilled chicken breast</li>
									<li>1/2 cup sliced strawberries</li>
									<li>1/2 cup steamed spinach w/ salt and pepper</li>
									<li>1/2 cup brown rice, steamed</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="tuesday">
								<ul>
									<li class="first">tuesday:</li>
									<li>4 oz. grilled chicken breast</li>
									<li>1/2 cup sliced strawberries</li>
									<li>1/2 cup steamed spinach w/ salt and pepper</li>
									<li>1/2 cup brown rice, steamed</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="wednesday">
								<ul>
									<li class="first">wednesday:</li>
									<li>4 oz. grilled chicken breast</li>
									<li>1/2 cup sliced strawberries</li>
									<li>1/2 cup steamed spinach w/ salt and pepper</li>
									<li>1/2 cup brown rice, steamed</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="thursday">
								<ul>
									<li class="first">thursday:</li>
									<li>4 oz. grilled chicken breast</li>
									<li>1/2 cup sliced strawberries</li>
									<li>1/2 cup steamed spinach w/ salt and pepper</li>
									<li>1/2 cup brown rice, steamed</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="friday">
								<ul>
									<li class="first">friday:</li>
									<li>4 oz. grilled chicken breast</li>
									<li>1/2 cup sliced strawberries</li>
									<li>1/2 cup steamed spinach w/ salt and pepper</li>
									<li>1/2 cup brown rice, steamed</li>
								</ul>
							</div>
							<div class="tab-pane fade" id="saturday">
								<ul>
									<li class="first">saturday:</li>
									<li>4 oz. grilled chicken breast</li>
									<li>1/2 cup sliced strawberries</li>
									<li>1/2 cup steamed spinach w/ salt and pepper</li>
									<li>1/2 cup brown rice, steamed</li>
								</ul>
							</div>
						</div>
						<a href="blog.html" class="custom-btn text-center green">order now</a>
					</div><!--inside-->
				</div>
			</div>
		</div><!--schedule-->
	</div>
	<!--===================== Schedule ========================-->
	<!--====================== Posts ==========================-->
	<div class="container-large">
		<div class="posts">
			<div class="title-head">
				<h2 class="text-black">The Journal</h2>
				<p>Be Healty Organic Food</p>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="blog.html"><img src="http://via.placeholder.com/387x440" alt="mini-post3"></a>
					<div class="content">
						<span>in <a href="blog.html">NUTRITION + WELLNESS</a>/<a href="#">September 05, 2017</a></span>
						<a href="blog.html" class="title">Conventional Vs. Organic</a>
					</div><!--content-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="blog.html"><img src="http://via.placeholder.com/387x440" alt="mini-post3"></a>
					<div class="content">
						<span>in <a href="blog.html">NUTRITION + WELLNESS</a>/<a href="#">September 05, 2017</a></span>
						<a href="blog.html" class="title">How to use organic herbs for better sleep at night</a>
					</div><!--content-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="blog.html"><img src="http://via.placeholder.com/387x440" alt="mini-post3"></a>
					<div class="content">
						<span>in <a href="blog.html">NUTRITION + WELLNESS</a>/<a href="#">September 05, 2017</a></span>
						<a href="blog.html" class="title">Review of door to door organic delivery service</a>
					</div><!--content-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<a href="blog.html"><img src="http://via.placeholder.com/387x440" alt="mini-post3"></a>
					<div class="content">
						<span>in <a href="blog.html">NUTRITION + WELLNESS</a>/<a href="#">September 05, 2017</a></span>
						<a href="blog.html" class="title">Just to brighten your day</a>
					</div><!--content-->
				</div>
			</div>
			<div class="text-center">
				<a href="blog.html" class="custom-btn text-center green">view the journal</a>
			</div>
		</div>
		<div class="customers">
			<div class="title-head">
				<h2 class="text-black">Testimonials</h2>
				<p>Be Healty Organic Food</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="inside">
						<img src="assets/images/stars.png" class="star" alt="stars">
						<p>"I love your system. Wow what great  service, I love it! I will recommend you to<br>my colleagues.<br>I have gotten at least 50 times the value from food."</p>
						<a href="#">
							<div class="user">
								<img src="http://via.placeholder.com/60x60" alt="user1">
								<div class="inside-inside">
									<span class="name">Pauline Norman</span>
									<span>Melbourne, FL</span>
								</div>
							</div>
						</a>
					</div><!--inside-->
				</div>
				<div class="col-md-4">
					<div class="inside">
						<img src="assets/images/stars.png" class="star" alt="stars">
						<p>"Food is worth much more than I paid.  I like food more and more each day  because it makes my life a lot easier.  Thank You! I have gotten at least 50 times the value from food."</p>
						<a href="#">
							<div class="user">
								<img src="http://via.placeholder.com/60x60" alt="user1">
								<div class="inside-inside">
									<span class="name">Juana Duncan</span>
									<span>Orlando, FL</span>
								</div>
							</div>
						</a>
					</div><!--inside-->
				</div>
				<div class="col-md-4">
					<div class="inside">
						<img src="assets/images/stars.png" class="star" alt="stars">
						<p>"Best. Product. Ever! I couldn't have asked for more than this. Food is the most valuable business resource we have <br>EVER purchased.<br>I can't say enough about food."</p>
						<a href="#">
							<div class="user">
								<img src="http://via.placeholder.com/60x60" alt="user1">
								<div class="inside-inside">
									<span class="name">Gail Butler</span>
									<span>Orlando, FL</span>
								</div>
							</div>
						</a>
					</div><!--inside-->
				</div>
			</div>
		</div><!--customers-->
	</div>
	<!--====================== Posts ==========================-->


@endsection
