<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ecommerce Site using PHP</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="magnify/magnify.min.css">
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<style>
		#map {
			height: 400px;
			width: 100%;
		}
	</style>
	<!-- Paypal Express -->
	<script src="https://www.paypalobjects.com/api/checkout.js"></script>



	<!-- Google Recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<!-- Custom CSS -->
	<style type="text/css">
		/* Small devices (tablets, 768px and up) */
		@media (min-width: 768px) {
			#navbar-search-input {
				width: 60px;
			}

			#navbar-search-input:focus {
				width: 100px;
			}
		}

		/* Medium devices (desktops, 992px and up) */
		@media (min-width: 992px) {
			#navbar-search-input {
				width: 150px;
			}

			#navbar-search-input:focus {
				width: 250px;
			}
		}

		.word-wrap {
			overflow-wrap: break-word;
		}

		.prod-body {
			height: 300px;
		}

		.box:hover {
			box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
		}

		.register-box {
			margin-top: 20px;
		}

		#trending {
			list-style: none;
			padding: 10px 5px 10px 15px;
		}

		#trending li {
			padding-left: 1.3em;
		}

		#trending li:before {
			content: "\f046";
			font-family: FontAwesome;
			display: inline-block;
			margin-left: -1.3em;
			width: 1.3em;
		}

		/*Magnify*/
		.magnify>.magnify-lens {
			width: 100px;
			height: 100px;
		}
	</style>

</head>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<header class="main-header">
			<nav class="header_top">
				<div class="container">
					<div class="navbar-header">
						<a href="index.php" class="navbar-brand"><b> MVK Road,Nelliady.</b></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php">HOME</a></li>
							<li><a href="Buildpc.php">Build Your PC</a></li>
							<li><a href="about.php">ABOUT US</a></li>
							<li><a href="Contact.php">CONTACT US</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">CATEGORY <span
										class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">

									<li><a href='category.php?category=laptops'>Laptops</a></li>

									<li><a href='category.php?category=desktop-pc'>Desktop PC</a></li>

									<li><a href='category.php?category=Cabinet'>Cabinet</a></li>

									<li><a href='category.php?category=PROCESSOR'>PROCESSOR</a></li>

									<li><a href='category.php?category=GPU'>GPU</a></li>

									<li><a href='category.php?category=RAM'>RAM</a></li>

									<li><a href='category.php?category=MOTHERBOARD'>MOTHERBOARD</a></li>

									<li><a href='category.php?category=SSD'>SSD</a></li>

									<li><a href='category.php?category=HDD'>HDD</a></li>

									<li><a href='category.php?category=POWER SUPPLY'>POWER SUPPLY</a></li>

									<li><a href='category.php?category=CPU COOLER'>CPU COOLER</a></li>

									<li><a href='category.php?category='>anu</a></li>
								</ul>
							</li>
						</ul>
						<form method="POST" class="navbar-form navbar-left" action="search.php">
							<div class="input-group">
								<input type="text" class="form-control" id="navbar-search-input" name="keyword"
									placeholder="Search for Product" required>
								<span class="input-group-btn" id="searchBtn" style="display:none;">
									<button type="submit" class="btn btn-default btn-flat"><i class="fa fa-search"></i>
									</button>
								</span>
							</div>
						</form>
						<div id="google_translate_element"></div>
					</div>
					<!-- /.navbar-collapse -->
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							<li class="dropdown messages-menu">
								<!-- Menu toggle button -->
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-shopping-cart"></i>
									<span class="label label-success cart_count"></span>
								</a>
								<ul class="dropdown-menu">
									<li class="header">You have <span class="cart_count"></span> item(s) in cart</li>
									<li>
										<ul class="menu" id="cart_menu">
										</ul>
									</li>
									<li class="footer"><a href="cart_view.php">Go to Cart</a></li>
								</ul>
							</li>

							<li><a href='login.php'>LOGIN</a></li>
							<li><a href='signup.php'>SIGNUP</a></li>
							<li><a href='Feedback.php'>Feedback</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<script>

			function googleTranslateElementInit() {
				new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
			}

		</script>
		<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-sm-9">
							<h1 class="page-header">Desktop PC</h1>
							<div class='row'>
								<div class='col-sm-4'>
									<div class='box box-solid'>
										<div class='box-body prod-body'>
											<img src='images/pc-specialist-vortex-core-lite-gaming-pc.jpg' width='100%'
												height='230px' class='thumbnail'>
											<h5><a href='product.php?product=pc-specialist-vortex-core-lite-gaming-pc'>PC
													SPECIALIST Vortex Core Lite Gaming PC</a></h5>
										</div>
										<div class='box-footer'>
											<b>Rs 155,599.00</b>
										</div>
									</div>
								</div>

								<div class='col-sm-4'>
									<div class='box box-solid'>
										<div class='box-body prod-body'>
											<img src='images/dell-inspiron-5675-gaming-pc-recon-blue.jpg' width='100%'
												height='230px' class='thumbnail'>
											<h5><a href='product.php?product=dell-inspiron-5675-gaming-pc-recon-blue'>DELL
													Inspiron 5675 Gaming PC - Recon Blue</a></h5>
										</div>
										<div class='box-footer'>
											<b>Rs 395,000.00</b>
										</div>
									</div>
								</div>

								<div class='col-sm-4'>
									<div class='box box-solid'>
										<div class='box-body prod-body'>
											<img src='images/hp-barebones-omen-x-900-099nn-gaming-pc.jpg' width='100%'
												height='230px' class='thumbnail'>
											<h5><a href='product.php?product=hp-barebones-omen-x-900-099nn-gaming-pc'>HP
													Barebones OMEN X 900-099nn Gaming PC</a></h5>
										</div>
										<div class='box-footer'>
											<b>Rs 388,000.00</b>
										</div>
									</div>
								</div>
							</div>
							<div class='row'>
								<div class='col-sm-4'>
									<div class='box box-solid'>
										<div class='box-body prod-body'>
											<img src='images/hp-pavilion-power-580-015na-gaming-pc.jpg' width='100%'
												height='230px' class='thumbnail'>
											<h5><a href='product.php?product=hp-pavilion-power-580-015na-gaming-pc'>HP
													Pavilion Power 580-015na Gaming PC</a></h5>
										</div>
										<div class='box-footer'>
											<b>Rs 22,799.00</b>
										</div>
									</div>
								</div>

								<div class='col-sm-4'>
									<div class='box box-solid'>
										<div class='box-body prod-body'>
											<img src='images/lenovo-legion-y520-gaming-pc.jpg' width='100%'
												height='230px' class='thumbnail'>
											<h5><a href='product.php?product=lenovo-legion-y520-gaming-pc'>LENOVO Legion
													Y520 Gaming PC</a></h5>
										</div>
										<div class='box-footer'>
											<b>Rs 188,899.00</b>
										</div>
									</div>
								</div>

								<div class='col-sm-4'>
									<div class='box box-solid'>
										<div class='box-body prod-body'>
											<img src='images/pc-specialist-vortex-core-ii-gaming-pc.jpg' width='100%'
												height='230px' class='thumbnail'>
											<h5><a href='product.php?product=pc-specialist-vortex-core-ii-gaming-pc'>PC
													SPECIALIST Vortex Core II Gaming PC</a></h5>
										</div>
										<div class='box-footer'>
											<b>Rs 255,000.00</b>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="row">
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><b>Most Viewed Today</b></h3>
									</div>
									<div class="box-body">
										<ul id="trending">
											<ul>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><b>Become a Subscriber</b></h3>
									</div>
									<div class="box-body">
										<p>Get free updates on the latest products and discounts, straight to your
											inbox.</p>
										<form method="POST" action="">
											<div class="input-group">
												<input type="text" class="form-control">
												<span class="input-group-btn">
													<button type="button" class="btn btn-info btn-flat"><i
															class="fa fa-envelope"></i> </button>
												</span>
											</div>
										</form>
									</div>
								</div>
							</div>

							<div class="row">
								<div class='box box-solid'>
									<div class='box-header with-border'>
										<h3 class='box-title'><b>Follow us on Social Media</b></h3>
									</div>
									<div class='box-body'>
										<a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
										<a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
										<a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
										<a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
										<a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.180273375362!2d80.01467227450503!3d9.665633078699969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe56a834bb7681%3A0xbf7df984b40cf37c!2sBCAS%20Jaffna%20Campus!5e0!3m2!1sen!2slk!4v1717938152777!5m2!1sen!2slk"
			width="100%" height="800" style="border:0;" allowfullscreen="" loading="lazy"
			referrerpolicy="no-referrer-when-downgrade"></iframe>

		<footer>
			<style>
				body {
					font-family: Arial, sans-serif;
				}

				.footer {
					background-color: #87CEEB;
					/* Sky blue color */
					color: #333;
					padding: 20px 0;
				}

				.footer .container {
					max-width: 1200px;
					margin: 0 auto;
					display: flex;
					flex-wrap: wrap;
					justify-content: space-between;
				}

				.footer-content {
					display: flex;
					justify-content: space-between;
					width: 100%;
				}

				.footer-left,
				.footer-middle,
				.footer-right {
					flex: 1;
					margin: 10px;
				}

				.footer-left {
					max-width: 300px;
				}

				.footer-left p {
					margin: 10px 0;
				}

				.footer-left .footer-logo {
					width: 150px;
					margin-bottom: 10px;
				}

				.footer-middle h3,
				.footer-right h3 {
					margin-bottom: 10px;
				}

				.footer-middle ul {
					list-style-type: none;
					padding: 0;
				}

				.footer-middle ul li {
					margin: 5px 0;
				}

				.footer-middle ul li a {
					color: #333;
					text-decoration: none;
				}

				.footer-middle ul li a:hover {
					text-decoration: underline;
				}

				.footer-right img {
					margin: 5px 10px 5px 0;
					width: 50px;
					display: inline-block;
				}

				.footer-bottom {
					text-align: center;
					padding: 10px 0;
					border-top: 1px solid #ccc;
					margin-top: 20px;
					width: 100%;
				}

				.footer-email {
					text-align: center;
					width: 100%;
					margin-top: 20px;
				}

				.footer-email h3 {
					margin-bottom: 10px;
				}

				.email-form {
					display: flex;
					justify-content: center;
					align-items: center;
				}

				.email-form input[type="email"] {
					padding: 10px;
					font-size: 16px;
					border: 1px solid #ccc;
					border-radius: 5px;
					margin-right: 10px;
					width: 250px;
				}

				.email-form button {
					padding: 10px 20px;
					font-size: 16px;
					border: none;
					border-radius: 5px;
					background-color: #333;
					color: #fff;
					cursor: pointer;
				}

				.email-form button:hover {
					background-color: #555;
				}
			</style>
			<footer class="footer">
				<div class="container">
					<div class="footer-content">
						<div class="footer-left">
							<img src="images\lanka.png" alt="Lanka PC" class="footer-logo">
							<p>Lanka PC (PVT) Ltd is an innovative ICT product distributor and service provider which
								established in 2019. We provide cutting-edge and reliable technology solutions for PC,
								State institutions, and Large Enterprises.</p>
							<p><strong>ADDRESS:</strong> MVK Road, Nelliady, Jaffna.</p>
							<p><strong>PHONE:</strong> (+94) 021 222 345</p>
							<p><strong>EMAIL:</strong> lankapc12@hotmail.com</p>
						</div>
						<div class="footer-middle">
							<h3>Our Company</h3>
							<ul>
								<li><a href="#">Delivery</a></li>
								<li><a href="#">Privacy & Policy</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
						<div class="footer-right">
							<h3>Payments</h3>
							<img src="images\images.png" alt="PayPal">
							<img src="images\paypal-new-20232814.logowik.com.webp" alt="Discover">
						</div>
					</div>
					<div class="footer-bottom">
						<p>&copy; Copyrights 2024 | LankaPC</p>
					</div>
					<div class="footer-email">
						<h3>Subscribe to our Newsletter</h3>
						<form action="#" method="post" class="email-form">
							<input type="email" name="email" placeholder="Enter your email" required>
							<button type="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</footer>
		</footer>
	</div>

	<!-- jQuery 3 -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- DataTables -->
	<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="bower_components/fastclick/lib/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/adminlte.min.js"></script>
	<!-- CK Editor -->
	<script src="bower_components/ckeditor/ckeditor.js"></script>
	<script>
		$(function () {
			// Datatable
			$('#example1').DataTable()
			//CK Editor
			CKEDITOR.replace('editor1')
		});
	</script>
	<!--Magnify -->
	<script src="magnify/magnify.min.js"></script>
	<script>
		$(function () {
			$('.zoom').magnify();
		});
	</script>
	<!-- Custom Scripts -->
	<script>
		$(function () {
			$('#navbar-search-input').focus(function () {
				$('#searchBtn').show();
			});

			$('#navbar-search-input').focusout(function () {
				$('#searchBtn').hide();
			});

			getCart();

			$('#productForm').submit(function (e) {
				e.preventDefault();
				var product = $(this).serialize();
				$.ajax({
					type: 'POST',
					url: 'cart_add.php',
					data: product,
					dataType: 'json',
					success: function (response) {
						$('#callout').show();
						$('.message').html(response.message);
						if (response.error) {
							$('#callout').removeClass('callout-success').addClass('callout-danger');
						}
						else {
							$('#callout').removeClass('callout-danger').addClass('callout-success');
							getCart();
						}
					}
				});
			});

			$(document).on('click', '.close', function () {
				$('#callout').hide();
			});

		});

		function getCart() {
			$.ajax({
				type: 'POST',
				url: 'cart_fetch.php',
				dataType: 'json',
				success: function (response) {
					$('#cart_menu').html(response.list);
					$('.cart_count').html(response.count);
				}
			});
		}
	</script>
</body>

</html>