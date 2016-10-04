<!--
          <section id="twitter_feed_wrapper">
               <div class="container">
                    <div class="row">
                         <div class="span1 twitter_feed_icon"><a href="#twitter"><i class="icon icon-twitter-sign"></i></a></div>
                         <div class="span11">
                              <blockquote>
                                   <p>Wordle creates Typographic images from any txt or even your delicious bookmarks. Here is my untitled from Anonymous <a href="#">http://unhub.com/LIot</a></p>
                                   &mdash; LeonART (@leonartgr) <a href="https://twitter.com/leonartgr/">January 25, 2013</a></blockquote>
                         </div>
                    </div>
               </div>
          </section>
-->
          <section id="footer_teasers_wrapper">
               <div class="container">
                    <div class="row">
                         <div class="span4 footer_teaser">
                              <h3>Where can you find us</h3>
                              <p>You can always give us a call or send us an email, thanks!</p>
                              <p><i class="icon-map-marker"></i> <a href="https://goo.gl/maps/FX4uJ">Av. Providencia 337 of. 7. Santiago - CHILE</a></p>
                              <p><i class="icon-phone"></i> <a href="tel:+56991296653">(+56) 9912 966 53</a></p>
<!--                               <p><i class="icon-print"></i> (+30) 9854-7855</p> -->
                              <p><i class="icon-envelope"></i> <a href="mailto:support@wildmakers.com">support@wildmakers.com</a></p>
                         </div>
                         <div class="span4 footer_teaser">
                              <h3>Future events</h3>
                              
<!--
                              	<div id="fb-root"></div> 
<div class="fb-post" data-href="https://www.facebook.com/Probulkwine/posts/603236393057414" data-width="360"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Probulkwine/posts/603236393057414">Publicación</a> de <a href="https://www.facebook.com/Probulkwine">Probulkwine</a>.</div></div>
-->
                              <ul class="media-list">
                                   <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t5.jpg)"></a> <a href="#"  class="media-date">11<span>DEC</span></a>
                                        <h5 class="media-heading"><a href="#">Clos Santa Ana invites</a></h5>
                                        <p>Claude and Lydia Bourguignon to observe and test a soil profile from our recent 10.000 plants per hectare Cabernet Franc plantation...</p>
                                   </li>
                                   <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t4.jpg)"></a> <a href="#"  class="media-date">18<span>DEC</span></a>
                                        <h5 class="media-heading"><a href="http://issuu.com/wildmakers.com/docs/seminario_terroir_lydia_y_claude_bo/0" target="_blank">Seminario Terroir</a></h5>
                                        <p>Exclusive event where the best soil experts will expose their views on chilean terroir...</p>
                                   </li>
                              </ul>
                         </div>
                         <div class="span4 footer_teaser" id="latest-flickr-images">
                              <h3>Latest Pictures</h3>
                              <p>All photos &copy; by Wildmakers.com</p>
                              <ul>
                              </ul>
                         </div>
                    </div>
               </div>
<!--                facebook -->
<div id="fb-root"></div>
<!--
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=278070315670496&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->
               
          </section>
          <section id="copyright">
               <div class="container">
                    <div class="row">
                         <div class="span6"> Wildmakers.com &copy;
                         	<?php
                                 date_default_timezone_set('America/Santiago');
                                 echo date('Y');
                             ?> all rights reserved </div>
                         <div class="span6 text-right"> <?php
echo ' Time to load: ';
     $TiempoFinal = getTiempo();
     $Tiempo = $TiempoFinal - $TiempoInicial;
     $Tiempo = round($Tiempo, 4);
echo $Tiempo * 100;
echo ' ms.';

?></div>
                    </div>
               </div>
          </section>
