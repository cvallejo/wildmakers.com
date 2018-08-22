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
<body class="boxed">
<header>
<?php include 'header.php'; ?>
</header>

<div id="main">
     <div class="container">
          <section id="blog">
               <div class="hgroup">
                    <h1>Our Inspiration</h1>
                    <!-- <h2>Nullam eget tortor purus, id molestie sapien. In hac habitasse platea dictumst. Donec aliquet tellus enim, a tincidunt nulla.</h2> -->
                    <ul class="breadcrumb pull-right">
                         <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                         <li class="active">Blog</li>
                    </ul>
               </div>
               <div class="row">
                    <div id="leftcol" class="span12">
                         <article class="post">
                              <div class="post_header">
                                   <h3 class="post_title"><a href="single_post.html">Terroir: Claude & Lydia Bourguignon</a></h3>
                                   <div class="post_sub">
	                                   <!-- <i class="icon-time"></i> January 10th, 2011 --> 
<!--                                    		<a href="single_post.html#post_comments"><i class="icon-comments-alt"></i> 6 comments</a> -->
								   </div>
                              </div>
                              <div class="post_content">
                              <br>
                              	<p>They are the most complete and multi-disciplinary soil scientists we have ever met in the wine world of consultants. Their vision has catalyzed our empiric observations and tastings. Meeting them in Burgundy a few years ago and participating in their 2 day course was an incredibly revealing experience.</p>
                              	<p>Since then, we have developed a strong collaboration relationship and we are aiming at similar objectives. Our shared vision of developing biologically active soils is amongst our most important objectives in the vineyards we manage. We know that having a living soil means creating vibrating wines, wines with a sense of identity.</p>
                              	<p>Claude and Lydia are coming to Chile in december 2014, and we are organizing several different assessment visits for our clients and other interested vineyards. We are also organizing a conference in Santiago to which they have been invited askeynote speakers.</p>
                                   <figure><a href="single_post.html">
                                        <iframe width="100%" height="400" src="//www.youtube.com/embed/qVsfMzXTxPk" frameborder="0" allowfullscreen></iframe>
                                        </a></figure>
                                   <blockquote>
                                   	<p>Claude & Lydia Bourguignon, perhaps the world's most distinguished experts on vineyards soils, give us their definition of terroir. </p></blockquote>
                                   <!-- <a href="single_post.html" class="btn btn-primary">Read More</a>  --></div>
                         </article>
                         
                         
                         
                         <article class="post">
                              <div class="post_header">
                                   <h3 class="post_title"><a href="single_post.html">René Piamonte</a></h3>
                                   <div class="post_sub">
<!-- 	                                   <i class="icon-time"></i> March 1, 2013 <a href="single_post.html#post_comments"><i class="icon-comments-alt"></i> 6 comments</a>  -->
	                               </div>
                              </div>
                              <div class="post_content">
                                   <figure>
								   		<a href="images/rene_piamonte.png" rel="prettyPhoto[gal]"><img alt="René Piamonte" src="images/rene_piamonte.png"></a>
								   </figure>
                                   <p>René is the most respected biodynamic consultant today in South America. We have participated in many of his consulting activities in Chile and we collaborate in different projects. Al Wildmakers,we are not seeking biodynamic cultivation as an objective in itself, but as a tool to unleash terroir expression. Biodynamic practices have opened our mind to the most incredible experiences involving the observation of the impact of the moon and other cosmic elements on the vine growth and grape quality. We take this influence very seriously and most of our important viticultural decisions are inspired by biodynamic practices. We constantly observe how our vines evolve according to the calendar. This has proven to be a fascinating observation that now continues in the cellar.</p>
                                   <!-- <a href="single_post.html" class="btn btn-primary">Read More</a>  -->
                              </div>
                         </article>                         
                         
                         
                         
                         <article class="post">
                              <div class="post_header">
                                   <h3 class="post_title"><a href="single_post.html">Masanobu Fukuoka</a></h3>
                                   <div class="post_sub">
	                                   <!-- <i class="icon-time"></i> January 12, 2013 <i class="icon-comments-alt"></i> 0 comments  -->
	                               </div>
                              </div>
                              <div class="post_content">
                                   <figure><a href="images/MASANOBUFUKUOKA2.jpg" rel="prettyPhoto[gal1]"><img alt="Masanobu Fukuoka" src="images/MASANOBUFUKUOKA2.jpg"></a></figure>
                                   <p>His famous books are, in a way, the foundations of our thoughts and he has inspired many scientists and agriculturalists around the world. In his writings, we have found the observation, patience and reflection that a wine project requires to reach its highest potential, and we apply these simple principles to our vineyards and wines. His journey of trial and error has made his research very empiricand has brought him to extremely high levels of accuracy in his agricultural statements.</p>
                                   <!-- <a href="#" class="btn btn-primary">Read More</a>  --></div>
                         </article>
<!--
                         <div class="pagination pagination-centered">
                              <ul>
                                   <li class="disabled"><a href="#">«</a></li>
                                   <li class="active"><a href="#">1</a></li>
                                   <li><a href="#">2</a></li>
                                   <li><a href="#">3</a></li>
                                   <li><a href="#">4</a></li>
                                   <li><a href="#">5</a></li>
                                   <li><a href="#">»</a></li>
                              </ul>
                         </div>
-->
                    </div>
<!--
                    <div id="sidebar" class="span4">
                         <aside class="widget">
                              <h4>Blog Categories</h4>
                              <ul class="nav nav-tabs nav-stacked">
                                   <li class="active"><a href="#">All</a></li>
                                   <li><a href="#">News</a></li>
                                   <li><a href="#">Press</a></li>
                              </ul>
                         </aside>
                         <aside class="widget">
                              <h4>Text Widget</h4>
                              <p>Fugiat dapibus, tellus ac cursus commodo, mauesris condime ntum nibh, ut fermentum mas justo sitters amet risus. Cras mattis cosi sectetut amet fermens etrsaters tum aecenas faucib sadips amets.</p>
                         </aside>
                         <aside class="widget ads clearfix">
                              <h4>Ads</h4>
                              <a href="#"><img src="http://placehold.it/110" alt=""></a> <a href="#"><img src="http://placehold.it/110" alt=""></a> <a href="#"><img src="http://placehold.it/110" alt=""></a> <a href="#"><img src="http://placehold.it/110" alt=""></a> </aside>
                         <aside class="widget">
                              <h4>Tabs</h4>
                              <ul class="nav nav-tabs" id="myTab">
                                   <li class="active"><a data-toggle="tab" href="#recent">Recent</a></li>
                                   <li class=""><a data-toggle="tab" href="#tags">Tags</a></li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                   <div id="recent" class="tab-pane fade active in">
                                        <ul class="media-list">
                                             <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t5.jpg)"></a> <a href="#"  class="media-date">19<span>FEB</span></a>
                                                  <h5 class="media-heading"><a href="#">Media heading, this is a title of a news...</a></h5>
                                                  <p>Fugiat dapibus, tellus ac cursus commodo, ut fermentum...</p>
                                             </li>
                                             <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t4.jpg)"></a> <a href="#"  class="media-date">18<span>FEB</span></a>
                                                  <h5 class="media-heading"><a href="#">Media heading, of a news item.</a></h5>
                                                  <p>Fugiat dapibus, tellus ac cursus commodo, condime ntum nibh, ut fermentum...</p>
                                             </li>
                                             <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t5.jpg)"></a> <a href="#"  class="media-date">17<span>FEB</span></a>
                                                  <h5 class="media-heading"><a href="#">Media heading, this is a title of a news...</a></h5>
                                                  <p>Fugiat dapibus, tellus ac cursus commodo, ut fermentum...</p>
                                             </li>
                                             <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t4.jpg)"></a> <a href="#"  class="media-date">16<span>FEB</span></a>
                                                  <h5 class="media-heading"><a href="#">Media heading, of a news item.</a></h5>
                                                  <p>Fugiat dapibus, tellus ac cursus commodo, condime ntum nibh, ut fermentum...</p>
                                             </li>
                                        </ul>
                                   </div>
                                   <div id="tags" class="tab-pane fade"> <a class="label">Default</a> <a class="label label-success">Success</a> <a class="label label-warning">Warning</a> <a class="label label-important">Important</a> <a class="label label-info">Info</a> <a class="label label-inverse">Inverse</a> <a class="label">Default</a> <a class="label label-success">Success</a> <a class="label label-important">Important</a> <a class="label label-info">Info</a> <a class="label label-inverse">Inverse</a> <a class="label">Default</a> <a class="label label-success">Success</a> <a class="label label-success">Success</a> <a class="label label-warning">Warning</a> <a class="label label-important">Important</a> <a class="label label-warning">Warning</a> <a class="label label-warning">Warning</a> <a class="label label-important">Important</a> <a class="label label-info">Info</a> <a class="label label-inverse">Inverse</a> </div>
                              </div>
                         </aside>
                    </div>
--> <!-- SIDEBAR -->
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