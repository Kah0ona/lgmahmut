<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>	
	<div class="full-bg-footer">
		<div class="Footer">
			<div class="u-gridContainer">
				<div class="u-gridRow">              
	                <div class="u-gridCol3">
	                	<h4>Informatie</h4>
	                	<a target="_Blank" href="/files/2014/11/Algemene-Voorwaarden.pdf">Algemene voorwaarden</a></br>
	                	<a class="btnForm" href="#">Handleiding webshop</a></br>
	                	<a href="/onze-diensten">Onze diensten</a>
	                </div>
	                <?php if(strpos($_SERVER['HTTP_HOST'], '.be') !== false) {  ?>
	                <div class="u-gridCol3">
	                	<h4>Contact</h4>
	                	<p>
	                 		Email: info@lokaalgevonden.be </br> 
							Tel: 078484170
	                	</p>
	                </div>
	                <?php } else { ?>
	                <div class="u-gridCol3">
	                	<h4>Contact</h4>
	                	<p>
	                		Christiaan Huijgensstraat </br> 
	                		4702 RZ, Roosendaal </br> 
	                		Email: info@lokaalgevonden.nl </br> 
							Tel: 0165781450
	                	</p>
	                </div>
	                <?php } ?>
	                <div class="u-gridCol3">
	                	<h4>Social media</h4>
	                	<a href="https://nl-nl.facebook.com/Lokaalgevonden" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/facebook.png"> </a>
	                	<a href="https://twitter.com/LokaalGevonden" target="_blank"> <img class="twitter-icon-footer" src="<?php echo get_stylesheet_directory_uri();?>/img/twitter.png">	</a>              
	                </div>
	                <div class="u-gridCol3">
	                	<h4>Sitemap</h4>
	                	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	                </div>   
	                <?php endif; ?>
				</div>
			</div>
		</div>

		<div class="Socket">
			<div class="u-gridContainer">
				<!-- Copyright info -->
				<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Website & SEO door 
						<a href="http://www.lokaalgevonden.nl" target="_blank">Lokaal<span class="socket-orange">Gevonden</span></a>
				</p>
			</div>
		</div>
	</div>


  <!-- Load jquery from google CDN if possible, with fallback to cdnjs -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"><\/script>')</script>

  <!-- build:remove:expanded -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
  <!-- /build -->
  <!-- build:remove:compressed -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/landingpage-select.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-collapse.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/nav-dropdown.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/prepend-svg.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/google-maps.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/effecten.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.bxslider.start.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/show-more.js"></script>
  <script src="http://localhost:35729/livereload.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/html-inspector/0.8.0/html-inspector.js"></script>
  <script>HTMLInspector.inspect();</script>
  <!-- /build -->

  <!--Online helpdesk formululier en handleiding-->
  <div style="display:none;">
    <div id="dialogContent">
         <?php echo do_shortcode('[gravityform id=2 name=ContactUs title=false description=false]'); ?>
    </div>
 </div>

   <div style="display:none;">
    <div id="handleiding">
    	<h4>Handleiding webshop</h4>
		<p>Voor ons webshop CMS systeem is een <a target="_Blank" href="https://docs.google.com/document/d/1574hEAq7mkEddbiE_YFPWdv6rvOGwO00DzNuHdy9cjc/edit#heading=h.dbj2q9tatoly">handleiding</a> beschikbaar, en een aantal instructievideo’s.</p>

		<p>Tip: bekijk de video’s in HD, door onderin het filmpje op het tandwiel icoon te klikken.</p>
    	</hr>
    	<p class="handleiding-titel">Producten aanmaken en categoriseren</p>
		<iframe width="520" height="375" src="//www.youtube.com/embed/LqzDYCXRzM0" frameborder="0" allowfullscreen></iframe>
		 <p class="handleiding-titel">Productopties instellen</p>
		<iframe width="520" height="315" src="//www.youtube.com/embed/V41-dfCZ4ik" frameborder="0" allowfullscreen></iframe>    
    </div>
 </div>

  <!-- Check if javascript for threaded comments should be loaded -->
  <?php include 'includes/comment-check.php'; ?>

	<!-- Wordpress footer -->
	<?php wp_footer(); ?>
	</body>
</html>
