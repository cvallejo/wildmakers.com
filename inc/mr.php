<div id="main">
     <div class="container">
          <section id="portfolio_item">
               <div class="hgroup">
                    <ul class="breadcrumb pull-left">
                         <li><a href="./">Home</a> <span class="divider">/</span></li>
                         <li><a href="./our_wines.php">Our projects and wines</a> <span class="divider">/</span></li>
                         <li class="active">Mas Ribot</li>
                    </ul>
               </div>
               <div class="row">
                    <div class="span8">
                         <section id="portfolio_slider_wrapper">
                              <div class="flexslider" id="portfolio_slider">
                                   <ul class="slides">
	                                   <?php
		                                   $carpeta = "images/projects/mas_ribot/";
		                                   $prefix_img ="mr";
		                                   $total_imagenes = count(glob($carpeta."{*.jpg,*.gif,*.png}",GLOB_BRACE));
		                                   for($i=1;$i<$total_imagenes+1;$i++){
			                                   echo "<li class=\"item\" data-thumb=\"".$carpeta.$prefix_img.$i.".jpg\" style=\"background-image: url(".$carpeta.$prefix_img.$i.".jpg)\">";
			                                   echo "<div class=\"container\"> <a href=\"".$carpeta.$prefix_img.$i.".jpg\" rel=\"prettyPhoto[gal]\"></a>";
			                                   echo "</div>";
			                                   echo "</li>";
		                                   }
		                               ?>
                                   </ul>
                              </div>
                              <div id="carousel" class="flexslider">
                                   <ul class="slides">
	                                   <?php
		                                   for($i=1;$i<$total_imagenes+1;$i++){
			                                 echo "<li> <img src=\"".$carpeta.$prefix_img.$i.".jpg\" alt=\"\" /> </li>";  
		                                   }
		                               ?>
                                   </ul>
                              </div>
                         </section>
                    </div>
                    <div class="span4">
                         <article class="portfolio_details">
                              <h3 class="well">Mas Ribot</h3>
                              <p class="well">Este proyecto orgánico es una apuesta por la búsqueda del mejor equilibrio forestal y agrícola. Dispone de varias Hectáreas de bosque Mediterráneo, de Olivos y almendros, de una huerta y de viñedos. Basados en la búsqueda del punto de encuentro entre producción y mantención, Mas Ribot se está convirtiendo poco a poco en un modelo de finca agrícola sustentable. Los variados suelos que mezclan pizarras, granitos y arcillas aportan las bases para la ideal expresión de un vino Mediterráneo. Las cepas Syrah, Cariñena y Garnacha forman parte del proyecto que en pocos años lanzará sus primeros vinos.</p>
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
		 <?php include("footer.php"); ?>
     </footer>
</div>
