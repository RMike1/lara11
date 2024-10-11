<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'App') }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="E-Coffe Shop" />
	<meta property="og:title" content="E-Coffe Shop" />
	<meta property="og:description" content="E-Coffe Shop" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/plugins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/assets/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/assets/plugins/line-awesome/css/line-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/assets/plugins/themify/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/style.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('user/assets/css/templete.min.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('user/assets/css/skin/skin-1.min.css')}}">
	
	<!-- Google Font -->
	<style>
	@import url('https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900|Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Oswald:200,300,400,500,600,700|Raleway:100,200,300,400,500,600,700,800,900|Roboto:100,300,400,500,700,900|Satisfy&display=swap');
	</style>

       <!-- Scripts -->
      {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

      <!-- Styles -->
      @livewireStyles 
	
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
	<!-- header -->
    <header class="site-header mo-left header-sidenav header dark">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container-fluid">
					<div class="header-content-bx">
						<!-- website logo -->
						<div class="logo-header">
							<a href="index.html"><img src="{{asset('user/assets/images/logo-2.png')}}" alt=""></a>
						</div>
						<div class="extra-nav">
							<div class="extra-cell">
								<ul>
									<li class="search-btn">
										<a href="javascript:;" class="menu-icon">
											<div class="menu-icon-in navicon">
												<span></span>
												<span></span>
												<span></span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
		<div class="header-nav navbar-collapse collapse full-sidenav content-scroll" style="background-image: url({{asset('user/assets/images/background/bg4.jpg')}});">
			<div class="logo-header">
				<a href="/"><img src="{{asset('user/assets/images/logo.png')}}" alt=""/></a>
			</div>
			<ul class="nav navbar-nav">	                                                                          
				<li class="active"><a href="/">Home</a></li>
				<li><a href="our-menu">menu</a></li>
                <li><a href="about">about us</a></li>
				<li><a href="gallery">gallery</a></li>
				<li><a href="parties">parties & events </a></li>
				<li><a href="contact">contact us</a></li>
				<li><a href="reservation">reservation</a></li>
			</ul>
			<div class="footer-menu">
				<ul class="footer-social">
					<li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
					<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
					<li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
				</ul>
				<p class="copyright">© Copyright {{Carbon\Carbon::now()->format('Y')}}</p>
				<p class="copyright-text">MK <a href="https://www.linkedin.com/in/rudasingwa-mike-9a6a88150/" target="_blank">PiXal Tek</a></p>
			</div>
			<div class="menu-close btn">
				<i class="ti-close"></i>
			</div>
		</div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<!-- Side Nav End -->
		<div id="main" class="">
            <!-- Slider -->
			 <div class="main-slider owl-carousel owl-btn-center-lr">
				<div class="item">
					<div class="slide" style="background-image:url({{asset('user/assets/images/main-slider/slide1.jpg')}});">
						<div class="content">
							<span class="text-primary">Cafe & Restaurant</span>
							<h2 class="title">Welcome!</h2>
							<h4 class="sub-title">THE BEST COFFEE IN LONDON</h4>
							<a href="about.html" class="btn">MORE ABOUT US</a>
							<a href="reservation.html" class="btn-secondry">RESERVE A TABLE!</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="slide" style="background-image:url({{asset('user/assets/images/main-slider/slide2.jpg')}});">
						<div class="content">
							<span class="text-primary">Cafe & Restaurant</span>
							<h2 class="title">CAPPUCCINO</h2>
							<h4 class="sub-title">THE BEST COFFEE IN LONDON</h4>
							<a href="about.html" class="btn">MORE ABOUT US</a>
							<a href="reservation.html" class="btn-secondry">RESERVE A TABLE!</a>
						</div>
					</div>
				</div>
			 </div> 
			<!-- Slider END -->
			<!-- About Us -->
			<div class="section-full content-inner-2 bg-pink-light">
				<div class="container">
					<div class="section-head text-center m-b0">
						<h2 class="main-title text-primary">Welcome</h2>
						<h3 class="title">ABOUT US</h3>
						<h4 class="sub-title">CAFE & RESTAURANT</h4>
						<div class="dlab-separator"></div>
						<p class="m-b0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.</p>
					</div>
				</div>
			</div>
			<!-- About Us END -->
			<!-- About Services -->
			<div class="section-full bg-img-fix content-inner overlay-black-middle" style="background-image:url({{asset('user/assets/images/background/bg2.jpg')}});">
				<div class="container">
					<div class="section-head text-center">
						<h3 class="title text-white">DID YOU KNOW?</h3>
						<h4 class="sub-title">ABOUT OUR RESTAURANT:</h4>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-6 col-6 m-b30">
							<div class="icon-bx-wraper center text-white service-box">
								<div class="icon-bx-xl"> 
									<span class="icon-cell"><img src="{{asset('user/assets/images/icons/icon1.png')}}" alt=""></span> 
								</div>
								<div class="icon-content">
									<h5 class="dlab-tilte">FAMOUS FOR <br/>OUR COFFEE</h5>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-6 m-b30">
							<div class="icon-bx-wraper center text-white service-box">
								<div class="icon-bx-xl"> 
									<span class="icon-cell"><img src="{{asset('user/assets/images/icons/icon2.png')}}" alt=""></span> 
								</div>
								<div class="icon-content">
									<h5 class="dlab-tilte">PHONE <br/>RESERVATIONS</h5>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-6 m-b30">
							<div class="icon-bx-wraper center text-white service-box">
								<div class="icon-bx-xl"> 
									<span class="icon-cell"><img src="{{asset('user/assets/images/icons/icon3.png')}}" alt=""></span> 
								</div>
								<div class="icon-content">
									<h5 class="dlab-tilte">OPEN EVERYDAY <br/>08:00 - 01:00</h5>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-6 col-6 m-b30">
							<div class="icon-bx-wraper center text-white service-box">
								<div class="icon-bx-xl"> 
									<span class="icon-cell"><img src="{{asset('user/assets/images/icons/icon4.png')}}" alt=""></span> 
								</div>
								<div class="icon-content">
									<h5 class="dlab-tilte">LOCATED IN <br/>CITY CENTER</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- About Services END -->
			<!-- Menu -->
			<div class="section-full content-inner-2" style="background-image:url({{asset('user/assets/images/background/bg1.jpg')}}); background-position: top right; background-repeat: no-repeat;">
 				<div class="container">
					<div class="section-head text-center">
						<h3 class="title">OUR MENU</h3>
						<h4 class="sub-title">THESE ARE OUR SPECIALS:</h4>
					</div>
					<div class="dlab-tabs menu-tabs">
						<ul class="nav nav-tabs">
							<li><a data-toggle="tab" href="index.html#coffee" class="active"> coffee</a></li>
							<li><a data-toggle="tab" href="index.html#lunch"> lunch</a></li>
							<li><a data-toggle="tab" href="index.html#specials"> every day specials</a></li>
						</ul>
						<div class="tab-content">
							<div id="coffee" class="tab-pane active">
								<div class="menu-box">
									<ul class="menu-list">
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup1.png')}}" alt=""/>
												<h4 class="title">Single Cup Brew</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$4.50</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup2.png')}}" alt=""/>
												<h4 class="title">Black Eyed Andy</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$4.99</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup3.png')}}" alt=""/>
												<h4 class="title">Cuban Shot</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup4.png')}}" alt=""/>
												<h4 class="title">Cafe au Lait</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup5.png')}}" alt=""/>
												<h4 class="title">Coffee of the Day</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup6.png')}}" alt=""/>
												<h4 class="title">Cappuccino</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup1.png')}}" alt=""/>
												<h4 class="title">Caffé Americano</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup2.png')}}" alt=""/>
												<h4 class="title">Caramel Macchiato</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup3.png')}}" alt=""/>
												<h4 class="title">Café Latte</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup4.png')}}" alt=""/>
												<h4 class="title">Standard black coffee</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
									</ul>
									<div class="text-center">
										<a href="our-menu.html" class="btn bg-secondry">VIEW OUR COMPLETE MENU</a>
									</div>
								</div>
							</div>
							<div id="lunch" class="tab-pane">
								<div class="menu-box">
									<ul class="menu-list">
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup2.png')}}" alt=""/>
												<h4 class="title">Single Cup Brew</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$4.50</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup3.png')}}" alt=""/>
												<h4 class="title">Black Eyed Andy</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$4.99</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup4.png')}}" alt=""/>
												<h4 class="title">Cuban Shot</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup5.png')}}" alt=""/>
												<h4 class="title">Cafe au Lait</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
									</ul>
									<div class="text-center">
										<a href="our-menu.html" class="btn bg-secondry">VIEW OUR COMPLETE MENU</a>
									</div>
								</div>
							</div>
							<div id="specials" class="tab-pane">
								<div class="menu-box">
									<ul class="menu-list">
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup6.png')}}" alt=""/>
												<h4 class="title">Single Cup Brew</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$4.50</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup1.png')}}" alt=""/>
												<h4 class="title">Black Eyed Andy</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$4.99</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup2.png')}}" alt=""/>
												<h4 class="title">Cuban Shot</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup3.png')}}" alt=""/>
												<h4 class="title">Cafe au Lait</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup4.png')}}" alt=""/>
												<h4 class="title">Coffee of the Day</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
										<li>
											<div class="item-left">
												<img src="{{asset('user/assets/images/cup/cup5.png')}}" alt=""/>
												<h4 class="title">Cappuccino</h4>
												<p class="description">Lorem ipsum dolor sit amet consectetur adipiscing</p>
											</div>
											<div class="item-right">
												<h5 class="price">$2.55</h5>
											</div>
										</li>
									</ul>
									<div class="text-center">
										<a href="our-menu.html" class="btn bg-secondry">VIEW OUR COMPLETE MENU</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Menu End -->
			<!-- Our Info -->
			<div class="section-full bg-pink-light content-inner-2">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="section-head full-head text-center">
								<h2 class="main-title text-primary">Authentic</h2>
								<h3 class="title">TASTEFUL</h3>
								<h4 class="sub-title">CAFE & RESTAURANT</h4>
								<div class="dlab-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row sp20 lightgallery">
								<div class="col-lg-6 col-md-6 col-6">
									<div class="dlab-gallery-box">
										<div class="dlab-thum">
											<img src="{{asset('user/assets/images/gallery/pic1.jpg')}}" alt="">
											<span data-exthumbimage="{{asset('user/assets/images/gallery/pic1.jpg')}}" data-src="{{asset('user/assets/images/gallery/orignal/pic1.jpg')}}" class="check-km" title="Light Gallery Img 1"><i class="la la-plus"></i></span>
										</div>
									</div>
                                </div>
								<div class="col-lg-6 col-md-6 col-6">
									<div class="dlab-gallery-box">
										<div class="dlab-thum">
											<img src="{{asset('user/assets/images/gallery/pic2.jpg')}}" alt="">
											<span data-exthumbimage="{{asset('user/assets/images/gallery/pic2.jpg')}}" data-src="{{asset('user/assets/images/gallery/orignal/pic2.jpg')}}" class="check-km" title="Light Gallery Img 2"><i class="la la-plus"></i></span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-6">
									<div class="dlab-gallery-box">
										<div class="dlab-thum">
											<img src="{{asset('user/assets/images/gallery/pic3.jpg')}}" alt="">
											<span data-exthumbimage="{{asset('user/assets/images/gallery/pic3.jpg')}}" data-src="{{asset('user/assets/images/gallery/orignal/pic3.jpg')}}" class="check-km" title="Light Gallery Img 3"><i class="la la-plus"></i></span>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-6">
									<div class="dlab-gallery-box">
										<div class="dlab-thum">
											<img src="{{asset('user/assets/images/gallery/pic4.jpg')}}" alt="">
											<span data-exthumbimage="{{asset('user/assets/images/gallery/pic4.jpg')}}" data-src="{{asset('user/assets/images/gallery/orignal/pic4.jpg')}}" class="check-km" title="Light Gallery Img 4"><i class="la la-plus"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Info End -->
			<!-- Footer -->
			<footer class="site-footer">
				<!-- footer top part -->
				<div class="footer-top">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<div class="text-left text-white">
									<p class="copyright">Copyright © {{Carbon\Carbon::now()->format('Y')}} <a href="https://www.linkedin.com/in/rudasingwa-mike-9a6a88150/" target="_blank">PiXal Tek</a></p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="text-right">
									<ul class="list-inline footer-social m-b0">
										<li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
										<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
										<li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
										<li><a href="javascript:void(0);" class="fa fa-google-plus"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button class="scroltop" type="button"><i class="fa fa-angle-up"></i></button>
			</footer>
			<!-- Footer END -->
		</div>
	</div>
    <!-- Content END -->
</div>
@livewireScripts

<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('user/assets/js/combining.js')}}"></script><!-- Combining JS  -->
</body>
</html>