<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VanCateringDecoration </title>
<!-- Bootstrap -->
<link href="<?php echo base_url('asset/asset_index/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
<!-- Font Awesome -->
<link href="<?php echo base_url('asset/asset_index/fa/css/font-awesome.min.css')?>" rel="stylesheet">
<!-- jVectorMap -->
<link href="<?php echo base_url('asset/asset_index/css/maps/jquery-jvectormap-2.0.3.css')?>" rel="stylesheet"/>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>