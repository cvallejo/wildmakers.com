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
<div class="full_page_photo">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3329.5264053544815!2d-70.6295574!3d-33.435589500000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c5844256480b%3A0x2477bc8e6731837d!2sProvidencia+337%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1409849544773" width="100%" height="400" frameborder="0" style="border:0"></iframe>
</div>
<div id="main">
     <div class="container">
          <section id="contact">
               <div class="hgroup">
                    <h1>Contact us</h1>
                    <h2>Please do not hesitate to send us your comments about our wines, our services or our webpage.</h2>
                    <ul class="breadcrumb pull-right">
                         <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                         <li class="active">Contact</li>
                    </ul>
               </div>
               <div class="row">
                    <div class="span4 office_address">
                         <address>
                         <strong>Wildmakers S.A.</strong><br>
                         Av. Providencia 337, Providencia<br>
                         Santiago, Chile.<br>
                         <abbr title="Phone">P:</abbr> <a href="tel:+56991296653">(56) 9912 966 53</a>
                         </address>
                         <address>
                         <strong>Email</strong><br>
                         <a href="mailto:support@wildmakers.com">support@wildmakers.com</a>
                         </address>
                    </div>
                    <div class="span8 contact_form">
   <!--
                      <form id="form3" name="form3" class="wufoo topLabel page" accept-charset="UTF-8" autocomplete="off" enctype="multipart/form-data" method="post" novalidate
      action="https://probulkwine.wufoo.com/forms/qj750710083gm1/#public">
                              <div class="row">
                                   <div class="span4">
										<label class="desc" id="title1" for="Field1">
										Name
											<span id="req_1" class="req">*</span>
										</label>
									
										<input id="Field1" name="Field1" type="text" class="span4 field text fn" value="" size="8" tabindex="1" required />
                                   </div>
                                   <div class="span4">
										<label class="desc" id="title3" for="Field3">
										Email
										<span id="req_3" class="req">*</span>
										</label>
										<div>
										<input id="Field3" name="Field3" type="email" spellcheck="false" class="span4 field text medium" value="" maxlength="255" tabindex="3"       required />
										</div>
                                   </div>
                                   <div class="span8">
										<label class="desc" id="title4" for="Field4">
										Subject
										</label>
										<div>
										<input id="Field4" name="Field4" type="text" class="span8 field text medium" value="" maxlength="255" tabindex="4" onkeyup=""       />
										</div>
                                   </div>
                                   <div class="span8">
										<label class="desc" id="title5" for="Field5">
										Message
										<span id="req_5" class="req">*</span>
										</label>
										
										<div>
										<textarea id="Field5"
										name="Field5"
										class="span8 field textarea medium"
										spellcheck="true"
										rows="10" cols="50"
										
										tabindex="5"
										onkeyup=""
										      required  ></textarea>
										
										</div>
                                   </div>
                                   <div class="span8"> 	                                   
	                                   	<div>
									    	<input id="saveForm" name="saveForm" class="btTxt submit btn btn-large btn-success" type="submit" value="Submit Message" />
										</div>
	                               </div>
	                               <ul>
		                               <li class="hide">
			                               <label for="comment">Do Not Fill This Out</label>
			                               <textarea name="comment" id="comment" rows="1" cols="1"></textarea>
			                               <input type="hidden" id="idstamp" name="idstamp" value="9SVvHAuV6GNptJWmwSDxHQC2aD/BR2K3tWZBwmPtLb4=" />
		                               </li>
	                               </ul>
                              </div>
                         </form>
-->
                         
                         
                         
<iframe height="577" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://probulkwine.wufoo.com/embed/qj750710083gm1/"></iframe>
                         
                         
                    </div>
               </div>
          </section>
          <!--END Contact-->
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