<div id="main">
     <div class="container">
          <section id="portfolio_item">
               <div class="hgroup">
                    <ul class="breadcrumb pull-left">
                         <li><a href="./">Home</a> <span class="divider">/</span></li>
                         <li><a href="./our_wines.php">Our projects and wines</a> <span class="divider">/</span></li>
                         <li class="active">Soraya Wines</li>
                    </ul>
               </div>
               <div class="row">
                    <div class="span8">
                         <section id="portfolio_slider_wrapper">
                              <div class="flexslider" id="portfolio_slider">
                                   <ul class="slides">
	                                   <?php
                                           $carpeta = 'images/projects/soraya_wines/';
                                           $prefix_img = 'sw';
                                           $total_imagenes = count(glob($carpeta.'{*.jpg,*.gif,*.png}', GLOB_BRACE));
                                           for ($i = 1; $i < $total_imagenes + 1; $i++) {
                                               echo '<li class="item" data-thumb="'.$carpeta.$prefix_img.$i.'.jpg" style="background-image: url('.$carpeta.$prefix_img.$i.'.jpg)">';
                                               echo '<div class="container"> <a href="'.$carpeta.$prefix_img.$i.'.jpg" rel="prettyPhoto[gal]"></a>';
                                               echo '</div>';
                                               echo '</li>';
                                           }
                                       ?>
                                   </ul>
                              </div>
                              <div id="carousel" class="flexslider">
                                   <ul class="slides">
	                                   <?php
                                           for ($i = 1; $i < $total_imagenes + 1; $i++) {
                                               echo '<li> <img src="'.$carpeta.$prefix_img.$i.'.jpg" alt="" /> </li>';
                                           }
                                       ?>
                                   </ul>
                              </div>
                         </section>
                    </div>
                    <div class="span4">
                         <article class="portfolio_details">
                              <h3 class="well">Soraya Wines</h3>
                              <p class="well">En una aventura de búsqueda de excelencia, este proyecto planifica su calidad desde la plantación. Con suelos vivos, y no intervenidos, buscando la mejor estructura y la menor intervención en el viñedo, se apuesta a la expresión del origen. Petit Verdot y Carmenere son los pilares de este proyecto, pero ampliaremos a otras cepas en breve. Los vinos se elaboran con una perspectiva orientada a la expresión del terruño, desde la fermentación hasta la crianza.</p>
<!--
                              <div class="well">
                                   <p><strong>Nulla tristique:</strong> Donec aliquet</p>
                                   <p><strong>Habitasse platea:</strong> Dictumst</p>
                                   <p><strong>Ornare sit:</strong> Ninec risus</p>
                                   <p><strong>Faucibus volutpat:</strong> Bullamcorper</p>
                              </div>
-->
                              <!-- <a href="#" class="btn btn-danger btn-large center-block">Fermentum</a> --> </article>
                    </div>
               </div>
          </section>
<!--
          <ul class="pager">
               <li class="previous disabled"><a href="#">← Older</a></li>
               <li class="next"><a href="#">Newer →</a></li>
          </ul>
-->
     </div>
     <footer>
		 <?php include 'footer.php'; ?>
     </footer>
</div>
