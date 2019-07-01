<!DOCTYPE html>
<html>
<head>
	<title>Benomart application portal</title>

	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/lightbox.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="assets2/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets2/css/carousel.css">

	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
	<script src="assets2/js/jquery-2.1.3.min.js"></script>
</head>

<body id="home" data-spy="scroll" data-target="#main-nav">


	<!--NAV-->

	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="main-nav">
		<div class="container">
			
			<a href="index.html" class="navbar-brand">
				
				<h3 class="d-inline align-middle">Globacom</h3>
			</a>

			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarnav">
				<span class="navbar-toggler-icon"></span>
			</button>

				<div class="collapse navbar-collapse" id="navbarnav">
			<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link active">Contact</a></li>
			</ul>
	</div>

		</div>
	
	</nav>


	<!--Page header-->

	<header id="page-header" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4 m-auto text-center">
					<h1>Contact us</h1>
					<p>
						The takeaway here is that our HelloWorld project is multiple things at once. It is an Xcode® project,
						
					</p>
				</div>
			</div>
		</div>
		
	</header>


	<!--contact-->

	<section id="contact" class="py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body ">
							<h4>Get in touch</h4>
							<p>
								This allows to provide users something that is very close to an actual 
							</p>


							<h4>Address</h4>
							<p>
								No 5 Adakali villa, makurdi
							</p>

							<h4>Email</h4>
							<p>
								ayangefelix8@gmail.com
							</p>

							<h4>Phone</h4>
							<p>
								08135540700
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-8">
					<div class="card p-2">
						<div class="card-body text-center">
							<h4>Please, fill out this form to contact us</h4>
							<hr>

								<form action="" method="post">
									
								
								<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="firstname" placeholder="Firtname" class="form-control">
									</div>
								</div>
							

							
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="firstname" placeholder="Lastname" class="form-control">
									</div>
								</div>
							


							
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" name="email" placeholder="Email" class="form-control">
									</div>
								</div>
							


							
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" name="firstname" placeholder="phone" class="form-control">
									</div>
								</div>


								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message"  class="form-control" placeholder="Message"></textarea>
									</div>
								</div>


								<div class="col-md-12">
									<div class="form-group">
										<button class="btn btn-outline-danger btn-block">submit</button>
									</div>
								</div>
							
							</div>

						</form>


						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>


	<section id="staff" class="py-5 bg-dark text-center text-white">
		<div class="container">
			<h1>Our Staff</h1>
			<div class="row">
				<div class="col-md-3">
					<a href="" data-toggle="modal" data-target="#staff1modal"><img src="images/person1.jpg" class="img-fluid rounded-circle"></a>
					<h3>Jane Doe</h3>
					<p>marketing Manager</p>
				</div>

				<div class="col-md-3">
					<img src="images/pers4.jpg" class="img-fluid rounded-circle">
					<h3>Ayange Felix</h3>
					<p>Web developer</p>
				</div>


				<div class="col-md-3">
					<img src="images/person3.jpg" class="img-fluid rounded-circle">
					<h3>John Doe</h3>
					<p>CEO</p>
				</div>

				<div class="col-md-3">
					<img src="images/person2.jpg" class="img-fluid rounded-circle">
					<h3>Sera Williams</h3>
					<p>Business Manager</p>
				</div>
			</div>
		</div>
	</section>

<!--Staff Modal-->

	<div id="staff1modal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>
					<h3 class="text-center">Jane Doe, Marketing Manage</h3>
					<h3>Biography</h3>
					<p>
						web technologies. However, even though the Objective-C code that makes up the wrapper which
						creates the UIWebView is native, the content within the UIWebView is not - it’s just a webpage,
						which is why these hybrid apps gained the reputation of providing a user experience that isn’t as
						seamless as those of full native apps
					</p>
					


				</div>
			</div>
		</div>
	</div>


	

	


	


	


<!--FOOTER-->

	<footer id="main-footer" class="bg-light text-center">
		<div class="container">
			<div class="row">
				<div class="col">
					<p>Copyright &copy; <span id="year"></span> Globacom</p>
				</div>
			</div>
		</div>
	</footer>

	

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
	<script src="plugins/slick-1.8.0/slick.js"></script>

	 <script type="text/javascript" src="assets/js/lightbox.min.js"></script>


	<script>
		$('#year').text(new Date().getFullYear());



				$('.slider').slick({
					infinite: true,
					slideToShow: 1,
					slideToScroll: 1

				});	


				$('.collapse').collapse()
				

</script>


</body>
</html>