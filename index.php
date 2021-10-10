<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>O-NET | Game Web & Voice Hosting</title>
<meta name="description" content="O-NET HOSTING The best game, voice, web, vps hosting, best prices and best quality">
<meta name="keywords" content="game hosting, vps hosting, cs 1.6, games, ts3, teamspeak3, vps, web, webhosting, webhosting, samp, samp servers, samp hosting, gta sa, gta san andreas, counter strike, cs 1.6, cs go, cs:go," />
<meta name="author" content="ONET HOSTING">
<meta name="allow-search" content="yes" />
<meta property="og:site_name" content="O-NET HOSTING">
<meta property="og:url" content="https://o-net.info">
<meta property="og:image" content="http://o-net.info/images/o-netmeta.png" />
<meta property="og:title" content="O-NET | GAME VOICE WEB VPS DED HOSTING">
<meta property="og:type" content="website">
<meta property="og:description" content="O-NET HOSTING - Bavi se hostovanjem i izgradnjom Game Voice i Web Servera od 2012. godine, te izradom Web Sajtova i raznih plugina i modula za naše postojece i nove kliente, Uz sve to nudimo Vam kvalitetu, sigurnost i dobru cjenu!">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/hosting.css" rel="stylesheet" media="all">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<script src="js/modernizr.js"></script>
<link rel="stylesheet" href="css/flexslider.css" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
  $(window).load(function() {
     $('.flexslider').flexslider({
        animation: "slide",
		useCSS: Modernizr.touch
      });
  });
</script>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">

<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<a class="navbar-brand" href="/"> <img src="images/logo.png" alt="logo"></a> </div>

<div class="collapse navbar-collapse navbar-ex1-collapse">
<ul class="nav navbar-nav navbar-right">
<li class="active"><a href="/home">HOME</a></li>
<li class="hidden-sm"><a href="/features">FEATURES</a></li>
<li><a href="/web">WEB</a></li>
<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">GAME<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="/ts3">Team Speak 3</a></li>
<li><a href="/cs">Counter Strike 1.6</a></li>
<li><a href="/samp">GTA SA:MP</a></li>
</ul>
</li>
<li><a href="/contact">CONTACT</a></li>
<li><a href="">|</a></li>
<li><a href="#" role="button" data-toggle="modal" data-target="#Login">Login</a></li>
<li><a href="https://web.o-net.info" role="button" class="btn btn-success">Web Panel</a></li>
</ul>
</li>
</ul>
</div>
</div>
</nav>

<?php
define("access", 1);
	error_reporting(0);
	
	         if($_GET['page'] == "contact"){
	    include("includes/contact.php");
		} else if($_GET['page'] == "tos"){
		include("includes/tos.php");
		} else if($_GET['page'] == "contactsend"){
		include("includes/contact-form.php");
		} else if($_GET['page'] == "features"){
		include("includes/features.php");
        } else if($_GET['page'] == "home"){
		include("includes/ts3.php");	
        } else if($_GET['page'] == "404"){
		include("includes/404.php");
        } else if($_GET['page'] == "web"){
		include("includes/web.php");
        } else if($_GET['page'] == "webbuy"){
		include("includes/webbuy.php");		
		} else if($_GET['page'] == "ts3"){
		include("includes/ts3.php");
		} else if($_GET['page'] == "ts3buy"){
		include("includes/ts3buy.php");
		} else if($_GET['page'] == "cs"){
		include("includes/cs.php");
		} else if($_GET['page'] == "csbuy"){
		include("includes/csbuy.php");
		} else if($_GET['page'] == "samp"){
		include("includes/samp.php");
		} else if($_GET['page'] == "paypal"){
		include("includes/paypal.php");
		} else if($_GET['page'] == "sampbuy"){
		include("includes/sampbuy.php");
		} else if($_GET['page'] == "wow-addons"){
		include("includes/wowaddons.php");
		
	} else {
	?>

	 
	<?php 
	 include("includes/home.php");
	} ?>
	
	
	
	

<div class="footer">
<div class="container">
<div class="row footerlinks">
<div class="col-sm-4 col-md-2">
<p>CALL US</p>
<ul>
<li> <a href="tel:+38766 111 111">+387 (0) 66 111 111</a></li>
<li> <a href="tel:+38766508093">Viber | Whatsapp</a></li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>WEB</p>
<ul>
<li><a href="/">Home</a></li>
<li><a href="/features">Features</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>Game</p>
<ul>
<li><a href="/cs">CS 1.6 MP</a></li>
<li><a href="/samp">GTA SA:MP</a></li>
<li><a href="/ts3">TeamSpeak3</a></li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>LEGAL TERMS</p>
<ul>
<li><a href="/tos">Terms of use</a></li>
<li><a href="/tos">Privacy Policy</a></li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>Contact</p>
<ul>
<li><a href="mailto:your@email.com">E-Mail</a></li>
<li><a href="https://twitter.com/ONET_HOSTING">Twitter</a></li>
<li><a href="https://plus.google.com/u/3/115835821287254477154">Google +</a></li>
</ul>
</div>
<div class="col-sm-4 col-md-2">
<p>FOLLOW US</p>
<ul>
<div class="fb-like-box" data-href="https://www.facebook.com/o5net" data-width="50" data-height="40" data-colorscheme="dark"data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
</ul>
</div>
</div>
<div class="row copyright">
<div class="pull-right"><p>Copyright &copy; 2014. O-NET</p></div>
<p> v1.0 BETA</p>
</div>
</div>



<div class="modal fade LoginSignup" id="Login" tabindex="-1" role="dialog" aria-labelledby="LoginLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h3 class="modal-title">Login</h3>
</div>
<div class="modal-body">
<form method="post" action="#SOON">
<div class="form-group">
<input class="form-control input-lg" type="text" name="username" size="50" placeholder="Email" />
</div>
<div class="form-group">
<input class="form-control input-lg" type="password" name="password" size="20" placeholder="Password" />
</div>
<div class="form-group">
<input type="submit" value="Login to my Account" class="btn btn-success btn-lg" />
</div>
</form>
</div>
</div>

</div>



	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>	
<script src="js/bootstrap.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120235260-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-120235260-1');
</script>
</body>
</html>