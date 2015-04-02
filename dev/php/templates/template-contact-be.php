<?php
/*
Template Name: Contactpagebe
*/
?>

<?php get_header(); ?>
	<div class="vertical-space"></div>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
				<div class="Content-entry">
					<div class="Content-text">
						<div class="u-gridRow">
							<div class="u-gridCol10 welkomtekst">
							</div>
						</div>
						</div>
						<div class="u-gridRow">					

							<div class="adress-map u-gridCol8">
								<h2><?php the_title(); ?></h2>
								<p class="contact-page-p">Laat hier uw gegevens achter, wij nemen zo snel mogelijk contact met u op.</p>
								<?php the_content(); ?>
							
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>	
							</div>


						</div> <!-- /gridRow -->

						</div>

					</div> <!-- content-text -->
				</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

