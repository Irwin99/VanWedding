<!DOCTYPE html>
<html>
<head>
	<title>VanCateringDecoration</title>
    <link href="https://fonts.googleapis.com/css?family=Vollkorn|Roboto+Condensed" rel="stylesheet">
	<link href="<?php echo base_url('asset/asset_index/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/asset_index/default.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/asset_index/fa/css/font-awesome.min.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('asset/asset_index/css/maps/jquery-jvectormap-2.0.3.css')?>" rel="stylesheet"/>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>	
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
						        <!-- <li class="dropdown">
						          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
						          <ul class="dropdown-menu">
						            <li><a href="#">Action</a></li>
						            <li><a href="#">Another action</a></li>
						            <li><a href="#">Something else here</a></li>
						            <li role="separator" class="divider"></li>
						            <li><a href="#">Separated link</a></li>
						            <li role="separator" class="divider"></li>
						            <li><a href="#">One more separated link</a></li>
						          </ul>
						        </li> -->
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
	          <img class="first-slide" src="<?php echo base_url('asset/images/wedding.jpg')?>" alt="First slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Decoration</h1>
	              <p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
	              <p><a class="btn btn-lg vcd-btn-primary" href="#" role="button">Sign up today</a></p>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img class="second-slide" src="<?php echo base_url('asset/images/wedding2.png')?>" alt="Second slide">
	          <div class="container">
	            <div class="carousel-caption">
	              <h1>Decoration</h1>
	              <p>Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet</p>
	              <p><a class="btn btn-lg vcd-btn-primary" href="#" role="button">Learn more</a></p>
	            </div>
	          </div>
	        </div>
	        <div class="item">
	          <img class="third-slide" src="<?php echo base_url('asset/images/wedding8.jpg')?>" alt="Third slide">
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
<section id="about">
	<div class="vcd-about">
		<div class="container">
		<br/><br/>
			<div class="col-sm-6 col-md-6 col-xs-12 text-center">
				<h1>ABOUT <b>US</b></h1>
			</div>
			<div class="col-sm-6 col-md-6 col-xs-12 text-center">
				<p>
					Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet Lorem Ipsum Dolor Sil Amet
				</p>
				<a class="btn btn-sm vcd-btn-primary" href="#" role="button">Read More</a>
			</div>
		</div>
	</div>
	<div class="vcd-banner">
		<img src="<?php echo base_url('asset/images/wedding5.jpg')?>" alt="Img" class="img-responsive">
		<div class="overlay-image"></div>
		<div class="play-button-container">
			Celebrate Your <b>Special</b> Day <br />
			With <b>Special</b> Food
		</div>
	</div>
</section>
	<div class="vcd-package">

		<div class="container">
		<section id="package">
			<h2>Catering <b>Package</b></h2><br/>
			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/wedding6.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Paket Tata Rias</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris 	</td></tr>	
						</tbody>
						</table>
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/wedding6.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Paket Tata Rias</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris </td></tr>	
						</tbody>
						</table>
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/wedding6.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Paket Tata Rias</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris </td></tr>	
						</tbody>
						</table>
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/wedding6.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Paket Tata Rias</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris </td></tr>	
						</tbody>
						</table>
					</div>
					</div>
				</div>
			</div> <!-- end of row -->
<section id="decoration">
			<div><br/><br/>
				<h2>Decoration <b>Package</b></h2><br/><br/>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/dekor1.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Paket Tata Rias</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris 	</td></tr>	
						</tbody>
						</table>
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/dekor2.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Paket Tata Rias</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris </td></tr>	
						</tbody>
						</table>
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/dekor1.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Paket Tata Rias</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris </td></tr>	
						</tbody>
						</table>
					</div>
					</div>
				</div> 
				<div class="col-md-3 col-sm-4 col-xs-6">
					<div id="vcd-box">
						<img src="<?php echo base_url('asset/images/dekor2.jpg')?>" alt=Img class="img-responsive"></img>
					</div>
					<div class="price-list text-center">
						<h2><c>Paket Tata Rias</c></h2>
					
					<div class="list-name text-center">
						<table class="table table-striped">
						<tbody>
							<tr><td>Rias Pengantin 1 Pasang (Akad & Resepsi Di Gedung)</td></tr>
							<tr><td>Rias Orang Tua 2 Orang</td></tr>
							<tr><td>Busana Lengkap & Accesoris </td></tr>	
						</tbody>
						</table>
					</div>
					</div>
				</div>
			</div> <!-- end of row-->
		</div> <!-- end of container -->	
		</section>
	</div> <!-- end of vcd-pckage -->
	<div class="vcd-banner">
		<img src="<?php echo base_url('asset/images/wedding7.jpg')?>" alt="Img" class="img-responsive">
		<div class="overlay-image"></div>
		<div class="play-button-container">
			Decorate Your <b>Wedding</b> Day <br />
			Decorate Your <b>Future</b> Day
		</div>
	</div>	
<section id="gallery">	
<div class="vcd-gallery">
	<div class="container text-center">
			<div><br/><br/>
				<h2>All <b>Gallery</b></h2><br/><br/>
			</div>
		<div class="row">
			<div class="col-sm-4 col-md-3 col-xs-6 text-center">
				<img src="<?php echo base_url('asset/images/gallery1.jpg')?>" alt=Img class="img-responsive"></img>
			</div>
			<div class="col-sm-4 col-md-3 col-xs-6 text-center">
				<img src="<?php echo base_url('asset/images/gallery1.jpg')?>" alt=Img class="img-responsive"></img>
			</div>
			<div class="col-sm-4 col-md-3 col-xs-6 text-center">
				<img src="<?php echo base_url('asset/images/gallery1.jpg')?>" alt=Img class="img-responsive"></img>
			</div>
			<div class="col-sm-4 col-md-3 col-xs-6 text-center">
				<img src="<?php echo base_url('asset/images/gallery1.jpg')?>" alt=Img class="img-responsive"></img>
			</div>
		</div><br/><!-- end of row-->
	</div><!-- end of container -->
</div>
</section>
	<div class="vcd-banner">
		<img src="<?php echo base_url('asset/images/marriage.jpg')?>" alt="Img" class="img-responsive">
		<div class="overlay-image"></div>
		<div class="play-button-container">
			Good <b>Marriage</b> Comes From <br />
			a Good <b>Wedding</b>
		</div>
	</div>
<section id="contact">
	<div class="vcd-contact">
		<div class="container">
			<div class="col-sm-6 col-md-6 col-xs-12 text-center">
				<div class="col-xs-12">
					<div class="col-sm-6 col-md-6 hidden-xs" style="padding-left: 0px">
						<div class="form-group">
							<input class="form-control" type="text" name="nama" placeholder="Nama">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 visible-xs" style="padding: 0px">
						<div class="form-group">
							<input class="form-control" type="text" name="nama" placeholder="Nama">
						</div>
					</div>				
					<div class="col-sm-6 col-md-6 hidden-xs" style="padding-right: 0px">
						<div class="form-group">
							<input class="form-control" type="text" name="email" placeholder="Email">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 visible-xs" style="padding: 0px">
						<div class="form-group">
							<input class="form-control" type="text" name="email" placeholder="Email">
						</div>
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<input class="form-control" type="text" name="subject" placeholder="Subject">
					</div>
				</div>
				<div class="col-xs-12">
					<div class="form-group">
						<textarea class="form-control" rows="3" id="message" placeholder="Message"></textarea>
					</div>
				</div>
				<button class="btn btn-sm vcd-btn-primary" type="submit" role="button">Submit</button>
			</div>
			
			<div class="col-sm-6 col-md-6 col-xs-12 text-center">
			<div class="vcd-contact-us">
				<h1>CONTACT <b>US</b></h1>
			</div>
			</div>
		</div>
	</div>
</section>
<div id="vcd-bottom-footer">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 text-center">
			<p>&copy; 2016 Van Catering Decoration All Rights Reserved</p>
			<p>Developed By <a href="http://dzillaweb.com/">Dzilla Web</a></p>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url('asset/asset_index/bootstrap/js/jquery.min.js')?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('asset/asset_index/bootstrap/js/bootstrap.min.js')?>"></script>
</body>
</html>
