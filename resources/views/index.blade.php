
<!DOCTYPE html>
<html>
<head>
	<title>Benomart application portal</title>

	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="assets2/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/lightbox.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{('assets2/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="assets2/css/carousel.css">

	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
	<script src="assets2/js/jquery-2.1.3.min.js"></script>
</head>

<body id="home" data-spy="scroll" data-target="#main-nav">

        <div id="app">
                <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                           BENOMART APPLICATION PORTAL
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                <li class="nav-item">
                                        <a href="" class="nav-link">Home
                                    </a>

                                    <li class="nav-item">
                                            <a href="" class="nav-link">About Us

                                        </a>
                                        </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Create account') }}</a>
                                        </li>

                                        <li class="nav-item">
										<a href="" class="nav-link">Contact us
    
                                            </a>
                                            </li>

                                       
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>


	<!--SHOWCASE SLIDER-->

       


	<section id="showcase">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="assets2/images/image1.jpg" alt="First slide">
	      <div class="carousel-caption d-none d-md-block">
			<!--Carousel Caption goes here-->
			
		   
		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets2/images/image2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
		    <!--Carousel Caption goes here-->
		</div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets2/images/image3.jpg" alt="Third slide">

      <div class="carousel-caption d-none d-md-block">
		    <!--Carousel Caption goes here-->
		</div>
    </div>
  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</section>


	<div id="affairs" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">

					<h4 class="modal-title">Create account to continue</h4>

					<button class="close" data-dismiss="modal">
					<span>&times;Close</span>
					</button>
					
				</div>


				

				<div class="modal-body">
					<form>
						<div class="form-group">
							<input type="text" name="Lastname" placeholder="LastName" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" name="Lastname" placeholder="FirstName" class="form-control">
						</div>

						<div class="form-group">
							<input type="text" name="Lastname" placeholder="Email" class="form-control">
						</div>

						<div class="form-group">
							<input type="text" name="Lastname" placeholder="Password" class="form-control">
						</div>

						<div class="form-group">
							<button class="btn btn-outline-success btn-lg btn-block">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

    <!--HOME ICON SECTION-->
    

    <section id="home-icon" class="py-5 text-center">
        <div class="container">
        	<div class="row">
        		<div class="col-md-6 ">
        			<h1 class="lead">What we are</h1>
        			
        			<p>
        				When you install WAMP or XAMPP, you have MySQL and phpMyAdmin (a free software
					tool written in PHP, intended to handle the administration of MySQL over the Web)
					already. For Mac, you can install MAMP³ ڐto have MySQL. It’s the easiest way to have a
					database platform for your system. Usually, default username of MySQL is root and there
					is no MySQL password by default. You can leave it blank or find a way to set a password
					for MySQL.
        			</p>

        			<a href="" class="btn btn-primary">Read More</a>

        		</div>

        		<div class="col-md-6">
        			<img src="assets2/images/slider-photo5.jpg" class="img-fluid rounded-circle">
        		</div>


        	</div>
        </div>


    </section>


    <section id="steps" class="py-5 bg-light">
    	<div class="container">
    		<h1 class="mb-2">Our Steps</h1>
    		<div class="row">
    			
    			<div class="col-md-4 text-center">
    				<i class="fas fa fa-user fa-3x"></i>
    				<h3>CREATE AN ACCOUNT</h3>
    				<p class="lead">
    					Start by exploring our Positions to determine which is a good fit for you. 
    				</p>
    			</div>

    			<div class="col-md-4 text-center">
    				<i class="fas fa fa-file fa-3x"></i>
    				<h3>START YOUR APPLICATION</h3>
    				<p class="lead">
    					Ready to apply? The online application will walk you through all application steps. 
    				</p>
    			</div>
    				
    			<div class="col-md-4 text-center">
    				<i class="fas fa fa-envelope fa-3x"></i>
    				<h3>WAIT FOR FEED BACK</h3>
    				<p class="">
    					Once you’re selected, huge life changes are ahead. If you decide to accept the offer. 
    				</p>
    			</div>
    		</div>
    	</div>
    </section>

	
	
	

	<!--VIDEO PLAY-->

	<section id="video-play" class="py-5">

		<div class="dark-overlay">
			<div class="container">
				<div class="row">
					<div class="col">
						<a href="" class="video" data-video="" data-toggle="modal" data-target="#videoModal">
							<i class="icon fa fa-play fa-3x"></i>
							<h1>See what we do</h1></a>
					</div>
				</div>
			</div>
		</div>
		
	</section>



	<!--PHOTO GALLARY-->

	<section id="gallery" class="py-5 text-center">
		<div class="container">
			<h1 class="text-center">Our Team</h1>
			<p class="text-center">Check out our workers here</p>
			<div class="row">
				<div class="col-md-4 mb-4">
					<a href="images/image1.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
						<img src="assets2/images/team1.jpg" class="img-fluid rounded-circle">
					</a>
					<h4>Jimin simon <span>(CEO)</span></h4>
				</div>

				<div class="col-md-4 mb-4">
					<a href="images/image1.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
						<img src="assets2/images/pers4.jpg" class="img-fluid rounded-circle">
					</a>
					<h4>Ayange felix <span>(Developer)</span></h4>
				</div>

				<div class="col-md-4 mb-4">
					<a href="images/person3.jpg" data-toggle="lightbox" data-gallery="img-gallery" data-height="560" data-width="560">
						<img src="assets2/images/team1.jpg" class="img-fluid rounded-circle">
					</a>
					<h4>Lasisi Modupe<span>(Cs)</span></h4>
				</div>
			</div>


		</div>
	</section>


	<!--Newsletter-->


	<section id="Newsletter" class="py-5 bg-dark text-center text-white">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Sign up to our newsletter</h1>
					<p>Enter your name and email addres to subscribe to our mailing list</p>
					<form class="form-inline justify-content-center" role="form">

						<div class="group">
							<input type="text" name="name" placeholder="name" class="form-control form-control-lg mr-3 mb-2">
						</div>

						<div class="group">
							<input type="text" name="email" placeholder="Email" class="form-control form-control-lg mr-3 mb-2">
						</div>

						<div class="form-group">
							<button class="btn btn-primary btn-lg mr-3 mb-2">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<!--FOOTER-->

	<footer id="main-footer" class="bg-light text-center">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<p>Copyright &copy; <span id="year"></span> Benomart</p>
				</div>
			</div>
		</div>
	</footer>


	<div id="logout" class="modal fade">
		<div class="col-md-6 m-auto text-center">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="modal-body">
					<div class="modal-title">
						Are your sure you want to logout?
					</div>
					<hr>

					
							<button class="close" data-dismiss="modal">
									<a href="index.html" class="btn btn-primary ml-2">No</a>
								</button>

								<button class="close" data-dismiss="modal">
										<a href="blog.html" class="btn btn-primary">Yes</a>
									</button>
					
					
				</div>
				</div>
				
			</div>
		</div>
	</div>

	<!--VIDEO modal-->

	<div class="modal fade" id="videoModal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button class="close" data-dismiss="modal">
						<span>&times;</span>
					</button>

					<iframe src="" frameborder="0" height="350px" width="100%" allowfullscreen></iframe>
					
				</div>
			</div>
		</div>
		
	</div>


	

















	<script src="assets/js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
	 <script src="plugins/slick-1.8.0/carousel.js"></script>
	



	

	<script>
		$('#year').text(new Date().getFullYear());


//initialize scrollspy
		$('body').scrollspy({target:'#main-nav'});

		//smooth scroll
		$("#main-nav a").on('click', function (event) {
			if(this.hash !== ""){
				event.preventDefault();
				const hash = this.hash;
				$('html, body').animate({
				scrollTop: $(hash).offset().top
				}, 800, function(){ 	
				


				window.location.hash = hash;
			});
			}
		});	



		// Configure Slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
     
      $(this).lightbox();
    });

    // Video Play
    $(function () {
      // Auto play modal video
      $(".video").click(function () {
        var theModal = $(this).data("target"),
          videoSRC = $(this).attr("data-video"),
          videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function () {
          $(theModal + ' iframe').attr('src', videoSRC);
        });
      });
    });

    $('.carousel').carousel()
  
	</script>




</body>
</html>