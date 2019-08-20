<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Porto - Responsive HTML5 Template 7.5.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="<?= base_url()?>assets2/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="<?= base_url()?>assets2/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/theme.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/theme-elements.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/theme-blog.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="<?= base_url()?>assets2/vendor/rs-plugin/css/navigation.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?= base_url()?>assets2/css/custom.css">

		<!-- Head Libs -->
		<script src="<?= base_url()?>assets2/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 500}">
		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>
	<body class="one-page" data-target="#header" data-spy="scroll" data-offset="100">

		<div class="body">

			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Porto" width="95" height="40" src="<?= base_url()?>assets2/img/logo-integra.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a data-hash class="dropdown-item dropdown-toggle active" href="#home">
															Beranda
														</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#services">Tentang</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#daftar">Daftar</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#clients">Clients</a>
													</li>
													<li>
													<a class="dropdown-item" data-hash data-hash-offset="68" href="#contact">Kontak</a>
													</li>
													
													
													
												</ul>
												
											</nav>
										</div>
										<a class="btn btn-primary" href="<?php echo base_url("login") ?>" >LOGIN</a>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main" id="home">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1140, 'gridheight': 800, 'responsiveLevels': [4096,1200,992,500]}">
						<ul>
							<li class="slide-overlay" data-transition="fade">
								<img src="<?= base_url()?>assets2/img/slides/background-int.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
				
								<div class="tp-caption"
									data-x="center" data-hoffset="['-190','-60','-1060','1060']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[-300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="<?= base_url()?>assets2/img/slides/slide-title-border.png" alt=""></div>
				
								<div class="tp-caption text-color-light font-weight-normal"
									data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['16','16','16','40']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">IT CONSULTANT & SOFTWARE DEVELOPER</div>
				
								<div class="tp-caption"
									data-x="center" data-hoffset="['190','170','170','450']"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="1000"
									data-transform_in="x:[300%];opacity:0;s:500;"
									data-transform_idle="opacity:0.2;s:500;"><img src="<?= base_url()?>assets2/img/slides/slide-title-border.png" alt=""></div>
				
								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']">INTEGRA INOVASI INDONESIA</div>

								<div class="tp-caption font-weight-light ws-normal text-center"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['90','65','90','109']"
									data-width="['550','550','550','1100']"
									data-fontsize="['20','20','20','40']"
									data-lineheight="['28','28','28','60']"
									style="color: #b5b5b5;"> <strong class="text-color-light"></strong> Memilih Integra Inovasi Indonesia menjadi partner Anda merupakan sebuah pilihan yang tepat, Karena bersama kami kebutuhan anda akan mudah kita Implementasikan.</div>
								
							</li>
							<li class="slide-overlay slide-overlay-dark" data-transition="fade">
								<img src="<?= base_url()?>assets2/img/slides/gambar.jpg"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
				
								<div class="tp-caption text-color-light font-weight-normal"
                                    data-x="center"
									data-y="center" data-voffset="['-50','-50','-50','-75']"
									data-start="700"
									data-fontsize="['40','40','40','80']"
									data-lineheight="['25','25','25','45']"
									data-transform_in="y:[-50%];opacity:0;s:500;">INTEGRA INOVASI INDONESIA</div>
				
								<div class="tp-caption font-weight-light text-color-light"
									data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
									data-x="center"
									data-y="center" data-voffset="['8','8','8','140']"
									data-fontsize="['18','18','18','40']"
									data-lineheight="['1','1','1','3']">TEMPAT MAGANG TERBAIK DI YOGYAKARTA </div>
								
							</li>
						</ul>
					</div>
				</div>
				<section id="services" class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container my-3">
						<div class="row mb-5">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light mb-2">BIDANG</h2>
								<p class="text-color-light opacity-7"> Bidang - bidang magang yang terdapat pada PT Integra Inovasi Indonesia Yogyakarta.</p>
							</div>
						</div>
						<div class="row mb-lg-4">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">     
                                    </div>
									<div class="feature-box-info">
                                    <img src="<?= base_url()?>assets2/img/icons/programming.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">WEB DEVELOPMENT</h4>
										<p class="text-color-light opacity-7">Pengembangan website untuk profil instansi / perusahaan, e-commerce, online shop, portal dan sistem informasi berbasis web</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										
									</div>
									<div class="feature-box-info">
                                    <img src="<?= base_url()?>assets2/img/icons/smartphone.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">MOBILE APPLICATION</h4>
										<p class="text-color-light opacity-7">Pengembangan layanan dengan menggunakan teknologi mobile antara lain SMS Broadcast, VASMS 5 Digit (SMS Premium), dan Mobile Application</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										
									</div>
									<div class="feature-box-info">
                                    <img src="<?= base_url()?>assets2/img/icons/ux.png" alt="">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">UI/UX</h4>
										<p class="text-color-light opacity-7">Pengembangan dibidang Design Graphic pada ui / ux.</p>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>	
				</section>
				
				<br>	
				<div class="col text-center" id="daftar">
								<h2 class="font-weight-bold text-color-dark mb-2">REGISTRASI</h2>
								<p class="text-color-dark opacity-7">PT INTEGRA INOVASI INDONESIA</p>
							</div>
					
					<div class="row justify-content-center pt-5 mt-5" >
					
					
					<div class="card" style="width: 25rem; margin-right: 5%; margin-left: 5%;" >
  				<img src="<?= base_url()?>assets2/img/icons/work1.jpg" alt="" class="card-img-top" >
  				<div class="card-body">
  					  <h5 class="card-title">LOWONGAN PEKERJAAN</h5>
  				  <p class="card-text">Daftar pekerjaan PT Integra Inovasi Indonesia. Siapkan dokumen data diri , surat lamaran pekerjaan dan CV. Daftar Sekarang.</p>
  				  <a href="#" class="btn btn-primary">DAFTAR PEKERJAAN</a>
  				</div>
				</div>
				<div class="card" style="width: 25rem;  margin-left: 5%;margin-right: 5%;">
  				<img src="<?= base_url()?>assets2/img/icons/magang.png" class="card-img-top" alt="width: 10%;">
  				<div class="card-body">
  					  <h5 class="card-title">DAFTAR MAGANG</h5>
  				  <p class="card-text">Daftar magang Integra Inovasi Indonesia. Siapkan dokumen data diri , surat pengajuan magang dan CV. Daftar Sekarang. </p>
  				  <a href="<?php echo base_url("daftar") ?>" class="btn btn-primary">DAFTAR MAGANG</a>
  				</div>
				</div>
				</div>
				</div>
				<br>
				<section id="clients" class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url(<?= base_url()?>assets2/img/background-iklan.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="font-weight-bold text-color-light mb-2">Universitas yang pernah Praktek Kerja Industri</h2>
								<p class="text-color-light opacity-7">PT INTEGRA INOVASI INDONESIA</p>
							</div>
						</div>
						<div class="row text-center py-3 my-4">
							<div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/ugm.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/uny.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/telkom1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/idn.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="<?= base_url()?>assets2/img/logos/amikom1.png" alt="">
								</div>
								
								
							</div>
						</div>
						<div class="row">
							<div class="col">
								
								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
									<div>
										<div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
											<blockquote>
												<p class="text-5 line-height-5 mb-0">Mampu memberikan pembelajaran terbaik serta membentuk pola pikir mahasiswa/mahasiswi untuk menjadi pribadi yang kreatif, inovatif dan kerja sama yang baik.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- INTEGRA</strong></p>
											</div>
										</div>
									</div>
									</div>
								</div>
				
							</div>
						</div>
					</div>
				</section>
				
				<section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								 <br>
								<!-- Google Maps - Settings on footer -->
								
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.002196710974!2d110.35187851402735!3d-7.789590394386394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5818addd2185%3A0x52df8a7945064334!2sPT.+Integra+Inovasi+Indonesia!5e0!3m2!1sen!2sid!4v1565767357907!5m2!1sen!2sid" width="700" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
				
							</div>
							<div class="col-md-6 p-5 my-5">
								
								<div class="px-4">
									<h2 class="font-weight-bold line-height-1 mb-2">KONTAK</h2>
									<p class="text-3 mb-4">PT INTEGRA INOVASI INDONESIA</p>
									<p class="text-3 mb-4">PT INTEGRA INOVASI INDONESIA memberikan solusi Smart City bagi Pemerintah Daerah untuk membangun Daerah yang Inovatif & Berdaya saing dengan dukungan Teknologi Informasi & Komunikasi. Melalui aplikasi berbasis web, mobile application, social media, geospatial dan live broadcast dikolaborasikan untuk mendukung implementasi Smart City yang efektif dan efisien.</p>
									 <img src="<?= base_url()?>assets2/img/icons/map.png" alt="">
								<span class="text-3 mb-4">ALAMAT : Cokro Square, Jl. HOS Cokroaminoto No.124, Tegalrejo, Yogyakarta</span>
								<p></p>
								<img src="<?= base_url()?>assets2/img/icons/phone.png" alt="">
								<span class="text-3 mb-4">HUBUNGI: 0274 5304851 , HP/SMS/WA. 0815-4594-7999 | 0812-4999-1199</span>
								<p></p>
								<img src="<?= base_url()?>assets2/img/icons/mail.png" alt="">
								<span class="text-3 mb-4"> Email :info@integraindonesia.co.id,  integrainovasi.indonesia@gmail.com</span>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				
			
			<footer id="footer" class="mt-0">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p><strong>PT INTEGRA INOVASI INDONESIA</strong> - © Copyright 2019. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>

		<!-- Vendor -->
		<script src="<?= base_url()?>assets2/vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/popper/umd/popper.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/common/common.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/vide/jquery.vide.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/vivus/vivus.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url()?>assets2/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?= base_url()?>assets2/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?= base_url()?>assets2/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="<?= base_url()?>assets2/js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= base_url()?>assets2/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= base_url()?>assets2/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="<?= base_url()?>assets2/js/examples/examples.portfolio.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

		<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
		<script>

			/*
			Map Settings

				Find the Latitude and Longitude of your address:
					- https://www.latlong.net/
					- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

			*/

			// Map Markers
			var mapMarkers = [{
				address: "New York, NY 10017",
				html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
				icon: {
					image: "img/pin.png",
					iconsize: [26, 46],
					iconanchor: [12, 46]
				}
			}];

			// Map Initial Location
			var initLatitude = 40.75198;
			var initLongitude = -73.96978;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 5
			};

			var map = $('#googlemaps').gMap(mapSettings),
				mapRef = $('#googlemaps').data('gMap.reference');

			// Map text-center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$('#googlemaps').gMap("centerAt", options);
			}

			// Styles from https://snazzymaps.com/
			var styles = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}];

			var styledMap = new google.maps.StyledMapType(styles, {
				name: 'Styled Map'
			});

			mapRef.mapTypes.set('map_style', styledMap);
			mapRef.setMapTypeId('map_style');

		</script>



	</body>
</html>