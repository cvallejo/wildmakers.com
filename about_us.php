<?php
// Codigo a insertar al principio de la web
function getTiempo()
{
list($usec, $sec) = explode(" ",microtime());
return ((float)$usec + (float)$sec);
}
$TiempoInicial = getTiempo();
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<?php include("head.php"); ?>
</head>
<body class="collapsing_header">
<header>
<?php include("header.php"); ?>
</header>
<div class="full_page_photo" style="background-image: url(images/about_us1.jpg);">
     <div class="container">
<!--
          <section class="call_to_action">
               <h3 class="animated bounceInDown">we really <strong>love</strong> what we do</h3>
               <h4 class="animated bounceInUp">while <strong>always trying</strong> to get the job done!</h4>
          </section>
-->
     </div>
</div>
<div id="main">
     <div class="container">
          <section id="about_us">
               <div class="hgroup">
                    <h1>Our story
</h1>
                    <h2 style="color: #ccc;">After top-end university careers, and strong and long term experience in the wine industry, the partners of this initiative decided to stop what they were doing and focus on what’s important. Wine is a lifestyle, and we were leaving behind the intense pleasure that brought us to the wine world in the first place: the pleasure of sharing.</h2>
                    <ul class="breadcrumb pull-right">
                         <li><a href="index.php">Intro</a> <span class="divider">/</span></li>
                         <li class="active">Winemakers</li>
                    </ul>
               </div>
               <article>
                    <div class="row">
                         <div class="span8">
                         	<h4>Wine: it’s all about humility.</h4>
                              <p>We decided to share and extend our vision and knowledge with our friends. We believe wine is not only the historical living beverage of all times, but also the most social and natural product that man has ever created. It is emotion contained in a glass and the mirror of the soil and environment of the vines. Wine has the effect of bringing our senses down to earth: an experience which is  more necessary than ever in this century of connectivity and virtual life.</p>
                              <p>Based on our knowledge of organic viticulture and winemaking with natural resources, we create vibrating wines with a sense of identity and origin, designed to delight the taster. We are inspired by the biodynamic philosophy and practices, without making any one school of thought our sole way of thinking. We completely avoid adding any kind of substance into the wines during the process. This, combined with our sensitivity and experience, allows us to achieve the most interesting, delicious and unique wines.</p>
                         </div>
                    </div>
                  <p>&nbsp;</p>
<!--
                    <section class="call_to_action"> <img alt="responsive" src="images/star.png">
                         <h3>give your creative ideas a boost</h3>
                         <h4>mouse over our team photos to see a cool effect!</h4>
                    </section>
-->
                    <h2 class="section_header">Meet our Team.</h2>
                    <div class="row">
                    	 <div class="span3"></div>
                         <div class="span3 team_member">
                              <figure style="background-image: url(images/jose2.png)"><img src="images/jose1.png" alt="1a"></figure>
                              <h5>José Miguel Sotomayor</h5>
                              <small>Co-Founder & Winemaker</small>
                              <hr>
                              <div class="team_social">
                                <a href="//www.facebook.com/Wildmakers"><i class="icon icon-facebook"></i></a>
                                <a href="//cl.linkedin.com/pub/jose-miguel-sotomayor/9/954/533/es"><i class="icon icon-linkedin"></i></a>
                              </div>
                              <p class="short_bio">The passion for what I do and the pleasure of sharing it, is my contribution to the wine!</p>
                         </div>
                         <div class="span3 team_member">
                              <figure style="background-image: url(images/luca1.png)"><img src="images/luca_0.jpg" alt="2a"></figure>
                              <h5>Luca Hodgkinson</h5>
                              <small>Co-Founder & Winemaker</small>
                              <hr>
                              <div class="team_social">
                              	<a href="//www.facebook.com/Wildmakers"><i class="icon icon-facebook"></i></a>
                              	<a href="//twitter.com/luca_hodgkinson"><i class="icon icon-twitter"></i></a>
                              	<a href="//cl.linkedin.com/pub/luca-hodgkinson/16/b2a/939/es"><i class="icon icon-linkedin"></i></a>
                              </div>
<!--                               	<a href="#googleplus"><i class="icon icon-google-plus"></i></a> </div> -->
                              <p class="short_bio">Cooking, music & wine: the basic steps for a winemaker.</p>
                         </div>
                         <div class="span3"></div>
                    </div>
               </article>
          </section>
     </div>
     <footer>
		 <?php include("footer.php"); ?>
     </footer>
</div>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
