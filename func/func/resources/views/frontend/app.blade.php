<!DOCTYPE html>
<html>

<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Blog Medium Image | Porto - Responsive HTML5 Template 6.0.0</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="/frontend/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="/frontend/vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="/frontend/vendor/animate/animate.min.css">
		<link rel="stylesheet" href="/frontend/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="/frontend/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="/frontend/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="/frontend/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="/frontend/css/theme.css">
		<link rel="stylesheet" href="/frontend/css/theme-elements.css">
		<link rel="stylesheet" href="/frontend/css/theme-blog.css">
		<link rel="stylesheet" href="/frontend/css/theme-shop.css">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="/frontend/css/skins/default.css">		<script src="master/style-switcher/style.switcher.localstorage.js"></script> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="/frontend/css/custom.css">

		@yield('css')

		<!-- Head Libs -->
		<script src="/frontend/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body>

		<div class="body">
			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 55, 'stickySetTop': '-55px', 'stickyChangeLogo': true}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Porto" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row pt-3">
									<nav class="header-nav-top">
										<ul class="nav nav-pills">
											<li class="nav-item d-none d-sm-block">
												<a class="nav-link" href="about-us.html"><i class="fa fa-angle-right"></i> About Us</a>
											</li>
											<li class="nav-item d-none d-sm-block">
												<a class="nav-link" href="contact-us.html"><i class="fa fa-angle-right"></i> Contact Us</a>
											</li>
											<li class="nav-item">
												<span class="ws-nowrap"><i class="fa fa-phone"></i> (123) 456-789</span>
											</li>
										</ul>
									</nav>
									<div class="header-search d-none d-md-block">
										<form id="searchForm" action="http://preview.oklerthemes.com/porto/6.0.0/page-search-results.html" method="get">
											<div class="input-group">
												<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required>
												<span class="input-group-btn">
													<button class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
												</span>
											</div>
										</form>
									</div>
								</div>
								<div class="header-row">
									<div class="header-nav">
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="">
														<a class="nav-link" href="/blog">
															Bloglar
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<ul class="header-social-icons social-icons d-none d-sm-block">
											<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
											<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
											<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										</ul>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fa fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			@yield('icerik')

				<footer id="footer">
				<div class="container">
					<div class="row">
						<div class="footer-ribbon">
							<span>Get in Touch</span>
						</div>
						<div class="col-lg-3">
							<div class="newsletter">
								<h4>Newsletter</h4>
								<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>
			
								<div class="alert alert-success d-none" id="newsletterSuccess">
									<strong>Success!</strong> You've been added to our email list.
								</div>
			
								<div class="alert alert-danger d-none" id="newsletterError"></div>
			
								<form id="newsletterForm" action="http://preview.oklerthemes.com/porto/6.0.0/php/newsletter-subscribe.php" method="POST">
									<div class="input-group">
										<input class="form-control form-control-sm" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
										<span class="input-group-btn">
											<button class="btn btn-light" type="submit">Go!</button>
										</span>
									</div>
								</form>
							</div>
						</div>
						<div class="col-lg-3">
							<h4>Latest Tweets</h4>
							<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
								<p>Please wait...</p>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact-details">
								<h4>Contact Us</h4>
								<ul class="contact">
									<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</p></li>
									<li><p><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</p></li>
									<li><p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></p></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-2">
							<h4>Follow Us</h4>
							<ul class="social-icons">
								<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright">
					<div class="container">
						<div class="row">
							<div class="col-lg-1">
								<a href="index.html" class="logo">
									<img alt="Porto Website Template" class="img-fluid" src="img/logo-footer.png">
								</a>
							</div>
							<div class="col-lg-7">
								<p>© Copyright 2017. All Rights Reserved.</p>
							</div>
							<div class="col-lg-4">
								<nav id="sub-menu">
									<ul>
										<li><a href="page-faq.html">FAQ's</a></li>
										<li><a href="sitemap.html">Sitemap</a></li>
										<li><a href="contact-us.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="/frontend/vendor/jquery/jquery.min.js"></script>
		<script src="/frontend/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="/frontend/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="/frontend/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="/frontend/master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
		<script src="/frontend/vendor/popper/umd/popper.min.js"></script>
		<script src="/frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/frontend/vendor/common/common.min.js"></script>
		<script src="/frontend/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="/frontend/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="/frontend/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="/frontend/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="/frontend/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="/frontend/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="/frontend/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="/frontend/js/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="/frontend/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="/frontend/js/theme.init.js"></script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-42715764-5', 'auto');
			ga('send', 'pageview');
		</script>
		<script src="/frontend/master/analytics/analytics.js"></script>

		@yield('js')

	</body>

</html>
