<?php
// Codigo a insertar al principio de la web
function getTiempo()
{
    list($usec, $sec) = explode(' ', microtime());

    return (float) $usec + (float) $sec;
}
$TiempoInicial = getTiempo();
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<?php include 'head.php'; ?>
</head>
<body class="collapsing_header">
<header>
<?php include 'header.php'; ?>
</header>
<div class="full_page_photo" style="background-image: url(images/makingof.png);">
     <div class="container">
          <section class="call_to_action">
<!--               <h3 class="animated bounceInDown">we get <strong>our hands</strong> dirty</h3>

               <br>
               <h4 class="animated bounceInUp">our <strong>customers</strong> are always <strong>happy</strong>!</h4>
-->
          </section>
     </div>
</div>
<div id="main">
     <div class="container">
          <section id="services">
               <div class="hgroup">
                    <h1>Our manifesto: simple makes it better</h1>
                    <!-- <h2>TEXTO MAKING OF.</h2> -->
                    <ul class="breadcrumb pull-right">
                         <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                         <li class="active">Making of</li>
                    </ul>
               </div>
               <div class="row-fluid service_teaser">
                    <div class="span4 teaser_photo"> <img src="images/vid.jpg" alt="Simple males it better" class="img-rounded"> </div>
                    <div class="span8">
                         <h3>Making of</h3>
                         <p>In the last years we have been re-learning the process of producing grapes and creating wines. New technologies can be very helpful, but they sometimes distances us from the things that matter, and this also happens in wine. So, based on our experience and all the lessons learned throughout our careers,  we re-designed our way of working.</p>
                         <p>For instance, after years of tasting different batches fermented in different kinds of materials, we came to a very simple conclusion. The material in which the wine is fermented will always express itself in the wine, and it is clear to us that the material has to be natural or alive. In other words, we prefer fermenting in clay/stones or wood. You hardly need to control temperature when you play with batches below 20 Hl and these materials help prevent massive drops or fast increases in temperatures.</p>
						<p>In the vineyard, after experiencing many different kinds of plantation, we discovered it always comes back to one principle: balance. If you overdo anything, the grapes will let you down. So: not too much exposure to light, just enough. Not too much stress, just a bit. Stones in the soils, yes, always! We believe in designing "independent" vineyards - vineyards where the vines need very little human intervention,and are less dependent on water irrigations, and fertilizations. The truth is that if you understand the vines and design their environment correctly, they hardly need people to live and prosper.</p>
						<p>As you might have guessed, all of our vineyards are organic or in the process of becoming organic. We follow the same ideas in our winemaking and in the wine'sfermentation and ageing processes . Our resulting wines are a frank and honest expression of their identity, the perfect way that they were meant to be.</p>
                         <p>&nbsp;</p>
                         <hr/>
                    </div>
               </div>
          </section>

     </div>
     <footer>
		 <?php include 'footer.php'; ?>
     </footer>
</div>
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.9.0.min.js"><\/script>')</script>
<script src="twitter-bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.48287.js"></script>
<script src="js/woothemes-FlexSlider-06b12f8/jquery.flexslider-min.js"></script>
<script src="js/prettyPhoto_3.1.5/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/restart_theme.js"></script>
</body>
</html>