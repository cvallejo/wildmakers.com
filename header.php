     <div class="container">
          <div class="navbar">
               <div class="navbar-inner"> <a class="brand" href="index.php"> 
               	<!-- <img src="images/wildmakers_blanco.png" width="315" height="72" alt="wildmakers.com"> -->
               	<img src="images/logo_new-01.png" width="315" height="72" alt="wildmakers.com">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                	<span class="nb_left pull-left"> 
                		<span class="icon-bar"></span> 
                		<span class="icon-bar"></span> 
                		<span class="icon-bar"></span>
                	</span>
                	<span class="nb_right pull-right">menu</span>
                </a>
                
                
                
                
                    <div class="nav-collapse collapse">
                         <ul class="nav pull-right">
                         <?php
                         $url = $_SERVER['REQUEST_URI'];
                         $url = explode('/', $url);
                         $url = $url[1];

                         //echo "URL: ".$url;

                         if ($url == 'index.php' or $url == '') {
                             $ia = 'class="active"';
                         } elseif ($url == 'about_us.php') {
                             $aa = 'class="active"';
                         } elseif ($url == 'what_we_do.php') {
                             $sa = 'class="active"';
                         } elseif ($url == 'our_wines.php') {
                             $pa = 'class="active"';
                         } elseif ($url == 'our_inspiration.php') {
                             $ba = 'class="active"';
                         } elseif ($url == 'contact.php') {
                             $ca = 'class="active"';
                         }

                         ?>
                              <li <?php echo $ia; ?>><a href="index.php">Intro</a></li>
                              <li <?php echo $aa; ?>><a href="about_us.php">Winemakers</a></li>
                              <li <?php echo $sa; ?>><a href="what_we_do.php">Making of</a></li>
                              <li <?php echo $pa; ?>><a href="our_wines.php">Wines</a></li>
                              <li <?php echo $ba; ?>><a href="our_inspiration.php">Inspiration</a></li>
                              <li <?php echo $ca; ?>><a href="contact.php">Drop us a line</a></li>
<!--
                              <li class="dropdown"> <a data-toggle="dropdown" class="dropdown-toggle" href="#">Pages<span class="caret"></span></a>
                                   <ul class="dropdown-menu">
                                        <li><a href="home_alternative.html">Home Alternative</a></li>
                                        <li><a href="page_alternative.html">Page Alternative</a></li>
                                        <li><a href="gallery.html">Portfolio Masonry</a></li>
                                        <li><a href="portfolio_item.html">Portfolio Item</a></li>
                                        <li><a href="portfolio_item_2.html">Portfolio Item II</a></li>
                                        <li><a href="single_post.html">Single Post</a></li>
                                        <li><a href="404.html">ERROR 404</a></li>
                                        <li><a href="register.html">Register or Sign in <span class="label label-important">new</span></a></li>
                                        <li><a href="elements.html">Bootstrap Elements</a></li>
                                   </ul>
                              </li>
-->
                         </ul>
                    </div>
               </div>
          </div>
          <!-- social
          <div id="social_media_wrapper"> <a href="#facebook"><i class="icon icon-facebook"></i></a> <a href="#twitter"><i class="icon icon-twitter"></i></a> <a href="#googleplus"><i class="icon icon-google-plus"></i></a> </div>
          <div id="sign"><a href="register.html"><i class="icon icon-user"></i>Register/Sign in</a></div>
          -->
     </div>
