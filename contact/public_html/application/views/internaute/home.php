<!DOCTYPE html>
<html>

<!-- Mirrored from world5.commonsupport.com/html/giving-hands/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 19:53:51 GMT -->
<head>
<meta charset="utf-8">
<title>Oeil du peuple</title>
<!-- Stylesheets -->
<link href="<?=base_url()?>assets/user/css/bootstrap.css" rel="stylesheet">
<link href="<?=base_url()?>assets/user/css/revolution-slider.css" rel="stylesheet">
<link href="<?=base_url()?>assets/user/css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="< ?=base_url()?>assets/user/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body onload="//window.print()">
    <div class="page-wrapper">
        <?php
			include_once("head.php");
			if (!(count($les_articles)==0))
				include_once("slides.php"); 
			
            include_once("all_art.php");
            include_once("footer.php");
        ?>     
    </div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-arrow-up"></span></div>

<script src="<?=base_url()?>assets/user/js/jquery.js"></script> 
<script src="<?=base_url()?>assets/user/js/bootstrap.min.js"></script>
<script src="<?=base_url()?>assets/user/js/revolution.min.js"></script>
<script src="<?=base_url()?>assets/user/js/jquery.appear.js"></script>
<script src="<?=base_url()?>assets/user/js/knob.js"></script>
<script src="<?=base_url()?>assets/user/js/jquery.fancybox.pack.js"></script>
<script src="<?=base_url()?>assets/user/js/jquery.fancybox-media.js"></script>
<script src="<?=base_url()?>assets/user/js/validate.js"></script>
<script src="<?=base_url()?>assets/user/js/wow.js"></script>
<script src="<?=base_url()?>assets/user/js/script.js"></script>
</body>

<!-- Mirrored from world5.commonsupport.com/html/giving-hands/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jul 2018 19:57:06 GMT -->
</html>
