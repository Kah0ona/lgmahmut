<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>

<div class="vertical-space"></div>

    <div class="Slider-responsive">
        <div class="slider-content slide1">
            <div class="u-gridContainer container-relative">
                <div class="u-gridRow">                 
                    <h4>Wij zijn een full-service internetbureau</h4>
                    <p>We creëren doeltreffende websites, webshops en (mobile) apps voor bedrijven die online succesvol willen zijn middels een toppositie op internet.</p>
                    <a href="/onze-diensten">Meer informatie</a>          
                </div>
            </div>
        </div>
    </div>


    <div class="Slider2">
           
        <div class="slider-content slide1">
            <div class="u-gridContainer container-relative">
                <div class="u-gridRow">                 
                    <h4 class="slider-h4">Wij zijn een full-service internetbureau</h4>
                    <p class="slider-p">We creëren doeltreffende websites, webshops en (mobile) apps voor bedrijven <br> die online succesvol willen zijn middels een toppositie op internet.</p>
                    <img class="slider-imac" src="<?php echo get_stylesheet_directory_uri();?>/img/imac-sym.png">
                    <img class="slider-ipad" src="<?php echo get_stylesheet_directory_uri();?>/img/ipad-sym.png">
                    <img class="slider-iphone" src="<?php echo get_stylesheet_directory_uri();?>/img/iphone-sym.png">
                    <a class="slider-button" href="/onze-diensten">Meer informatie</a>          
                </div>
            </div>
        </div>


        <div class="slider-content slide2">
            <div class="u-gridContainer container-relative">
                <div class="u-gridRow">                 
                    <h4 class="slider-h4">The Cartoon Factory</h4>
                    <p class="slider-p">Voor The Cartoon Factory heeft LokaalGevonden een nieuwe website gemaakt. <br> We hebben gebruikt gemaakt van Wordpress als Content Management Systeem. <br> Daarnaast is de website geoptimaliseerd voor tablets en smartphones.</p>
                    <img class="slider-imac" src="<?php echo get_stylesheet_directory_uri();?>/img/imac-cf.png">
                    <img class="slider-ipad" src="<?php echo get_stylesheet_directory_uri();?>/img/ipad-cf.png">
                    <img class="slider-iphone" src="<?php echo get_stylesheet_directory_uri();?>/img/iphone-cf.png">
                    <a class="slider-button" href="/cartoon-factory">Meer informatie</a>          
                </div>
            </div>
        </div>        

    </div>


	<div class="u-gridContainer">
        <div class="u-gridRow">                 
            <div class="u-gridCol4 box-diensten">
                <img class="dienst-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/icon-website.png">
                <h4>Website</h4>
				<p>LokaalGevonden ontwerpt een unieke website met de nieuwe technieken dat voldoet aan uw wensen.</p>
				<a class="button-meer-info-diensten" href="/onze-diensten">Meer informatie</a>			
			</div>

            <div class="u-gridCol4 box-diensten">
                <img class="dienst-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/icon-webshop.png">
                <h4>Webshop</h4>			
                <p>Wij ontwerpen graag voor u een webshop waarbij structuur, looppad en het aanbod perfect op elkaar aansluiten.</p>
				<a class="button-meer-info-diensten" href="/onze-diensten">Meer informatie</a>			
			</div>

            <div class="u-gridCol4 box-diensten">
                <img class="dienst-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/icon-seo.png">
                <h4>SEO</h4>			
                <p>Om bezoekers te kunnen genereren via zoekmachines dient uw website met de juiste zoekwoorden op pagina 1 te staan.</p>
				<a class="button-meer-info-diensten" href="/onze-diensten">Meer informatie</a>			
			</div>

		</div>
       
        <div class="u-gridRow">   
        	<div class="u-gridCol2 blok-logo">
        		<a href="http://thecartoonfactory.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/cartoonfactory.png"></a>
        	</div>
        	<div class="u-gridCol2 blok-logo">
        		<a href="http://cestmoi-bruidsmode.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/cestmoi.png"></a>        		
        	</div>
        	<div class="u-gridCol2 blok-logo">
        		<a href="http://symschoonmaak.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/symschoonmaak.png"></a>        		
        	</div>
        	<div class="u-gridCol2 blok-logo">
        		<a href="http://wimbressers.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/wimbressers.png"></a>        		
        	</div>
        	<div class="u-gridCol2 blok-logo">
        		<a href="http://kluskoorts.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/kluskoorts.png"></a>        		
        	</div> 
        	<div class="u-gridCol2 blok-logo">
        		<a href="http://maoadministratie.nl/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/mao.png"></a>        		
        	</div>         	        	       	
		</div>

        
        <div class="u-gridRow blog-area">   

            <div class="u-gridCol8">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="Content Content--landingspagina" id="post-<?php the_ID(); ?>">
                        <h2 class="landingpagina-titel"><?php the_title(); ?></h2>
                        <div>
                            <?php the_content(); ?>
                            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                        </div>
                    </article>
                <?php endwhile; endif; ?>

            </div>

             <div class="u-gridCol4">
                <div class="twitter-head-titel"><img class="twitter-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/twitter-feed.png">Twitter</div>  
                    
                <a class="twitter-timeline" height="580"  data-chrome="nofooter" href="https://twitter.com/LokaalGevonden" data-widget-id="540889659833073664">Tweets door @LokaalGevonden</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                    
            </div>                                  
        </div>
	</div>

<?php get_footer(); ?>
