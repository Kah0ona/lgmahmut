<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

<div class="vertical-space"></div>

    <div class="u-gridContainer">
        <div class="u-gridRow blog-area">   

            <div class="u-gridCol8">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="Content Content--content" id="post-<?php the_ID(); ?>">
                        <h2 class="landingpagina-titel"><?php the_title(); ?></h2>
                        <div>
                            <?php the_content(); ?>
                            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                        </div>
                    </article>
                <?php endwhile; endif; ?>

            </div>

             <div class="u-gridCol4">
                <div class="belmij-head-titel"><img class="belmij-icon" src="<?php echo get_stylesheet_directory_uri();?>/img/telefoon.png">Neem nu contact op</div>  
                
                <div class="belmij-area">
                    <?php echo do_shortcode('[gravityform id="3" title="false"]'); ?>
                </div>
            </div>                                  
        </div>
    </div>

<?php get_footer(); ?>
