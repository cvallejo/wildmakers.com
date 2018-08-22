<?php
date_default_timezone_set('America/Santiago');

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
<body class="boxed">
<header>
<?php include 'header.php'; ?>
</header>

<section id="slider_wrapper" class="full_page_photo">
     <div id="main_flexslider" class="flexslider">
          <ul class="slides">

               <li class="item"  style="background-image: url(images/portada1.png)">
<!--
               		<div class="container">
		           		<section class="call_to_action">
					   		<h3 class="animated bounceInDown">we really <strong>love</strong> what we do</h3>
					   		<h4 class="animated bounceInUp">while <strong>always trying</strong> to get the job done!</h4>
					   	</section>
               		</div>
-->
               </li>
               <li class="item"  style="background-image: url(images/portada2.png)"></li>
               <li class="item"  style="background-image: url(images/portada3.png)"></li>
               <li class="item"  style="background-image: url(images/portada4.png)"></li>
               <li class="item"  style="background-image: url(images/portada5.png)"></li>
               <li class="item"  style="background-image: url(images/portada6.png)"></li>

          </ul>
     </div>
</section>

<div id="main">
     <div class="container">
          <section class="call_to_action">
               <h3>Vibratings wines from expressive terroir</h3>
               <h4>The "Wild" in Wildmakers refers to the untamed, natural expression of life we want to deliver in the wines we make. As winemakers and viticulturists, our goal is to unleash the living soil's potential through the vines, and help nature create pure, fascinating, delicious and unique wines.</h4>

          </section>
          <section id="portfolio_teasers_wrapper">
               <h2 class="section_header">Some of our projects</h2>
               <div class="portfolio_strict row">
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url(images/projects/clos_santa_ana/csa1.jpg)"> <a href="./our_wines.php?p=csa"> <i class="icon-2x icon-external-link"></i>
                              <p>Clos Santa Ana</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="#">Clos Santa Ana</a></h3>
                              <p>chile</p>
                         </div>
                    </div>
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url(images/projects/soraya_wines/sw1.jpg)"> <a href="./our_wines.php?p=soraya"> <i class="icon-2x icon-external-link"></i>
                              <p>Soraya Wines</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="#">Soraya Wines</a></h3>
                              <p>chile</p>
                         </div>
                    </div>
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url(images/projects/anun_wines/aw6.jpg)"> <a href="./our_wines.php?p=anun"> <i class="icon-2x icon-external-link"></i>
                              <p>Anun Wines</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="#">Anun Wines</a></h3>
                              <p>chile</p>
                         </div>
                    </div>
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url(images/projects/mas_del_habanero/mdh1.jpg)"> <a href="./our_wines.php?p=mdh"> <i class="icon-2x icon-external-link"></i>
                              <p>Mas del Habanero</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="#">Mas del Habanero</a></h3>
                              <p>spain</p>
                         </div>
                    </div>
                    <div class="portfolio_item span3">
                         <div class="portfolio_photo" style="background-image:url(images/projects/mas_ribot/mr1.jpg)"> <a href="./our_wines.php?p=mr"> <i class="icon-2x icon-external-link"></i>
                              <p>Mas Ribot</p>
                              </a> </div>
                         <div class="portfolio_description">
                              <h3><a href="#">Mas Ribot</a></h3>
                              <p>spain</p>
                         </div>
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

<!-- Contact form wufoo -->
<script type="text/javascript" src="js/wufoo.js"></script>

<!-- Analytics tracking -->
<?php include_once 'analyticstracking.php'?>

</body>
</html>
