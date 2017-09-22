<?php
			if(isset($_GET['oldal']) && $_GET['oldal']!=NULL){
				$oldal = $_GET['oldal'];				
			}else{
				$oldal = 'fooldal';

			}
			$uri = explode('/', $_SERVER['REQUEST_URI']);

			/* newhosting-on elég ez
				$url = 'http://'.$_SERVER['HTTP_HOST'].$uri[0];
			*/
			//localhost-on, xammp-nál pedig ez:	
			$url = 'http://'.$_SERVER['HTTP_HOST'].$uri[0].'/'.$uri[1];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tünde Vendégház</title>
	<meta charset="utf-8">
	<meta name="description" content=" Pihenjen Ön is Tiszakécskén, a Tünde vendégházban!">
	<meta name="keywords" content="vendégház, Tisza part, nyaralás, Tiszakécske">
	<meta name="robots" content="index, follow">
	<meta name="resource-type" content="document">
	<meta name="Robots" content="All">
	<meta name="Author" content="farkas.webmester@gmail.com">
	<meta name="generator" content="Farkas Gábor">
	<meta name="Publisher" content="farkas.webmester@gmail.com">
	<meta name="copyright" content="Farkas Gábor">
	<meta name="country" content="Hungary">
	<meta name="content-language" content="hu, hun, hungarian">
	<meta name="content-encoding" content="hu, hun, hungarian">
	<meta name="revisit-after" content="30 days">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="public/images/favicon.ico" type="image/x-icon" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/lightbox.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="public/js/lightbox.min.js"></script>
	<script src="https://use.fontawesome.com/5086f7a4fc.js"></script>
</head>
<body>

<div id="wrap">
<div id="main" class="container">
	<div class="header hidden-sm hidden-xs">
	<div class="row">
		<div class="col-lg-4 col-md-3">
			
			<h1><img src="public/images/tvh2.png"></h1>
			
		</div>
		<div class="col-lg-5 col-md-5 address"><h2> <a href="https://www.google.hu/maps/place/Tiszak%C3%A9cske,+Ny%C3%BAl+u.+26,+6060/@46.938746,20.1208753,17z/data=!3m1!4b1!4m5!3m4!1s0x4741586f54ff69d3:0x7f3d36c62e464a10!8m2!3d46.938746!4d20.123064"> 6060 Tiszakécske, Nyúl utca 26 </a></h2></div>
		<div class="col-lg-3 col-md-4 col-sm-4">
			<h2><span class="icon-bar"><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:info@tundevendeghaz.hu">info@tundevendeghaz.hu</a></h2>
			<h2><span class="icon-bar"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:+36305240025 "> +36 30 524 0025</a></h2>
		</div>
</div>
	</div>
	<nav class="navbar navbar-default rounded-0">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><span class="visible-xs-inline visible-sm-inline">Tünde Vendégház</span></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li <?php if($oldal == 'fooldal'): ?> class="active" <?php endif ?>><a href="<?php echo $url ?>/fooldal"><span class="glyphicon glyphicon-home"></span> Főoldal <span class="sr-only">(current)</span></a></li>
	        <li <?php if($oldal == 'vendeghaz'): ?> class="active" <?php endif ?>><a href="<?php echo $url ?>/vendeghaz"><span class="glyphicon glyphicon-home"></span> Vendégházról <span class="sr-only">(current)</span></a></li>
			<li <?php if($oldal == 'latnivalok'): ?> class="active" <?php endif ?>><a href="<?php echo $url ?>/latnivalok"><span class="glyphicon glyphicon-eye-open"></span> Látnivalók</a></li>
			<li <?php if($oldal == 'araink'): ?> class="active" <?php endif ?>><a href="<?php echo $url ?>/araink"><span class="glyphicon glyphicon-piggy-bank"></span> Áraink</a></li>
			<li <?php if($oldal == 'galeria'): ?> class="active" <?php endif ?>><a href="<?php echo $url ?>/galeria"><span class="glyphicon glyphicon-picture"></span> Galéria</a></li>	 
			<li <?php if($oldal == 'kapcsolat'): ?> class="active" <?php endif ?>><a href="<?php echo $url ?>/kapcsolat"><span class="glyphicon glyphicon-envelope"></span> Kapcsolat</a></li>
	      </ul>
	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>

		<?php require('menu/'.$oldal.'.php'); ?>
	<div id="push"></div>
</div>

<div id="footer">
      <div class="container">        
      
        
        <div class="row">
        <div class="col-md-6 col-sm-12">
        	<h3>Térkép:</h3>
        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.1675501571194!2d20.12087531560745!3d46.93874597914603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741586f54ff69d3%3A0x7f3d36c62e464a10!2zVGlzemFrw6ljc2tlLCBOecO6bCB1LiAyNiwgNjA2MA!5e0!3m2!1shu!2shu!4v1505153061734" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

       
        <div class="col-md-4 col-sm-6 col-xs-6">
        <div >
        	<h3>Elérhetőségek:</h3>
        	<ul>
        		<li>
        			<i class="fa fa-map" aria-hidden="true"></i> <a href=""https://www.google.hu/maps/place/Tiszak%C3%A9cske,+Ny%C3%BAl+u.+26,+6060/@46.938746,20.1208753,17z/data=!3m1!4b1!4m5!3m4!1s0x4741586f54ff69d3:0x7f3d36c62e464a10!8m2!3d46.938746!4d20.123064"> 6060 Tiszakécske, Nyúl utca 26 </a>
        		</li>
        		<li>
        			<span class="icon-bar"><i class="fa fa-envelope" aria-hidden="true"></i></span> <a href="mailto:info@tundevendeghaz.hu">info@tundevendeghaz.hu</a>
        		</li>
        		<li>        			
					<span class="icon-bar"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="tel:+36305240025"> +36 30 524 0025</a>
        		</li>
        	</ul>

</div>
        </div>
         <div class="col-md-2 col-sm-6 col-xs-6">
        	<div class="" style="padding-top: 50px;">
        	<a href="https://szallas.hu/tunde-vendeghaz-tiszakecske" style="display: block; width: 200px; height: 220px; text-decoration: none !important;"><div class="excellent_accommodation_holder" style="width: 198px; height: 218px; position: relative; font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000; text-align: center; line-height: normal !important;"><div class="excellent_badge" style="background: url(https://s.szalas.hu/images/excellent/logo_hu.gif); width: 192px; height: 145px; margin: 1px auto; padding: 0px;"></div><div class="excellent_hotel_name" style="width: 194px; height: 30px; overflow: hidden; margin: 0px auto 2px auto; color: #D20000; padding: 0px;">Tünde Vendégház Tiszakécske</div><div class="rating_count_text" style="width: 194px; height: 34px; overflow: hidden; color: #000;"><script type="text/javascript" src="https://szallas.hu/js/excellent/742763"></script></div></div></a>

        	</div>
        </div>
        </div>
        <div class="row">
        	<p>Tünde Vendégház 2017 &copy Minden jog fenntartva.</p>
        </div>
      </div>
    </div>

</body>
</html>