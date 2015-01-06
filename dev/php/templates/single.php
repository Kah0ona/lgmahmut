<?php get_header(); ?>



	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="vertical-space"></div>
	<div class="blog-header"> 
		<div class="u-gridContainer">
			 <div class="u-gridRow blog-header-inhoud">  
			    <h2>Blog</h2>               
	            <h4><?php the_title(); ?></h4>
			</div>
		</div>	
	</div>

	<div class="u-gridContainer">

		 <div class="u-gridRow blog-inhoud">    
			

			<div class="u-gridCol9">

				<div>
					<?php the_content(); ?>
				</div>
			

				<?php endwhile; else: ?>

					<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

				<?php endif; ?>	    	            
			</div>
		

			<div class="u-gridCol3">

				<h2 class="delen-titel">Delen</h2>
				<div class="sharethis-wrapper">
					<span class='st_facebook_large' displayText='Facebook'></span>
					<span class='st_twitter_large' displayText='Tweet'></span>
					<span class='st_linkedin_large' displayText='LinkedIn'></span>
					<span class='st_pinterest_large' displayText='Pinterest'></span>
					<span class='st_email_large' displayText='Email'></span>     
				</div>
			</div>  

		</div>  

	</div>   

<?php get_footer(); ?>
