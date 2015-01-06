<?php
/*
Template Name: Showcase
*/
?>

<?php
	$image = get_field('afbeelding_showcase');
?>

<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="vertical-space"></div>

		<div class="show-case-bg">
			<div class="u-gridContainer"> 
				<img class="showcase-image" src="<?php echo $image['url']; ?>" /></a>
			</div>
		</div>

		<div class="u-gridContainer"> 
			<div class="u-gridRow">  
               
			    <div class="u-gridCol8">
			    	<h2><?php the_title(); ?></h2>
			    	<p><?php the_field('showcase_tekst'); ?></p>
			    </div>
			     <div class="u-gridCol4">
			     	<h2>Informatie</h2>
			     	<p><b>Opdrachtgever:</b></p> <p><?php the_field('opdrachtgever'); ?></p>
			     	<p><b>Link:</b></p> <a target="_Blank" href="<?php the_field('link'); ?>"><?php the_field('link'); ?></a>
			    </div>
			</div>
		</div>   

	<?php endwhile; endif; ?>
<?php get_footer(); ?>
