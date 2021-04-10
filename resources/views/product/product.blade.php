@extends('layouts.main')
@section('title', 'продукт')
@section('body_class', 'single-product')
	
@section('content')
<!--================= Breadcrumb  ====================-->
<div class="breadcrumb-top">
		<div class="container">
			<h4 class="title">{{$item->title}}</h4>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Shop</a></li>
				<li class="active">{{$item->title}}</li>
			</ol><!--breadcrumb-->
		</div>
</div>
	<!--================= End of Breadcrumb  ====================-->
	<!--================= Single Product  ====================-->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!--================= Single Product Slider  ====================-->
				<div class="single-product-slider">
					<div class="product-slider-shop owl-carousel owl-theme">
						<div class="item"><img src="http://via.placeholder.com/570x570" alt="single-product"></div>
						<div class="item"><img src="http://via.placeholder.com/570x570" alt="single-product"></div>
						<div class="item"><img src="http://via.placeholder.com/570x570" alt="single-product"></div>
						<div class="item"><img src="http://via.placeholder.com/570x570" alt="single-product"></div>
						<div class="item"><img src="http://via.placeholder.com/570x570" alt="single-product"></div>
						<div class="item"><img src="http://via.placeholder.com/570x570" alt="single-product"></div>
					</div>
					<div class="thumbnail owl-carousel owl-theme">
						<div class="item"><img src="http://via.placeholder.com/133x133" alt="product"></div>
						<div class="item"><img src="http://via.placeholder.com/133x133" alt="product"></div>
						<div class="item"><img src="http://via.placeholder.com/133x133" alt="product"></div>
						<div class="item"><img src="http://via.placeholder.com/133x133" alt="product"></div>
						<div class="item"><img src="http://via.placeholder.com/133x133" alt="product"></div>
						<div class="item"><img src="http://via.placeholder.com/133x133" alt="product"></div>
					</div>
					<div class="zoom" data-toggle="modal" data-target="#zoom-modal">
						<img src="/assets/images/zoom.png" alt="zoom">
					</div>
				</div>
				<!--================= End of Single Product Slider  ====================-->
				<div class="modal fade" id="zoom-modal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<div id="carousel" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div><!--item-->
										<div class="item">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div><!--item-->
										<div class="item">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div><!--item-->
										<div class="item">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div><!--item-->
										<div class="item">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div><!--item-->
										<div class="item">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div><!--item-->
										<div class="item">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div><!--item-->
										<div class="item">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div><!--item-->
									</div><!--carousel-inner-->
								</div><!--carousel-->
								<div id="thumbcarousel" class="carousel slide" data-interval="false">
									<div class="carousel-inner">
										<div class="item active">
											<div data-target="#carousel" data-slide-to="0" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="1" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="2" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="3" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
										</div><!--item-->
										<div class="item">
											<div data-target="#carousel" data-slide-to="4" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="5" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="6" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="7" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
										</div>
									</div><!--carousel-inne-->
									<a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
									<a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
								</div><!--thumbcarousel-->
							</div><!--modal-body-->
						</div><!--modal-content-->
					</div><!--modal-dialog-->
				</div><!--modal-->
			</div>
			<div class="col-md-6">
				<!--================= Inside Single  ====================-->
				<div class="inside-single">
					<div class="price">$9.99</div>
					<div class="star">
						<span>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</span>
						<a href="#">(4 customer reviews)</a>
					</div><!--star-->
					<div class="description">
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
					</div><!--description-->
					<div class="add-to-cart">
						<div class="quantity">
							<span class="minus"><img src="/assets/images/minus.png" alt="minus"></span>
							<input value="1" size="5">
							<span class="plus"><img src="/assets/images/plus.png" alt="plus"></span>
						</div>
						<a href="cart.html" class="custom-btn green">add to bag</a>
					</div><!--add-to-cart-->
					<ul>
						<li>Categories:<a href="#">Oil</a></li>
						<li>Tags:<a href="#">Oil,</a><a href="#">Organic,</a><a href="#">Health</a></li>
						<li>Share:
							<ul class="social-icon">
								<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="tumblr"><a href="#"><i class="fa fa-tumblr"></i></a></li>
								<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul><!--social-icon-->
						</li>
					</ul>
				</div>
				<!--================= End of Inside Single  ====================-->
			</div>
			<div class="col-md-12">
				<!--================= Tab  ====================-->
				<ul class="nav nav-tabs text-center">
					<li class="active"><a href="#description" data-toggle="tab" aria-expanded="true">Description</a></li>
					<li><a href="#additional-info" data-toggle="tab">Additional Info</a></li>
					<li><a href="#shipping" data-toggle="tab">Shipping</a></li>
					<li><a href="#reviews" data-toggle="tab">Reviews (4)</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.   Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
						<ul class="list">
							<li class="first">Benefits of Essential Oils:</li>
							<li><i class="fa fa-circle"></i>Improve immunity and speed illness recovery</li>
							<li><i class="fa fa-circle"></i>Deal with infection (under the care of a professional)</li>
							<li><i class="fa fa-circle"></i>Make homemade cleaning or beauty products</li>
							<li><i class="fa fa-circle"></i>In recipes like homemade bug spray to avoid outdoor pests naturally</li>
						</ul>
					</div><!--tab-pane-->
					<div class="tab-pane fade" id="additional-info">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
					</div><!--tab-pane-->
					<div class="tab-pane fade" id="shipping">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
					</div><!--tab-pane-->
					<div class="tab-pane fade" id="reviews">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
					</div><!--tab-pane-->
				</div>
				<!--================= End of Tab  ====================-->
				<h2 class="title-head text-center">similar products</h2>
				<!--================= Similar Products  ====================-->
				<div class="similar-products owl-carousel owl-theme">
					<div class="item">
						<div class="product">
							<div class="images">
								<a href="single-product.html"><img src="http://via.placeholder.com/160x210" alt="product2"></a>
								<div class="button-group">
									<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
									<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
								</div><!--button-group-->
							</div><!--images-->
							<div class="info-product">
								<a href="single-product.html" class="title">Detox Zero</a>
								<span class="price">$16.99</span>
							</div><!--info-product-->
						</div><!--product-->
					</div>
					<div class="item">
						<div class="product">
							<div class="images">
								<a href="single-product.html"><img src="http://via.placeholder.com/160x210" alt="product2"></a>
								<div class="button-group">
									<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
									<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
								</div><!--button-group-->
							</div><!--images-->
							<div class="info-product">
								<a href="single-product.html" class="title">Low Cow - Lite Ice Cream</a>
								<span class="price">$9.99</span>
							</div><!--info-product-->
						</div><!--product-->
					</div>
					<div class="item">
						<div class="product">
							<div class="images">
								<a href="single-product.html"><img src="http://via.placeholder.com/160x210" alt="product2"></a>
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
							<div class="images">
								<a href="single-product.html"><img src="http://via.placeholder.com/160x210" alt="product2"></a>
								<div class="button-group">
									<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
									<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
								</div><!--button-group-->
							</div><!--images-->
							<div class="info-product">
								<a href="single-product.html" class="title">Organic Girl - Romanie</a>
								<span class="price">$4.79</span>
							</div><!--info-product-->
						</div><!--product-->
					</div>
					<div class="item">
						<div class="product">
							<div class="images">
								<a href="single-product.html"><img src="http://via.placeholder.com/160x210" alt="product2"></a>
								<div class="button-group">
									<a href="cart.html" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
									<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
								</div><!--button-group-->
							</div><!--images-->
							<div class="info-product">
								<a href="single-product.html" class="title">Detox Zero</a>
								<span class="price">$16.99</span>
							</div><!--info-product-->
						</div><!--product-->
					</div>
				</div>
				<!--================= End of Similar Products  ====================-->
			</div>
		</div>
	</div>
	<!--================= End of Single Product  ====================-->
@endsection