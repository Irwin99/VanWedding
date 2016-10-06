<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $this->load->view('header'); ?>
  </head>

<body>
 <nav class="navbar navbar-default navbar-fixed-top">
	<div class="vcd-topbar">
		<div class="container">
			<div class="col-md-3">
				<i class="fa fa-map-marker fa-fw"></i> Kalideres, Jakarta Barat
			</div>
			<div class="col-md-3 col-md-offset-6">
				<i class="fa fa-envelope fa-fw"></i> hello@vancateringdecoration.com
			</div>
			 <div class="clearfix"></div>
		</div>
	</div>

		<div class="vcd-navbar">
		  	<div class="container">
				<div class="col-md-4">
					<h1><b>VAN</b> Catering <b>&</b> Decoration</h1>
				</div>
				<div class="col-md-8 col-xs-12 col-sm-12">
					<nav class="navbar navbar-default ">
						<div class="nav menu sf-menu responsive-menu superfish sf-js-enabled">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#vcd-collapse-nav" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
						<div class="collapse navbar-collapse" id="vcd-collapse-nav">
							<ul id="vcd-navbar" class="nav navbar-nav">
						        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
						        <li><a href="#about">About</a></li>
						        <li><a href="#package">Catering</a></li>
						        <li><a href="#decoration">Decoration</a></li>
						        <li><a href="#gallery">Gallery</a></li>
						        <li><a href="#contact">Contact Us</a></li>
						      </ul>
						</div>
					</nav>
				</div>
			</div>
	</div>
</nav>

	<div class="vcd-carousel">
		<!-- Carousel
	    ================================================== -->
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	        <li data-target="#myCarousel" data-slide-to="1"></li>
	        <li data-target="#myCarousel" data-slide-to="2"></li>
	      </ol>
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img class="first-slide" src="<?php echo base_url('CI/asset/images/wedding4.webp')?>" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Decoration</h1>
	              <p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
	              <p><a class="btn btn-lg vcd-btn-primary" href="#" role="button">Sign up today</a></p>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img class="second-slide" src="<?php echo base_url('CI/asset/images/wedding2.png')?>" alt="Second slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Decoration</h1>
	              <p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
	              <p><a class="btn btn-lg vcd-btn-primary" href="#" role="button">Learn more</a></p>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img class="third-slide" src="<?php echo base_url('CI/asset/images/wedding3.webp')?>" alt="Third slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Decoration</h1>
	              <p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
	              <p><a class="btn btn-lg vcd-btn-primary" href="#" role="button">Browse gallery</a></p>
	            </div>
	          </div>
	        </div>
	      </div>
	      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	        <span class="sr-only">Previous</span>
	      </a>
	      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	        <span class="sr-only">Next</span>
	      </a>
	    </div><!-- /.carousel -->
	</div>


	
</body>
</html>
