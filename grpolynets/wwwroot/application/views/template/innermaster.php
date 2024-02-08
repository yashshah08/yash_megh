<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>

		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	  	<meta name="viewport" content="width=1024, initial-scale=1, minimum-scale: 1, maximum-scale: 1" />
	  	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

	  	<meta name="description" content="">
        <meta name="image" content="<? echo site_url('assets/images/meta_img.jpg');?>">
		<meta name="twitter:title" content="">
		<meta name="twitter:description" content="">
		<meta name="twitter:image:src" content="<? echo site_url('assets/images/meta_img.jpg');?>">
		<meta property="og:title" content="">
		<meta property="og:description" content="">
		<meta property="og:image" content="<? echo site_url('assets/images/meta_img.jpg');?>">

		<meta name="keywords" content="" />



    	<title>GR Polynets</title>
		<link rel="shortcut icon" href="<? echo site_url('favicon.ico');?>">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link href="<? echo site_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

		<link href="<? echo site_url('assets/css/slick.css');?>" rel="stylesheet" type="text/css" />
		<link href="<? echo site_url('assets/css/style.css');?>" rel="stylesheet" type="text/css" />

		<script src="<? echo site_url('assets/js/jquery-3.5.1.min.js');?>"></script>
		<script src="<? echo site_url('assets/js/jquery.validate.js');?>"></script>

	</head>
	<body>
	<style>
 #loaderbox{width:100vw; height:100vh; position:fixed; top:0px; left:0px; z-index:99999999; background:rgba(0,0,0,0.5); display:flex; flex-direction:row;
	justify-content: center; align-items:center;
	}
.loader {
border: 5px solid #f3f3f3; /* Light grey */
border-top: 5px solid $primary-color; /* Blue */
border-radius: 50%;
width: 60px;  
height:60px;
animation: spin 2s linear infinite;
}

@keyframes spin {
0% { transform: rotate(0deg); }
100% { transform: rotate(360deg); }
}
</style>
	<b class="screen-overlay"></b>
    <div id="loaderbox">
        <div class="loader"></div>
    </div>
		<div class="inner_header">
			<?php $this->load->view('includes/header.php');?>
		</div>
		<?php $this->load->view('includes/innerbanner.php');?>
		<?php $this->load->view($main);?>
		<?php $this->load->view('includes/footer.php');?>

		
		<script src="<? echo site_url('assets/js/bootstrap/bootstrap.min.js');?>"></script>
	    <script src="<? echo site_url('assets/js/slick.js');?>"></script>
	    <script src="<? echo site_url('assets/js/custom.js');?>"></script>

			<script>
  $().ready(function() {
    $('.success').delay(6000).fadeOut();
    $('.failure').delay(6000).fadeOut();
  });
  </script>
		<script>
  $().ready(function() {
    $('.alert-success').delay(6000).fadeOut();
    $('.alert-danger').delay(6000).fadeOut();
  });
  </script>
<script>
        var overlaybox = document.getElementById("loaderbox");
        window.addEventListener('load', function() {
            overlaybox.style.display = 'none';
        })
    </script>

<script>
        $(document).ready(function(){
					$(".bannerSlider").show();
            $('.bannerSlider').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 3,
            slidesToScroll: 1,
            // autoplay:true,
            autoplaySpeed: 1000,
            draggable: true,
            arrows: true ,
            dots: true,
            responsive: [{breakpoint: 768,settings: {slidesToShow: 2,centerMode: false}},
                         {breakpoint: 575,settings: {slidesToShow: 1,centerMode: false}}]
    
});
    });
    </script>
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js">
      import { Tab, initMDB } from "mdb-ui-kit";
      initMDB({ Tab });
  </script>
	</body>
</html>