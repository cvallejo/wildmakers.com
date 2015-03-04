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
<body class="boxed">
<header>
<?php include("header.php"); ?>
</header>
<?php
	switch($_GET["p"]){
	default;
?>
<div id="main">
     <div class="container">
          <div class="hgroup">
               <h1>Our projects and wines.</h1>
               <!-- <h2>TEXT PORTFOLIO</h2> -->
               <ul class="breadcrumb pull-right">
                    <li><a href="./">Home</a> <span class="divider">/</span></li>
                    <li class="active">Our projects and wines</li>
               </ul>
          </div>
          <ul id="portfolio_filters">
               <li><a href="#" data-filter=".chile-cat_csa">Chile<br>Clos Santa Ana</a></li>
               <li><a href="#" data-filter=".chile-cat_soraya">Chile<br>Soraya wines</a></li>
               
               <li><a href="#" data-filter=".chile-cat_anun">Chile<br>Anun wines</a></li>
               <li><a href="#" data-filter=".spain-cat_mribot">Spain<br>Mas Ribot</a></li>
               <li><a href="#" data-filter=".spain-cat_mhabanero">Spain<br>Mas del Habanero</a></li>
          </ul>
          
          <!-- CLOS SANTA ANA -->
          <div id="portfolio_container" class="portfolio_strict row4">
               <div class="portfolio_item chile-cat_csa span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/clos_santa_ana/csa1.jpg)"> <a href="./our_wines.php?p=csa"> <i class="icon-2x icon-external-link"></i>
                         <p>Clos Santa Ana</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=csa">Clos Santa Ana</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_csa span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/clos_santa_ana/csa2.jpg)"> <a href="./our_wines.php?p=csa"> <i class="icon-2x icon-external-link"></i>
                         <p>Clos Santa Ana</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=csa">Clos Santa Ana</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_csa span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/clos_santa_ana/csa3.jpg)"> <a href="./our_wines.php?p=csa"> <i class="icon-2x icon-external-link"></i>
                         <p>Clos Santa Ana</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=csa">Clos Santa Ana</a></h3>
                         <p>chile</p>
                    </div>
               </div>               
               <div class="portfolio_item chile-cat_csa span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/clos_santa_ana/csa4.jpg)"> <a href="./our_wines.php?p=csa"> <i class="icon-2x icon-external-link"></i>
                         <p>Clos Santa Ana</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=csa">Clos Santa Ana</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_csa span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/clos_santa_ana/csa5.jpg)"> <a href="./our_wines.php?p=csa"> <i class="icon-2x icon-external-link"></i>
                         <p>Clos Santa Ana</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=csa">Clos Santa Ana</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_csa span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/clos_santa_ana/csa6.jpg)"> <a href="./our_wines.php?p=csa"> <i class="icon-2x icon-external-link"></i>
                         <p>Clos Santa Ana</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=csa">Clos Santa Ana</a></h3>
                         <p>chile</p>
                    </div>
               </div> 

			   
			   
			   <!-- SORAYA WINES -->
               <div class="portfolio_item chile-cat_soraya span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/soraya_wines/sw1.jpg)"> <a href="./our_wines.php?p=soraya"> <i class="icon-2x icon-external-link"></i>
                         <p>Soraya Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=soraya">Soraya Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_soraya span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/soraya_wines/sw2.jpg)"> <a href="./our_wines.php?p=soraya"> <i class="icon-2x icon-external-link"></i>
                         <p>Soraya Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=soraya">Soraya Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_soraya span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/soraya_wines/sw3.jpg)"> <a href="./our_wines.php?p=soraya"> <i class="icon-2x icon-external-link"></i>
                         <p>Soraya Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=soraya">Soraya Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_soraya span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/soraya_wines/sw4.jpg)"> <a href="./our_wines.php?p=soraya"> <i class="icon-2x icon-external-link"></i>
                         <p>Soraya Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=soraya">Soraya Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               
               

			   <!-- ANUN WINES -->
               <div class="portfolio_item chile-cat_anun span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/anun_wines/aw1.jpg)"> <a href="./our_wines.php?p=anun"> <i class="icon-2x icon-external-link"></i>
                         <p>Anun Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=anun">Anun Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_anun span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/anun_wines/aw2.jpg)"> <a href="./our_wines.php?p=anun"> <i class="icon-2x icon-external-link"></i>
                         <p>Anun Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=anun">Anun Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_anun span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/anun_wines/aw3.jpg)"> <a href="./our_wines.php?p=anun"> <i class="icon-2x icon-external-link"></i>
                         <p>Anun Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=anun">Anun Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_anun span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/anun_wines/aw4.jpg)"> <a href="./our_wines.php?p=anun"> <i class="icon-2x icon-external-link"></i>
                         <p>Anun Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=anun">Anun Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_anun span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/anun_wines/aw5.jpg)"> <a href="./our_wines.php?p=anun"> <i class="icon-2x icon-external-link"></i>
                         <p>Anun Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=anun">Anun Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>
               <div class="portfolio_item chile-cat_anun span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/anun_wines/aw6.jpg)"> <a href="./our_wines.php?p=anun"> <i class="icon-2x icon-external-link"></i>
                         <p>Anun Wines</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=anun">Anun Wines</a></h3>
                         <p>chile</p>
                    </div>
               </div>

			   <!-- MAS RIBOT -->
               <div class="portfolio_item spain-cat_mribot span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/mas_ribot/mr1.jpg)"> <a href="./our_wines.php?p=mr"> <i class="icon-2x icon-external-link"></i>
                         <p>Mas Ribot</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=mr">Mas Ribot</a></h3>
                         <p>spain</p>
                    </div>
               </div>
               <div class="portfolio_item spain-cat_mribot span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/mas_ribot/mr2.jpg)"> <a href="./our_wines.php?p=mr"> <i class="icon-2x icon-external-link"></i>
                         <p>Mas Ribot</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=mr">Mas Ribot</a></h3>
                         <p>spain</p>
                    </div>
               </div>
               <div class="portfolio_item spain-cat_mribot span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/mas_ribot/mr3.jpg)"> <a href="./our_wines.php?p=mr"> <i class="icon-2x icon-external-link"></i>
                         <p>Mas Ribot</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=mr">Mas Ribot</a></h3>
                         <p>spain</p>
                    </div>
               </div>
               <div class="portfolio_item spain-cat_mribot span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/mas_ribot/mr4.jpg)"> <a href="./our_wines.php?p=mr"> <i class="icon-2x icon-external-link"></i>
                         <p>Mas Ribot</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=mr">Mas Ribot</a></h3>
                         <p>spain</p>
                    </div>
               </div>
               <div class="portfolio_item spain-cat_mribot span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/mas_ribot/mr5.jpg)"> <a href="./our_wines.php?p=mr"> <i class="icon-2x icon-external-link"></i>
                         <p>Mas Ribot</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=mr">Mas Ribot</a></h3>
                         <p>spain</p>
                    </div>
               </div>
               <div class="portfolio_item spain-cat_mribot span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/mas_ribot/mr6.jpg)"> <a href="./our_wines.php?p=mr"> <i class="icon-2x icon-external-link"></i>
                         <p>Mas Ribot</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=mr">Mas Ribot</a></h3>
                         <p>spain</p>
                    </div>
               </div>
               
               
               
               
			   <!-- VIÑA MAS DEL HABANERO -->
               <div class="portfolio_item spain-cat_mhabanero span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/mas_del_habanero/mdh1.jpg)"> <a href="./our_wines.php?p=mdh"> <i class="icon-2x icon-external-link"></i>
                         <p>Mas del Habanero</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=mdh">Mas del Habanero</a></h3>
                         <p>spain</p>
                    </div>
               </div>
               <div class="portfolio_item spain-cat_mhabanero span3">
                    <div class="portfolio_photo" style="background-image:url(images/projects/mas_del_habanero/mdh2.jpg)"> <a href="./our_wines.php?p=mdh"> <i class="icon-2x icon-external-link"></i>
                         <p>Mas del Habanero</p>
                         </a> </div>
                    <div class="portfolio_description">
                         <h3><a href="./our_wines.php?p=mdh">Mas del Habanero</a></h3>
                         <p>spain</p>
                    </div>
               </div>

            </div>
     </div>
     <footer>
		 <?php include("footer.php"); ?>
     </footer>
</div>

<?php
	break;
	case "csa";
	
	include("inc/csa.php");
?>
<?php
	break;
	case "soraya";
	
	include("inc/sw.php");
?>
<?php
	break;
	case "anun";
	
	include("inc/aw.php");
?>
<?php
	break;
	case "mr";
	
	include("inc/mr.php");
?>
<?php
	break;
	case "mdh";
	
	include("inc/mdh.php");
?>

<?php
	}//cierro el switch
?>
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