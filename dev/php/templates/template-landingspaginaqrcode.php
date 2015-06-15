<?php
/*
Template Name: landingspaginaqr
*/
?>

<?php get_header(); ?>

<div class="vertical-space"></div>

    <div class="Slider-responsive">
        <div class="slider-content slide1">
            <div class="u-gridContainer container-relative">
                <div class="u-gridRow">                 
                    <h4>QR Code met logo</h4>
                    <p>Een QR code met logo zijn mooie extra's voor uw bedrijf</p>         
                </div>
            </div>
        </div>
    </div>  

    <div class="Slider2">

        <div class="slider-content slide1">
            <div class="u-gridContainer container-relative">
                <div class="u-gridRow">                 
                    <h4 class="slider-h4">QR Code met logo</h4>
                    <p class="slider-p">Een QR code met logo zijn <br> mooie extra's voor uw bedrijf</p>
                    <img class="slider-imac" style="top:33px; right: 150px; width: 34%;" src="<?php echo get_stylesheet_directory_uri();?>/img/handje.png">
                    <img style="width:30%; margin-left: 280px; margin-top: 40px;" src="<?php echo get_stylesheet_directory_uri();?>/img/bannerqrcode1.png">    
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
				<a class="button-meer-info-diensten" href="/onze-diensten#website">Meer informatie</a>			
			</div>

            <div class="u-gridCol4 box-diensten">
                <img class="dienst-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/icon-webshop.png">
                <h4>Webshop</h4>			
                <p>Wij ontwerpen graag voor u een webshop waarbij structuur, looppad en het aanbod perfect op elkaar aansluiten.</p>
				<a class="button-meer-info-diensten" href="/onze-diensten#webshop">Meer informatie</a>			
			</div>

            <div class="u-gridCol4 box-diensten">
                <img class="dienst-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/icon-seo.png">
                <h4>SEO</h4>			
                <p>Om bezoekers te kunnen genereren via zoekmachines dient uw website met de juiste zoekwoorden op pagina 1 te staan.</p>
				<a class="button-meer-info-diensten" href="/onze-diensten#seo">Meer informatie</a>			
			</div>

		</div>

        <div class="u-gridRow blog-area">   

            <div class="u-gridCol8">
                <div class="blog-head-titel">QR Code met logo</div>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                     <article class="Content Content--home" id="post-<?php the_ID(); ?>">
                        <div>
                            <?php the_content(); ?>
                            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                        </div>
                     </article>
                    <?php endwhile; endif; ?>
            </div>

            <div class="u-gridCol4">
                <div class="belmij-head-home"><img class="belmij-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/telefoon.png">Neem nu contact op</div>  
                
                <div class="belmij-area">
                    <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
                </div>
            </div>                                  
        </div>
	</div>

<?php get_footer(); ?>
