<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Energize Communications</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="manifest" href="site.webmanifest">
		<!--<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"> -->
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/meanmenu.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
		<!-- header-start -->
		<header>
			<!-- header-top-area-start -->
			<div class="header-top-area header-white">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<ul class="header-wrapper">
								<li>
									<div class="header-icon">
										<i class="fas fa-phone"></i>
									</div>
									<div class="header-text">
										<a href="#">+xxx xxx xxxx</a>
									</div>
								</li>
								<li>
									<div class="header-icon">
										<i class="fas fa-envelope"></i>
									</div>
									<div class="header-text">
										<a href="#">support@xxxxxxxx.com</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
							<div class="header-right-wrapper">
								<ul class="headers-icon">
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
									<li><a href="#"><i class="fab fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-3">
							<div class="logo">
								<a href="{{url('/')}}"><img src="img/logo/energize.png" alt="" style="width:80%; padding:0px;"/></a>
							</div>
						</div>
						<div class="col-xl-9 col-lg-9">
							<!--<div class="header-button d-none d-sm-none d-md-none d-lg-block">
								<a class="btn btn-border" href="#">get a quote <i class="fas fa-long-arrow-alt-right"></i></a>
							</div>-->
                           <div class="main-menu text-center">
								<nav id="mobile-menu">
									<ul>
										<li class="active">
											<a href="{{url('/')}}">home</a>
										</li>
										<li>
											<a href="#">Other Services</a>
											<ul class="submenu">
												<li>
													<a href="#">VOIP</a>
												</li>
												<li>
													<a href="#">Insurance</a>
												</li>
												<li>
													<a href="#">SIP</a>
												</li>
												<li>
													<a href="#">MS Teams</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Reminder Service </a>
										</li>
										<li>
											<a href="#">Our News</a>
										</li>
										<li>
											<a href="#">contact</a>
										</li>
									</ul>
								</nav>
						   </div>
							<div class="mobile-menu"></div>
                       </div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-end -->

        @yield('content')

		<footer>
			<div class="footer-top-area footer-white gray-bg pt-110">
				<div class="container">
					<div class="footer-border pb-45"><br>
						<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="footer-wrapper mb-30">
								<div class="footer-logo">
									<a href="{{url('/')}}"><img id="comp-kb980ox52imgimage" style="object-position:50% 50%;width:300px;height:65px;object-fit:contain" alt="ENERGIZE.PNG" data-type="image" itemprop="image" src="{{asset('img/energize.png')}}"></a>
								</div>
								<div class="footer-text">
									<!--<p>JMM Financial t/a Smart Mortgages UK is an appointed representative of HL Partnership Limited, which is authorised and regulated by the Financial Conduct Authority.</p>-->
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="footer-wrapper mb-30">
								<h3 class="footer-title">Quick Links</h3>
								<ul class="footer-menu">
									<li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
									<li><a href="#">Calculator</a></li>
									<li><a href="#">Get a Quote</a></li>
									<li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Resources</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
							<div class="footer-wrapper mb-30">
								<h3 class="footer-title">Subscribe</h3>
								<div class="subscribe-text">
									<p>Enter  your email and get latest updates and offers subscribe us</p>
								</div>
								<form id="footer-form" action="#">
									<input placeholder="Your Email ..." type="text" name="email" id="email">
									<button class="btn btn-success" onclick="myFunction()"><i class="fas fa-long-arrow-alt-right"></i></button>
								</form>
							</div>
						</div>
					</div>
					</div>
					<div class="footer-bottom-area pt-20 pb-20">
						<div class="row">
							<div class="col-xl-12">
								<div class="copyright text-center">
									<p>Copyright <i class="far fa-copyright"></i> 2020 Energize Communications</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- footer-end -->


		<!-- JS here -->
		<script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('js/waypoints.min.js')}}"></script>
		<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/plugins.js')}}"></script>
		<script src="{{asset('js/main.js')}}"></script>
		
		<script>
			const App = new Vue({
				el: "#custom",
				data: {
					loading: false,
					form: {
                    	email: null,
					}
				},
	
				methods: {
					subscribe: function() {
						this.loading = true
						axios.post('/api/subscribe', this.form)
						.then(response => {
							this.loading = false
							this.form.email = null
							swal("Good!", "Welcome to our news letters", "success");
						})
						.catch(error => {
							this.loading = false
							this.form.email = null
							swal("Oops!", "Already subscribed", "warning");
						})
					}
				}
			})
		</script>
		<script>
			function myFunction() {
				var email = $('#email').value();

				$.ajax({
					type: "POST",
					url: "{{url('subscribe')}}/" + email;
					success: function(data) {
						$("#success").html('Inserted into database').delay(3000).fadeOut();
					}
				});
				return false;
			}
		</script>
    </body>
</html>
