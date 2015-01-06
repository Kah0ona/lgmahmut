<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>
	<div class="vertical-space"></div>
	<div>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="map_canvas"></div>
		<article class="Content Content--fullwidth u-gridContainer" id="post-<?php the_ID(); ?>">
			<div class="Content-entry">
				<div class="Content-text">

					<div class="u-gridRow">					

						<div class="adress-map u-gridCol8">
							<h2><?php the_title(); ?></h2>
							<p class="contact-page-p">Laat hier uw gegevens achter, wij nemen zo snel mogelijk contact met u op.</p>
							<?php the_content(); ?>
						
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>	
						</div>

						<div class="adress u-gridCol4">
							<div class="adress-info">
								<h2>Roosendaal</h2>
								<p>Christiaan Huijgensstraat 2</p>
								<p>4702 RZ Roosendaal</p>
								<p>Email: info@lokaalgevonden.nl</p>
								<p>Tel: 0165781450</p>
								</br>
								<p>KVK: 54185262</p>
								<p>BTW: NL154813278B02</p>
							</div>
							<div class="adress-info">
								<h2>Den Haag</h2>
								<p>Binckhorstlaan 36 -M423</p>
								<p>2516 BE Den Haag</p>
								<p>Email: info@lokaalgevonden.nl</p>
							</div>							
						</div>							

					</div> <!-- /gridRow -->

					</div>

				</div> <!-- content-text -->
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

