<?php
/*
Template Name: Landingspagina
*/
?>

<?php get_header(); ?>

<div class="vertical-space"></div>


    <div class="u-gridContainer">
    
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

            <!-- <div class="u-gridCol4">
                <div class="twitter-head-titel"><img class="twitter-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/twitter-feed.png">Twitter</div>  
                    
                <a class="twitter-timeline" height="268" data-chrome="nofooter" href="https://twitter.com/LokaalGevonden" data-widget-id="540889659833073664">Tweets door @LokaalGevonden</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                                    
            </div>  -->

            <div class="u-gridCol4">
                <div class="belmij-head-home"><img class="belmij-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/telefoon.png">Neem nu contact op</div>  
                
                <div class="belmij-area">
                    <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
                </div>
            </div>                                  
        </div>
    </div>

<?php get_footer(); ?>
