<?php
/*
Template Name: Ons werk
*/
?>

<?php get_header(); ?>
<div class="vertical-space"></div>
	<div class="ons-werk-header"> 
		<div class="u-gridContainer">
		    <div class="u-gridRow showcase-onswerk">                 
                

                <div class="macbook-relative-responsive">
	                <img class="macbook-showcase" src="<?php echo get_stylesheet_directory_uri();?>/img/macbook-responsive.png">		    	
		    	</div>  

                <div class="macbook-relative">
	                <img class="macbook-showcase" src="<?php echo get_stylesheet_directory_uri();?>/img/macbook.png">		    	
			    
			        <iframe 
				    	class="iframe-showcase" src="http://thecartoonfactory.nl/" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen>
				    </iframe>
		    	</div>            

		</div>
	</div>	
</div>

	<div class="u-gridContainer">

		 <div class="u-gridRow row-case-blok case-blok-top">    
		    
		    <div class="u-gridCol4 case-blok">
	                <a href="/dierenkliniek-winkelhof"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-winkelhof.png"></a>		    	
		    		<p class="case-titel">DIERENKLINIEK WINKELHOF</p>
		    </div>
		           
		    <div class="u-gridCol4 case-blok">
	                <a href="/cartoon-factory"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-cartoonfactory.png"></a>		    	
		    		<p class="case-titel">CARTOON FACTORY</p>
		    </div>


		    <div class="u-gridCol4 case-blok">
	                <a href="/cest-moi"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-cestmoi.png"></a>		    	
		    		<p class="case-titel">C'EST MOI</p>
		    </div>		    	            
		
		</div> 


		<div class="u-gridRow row-case-blok">    
		    
		    <div class="u-gridCol4 case-blok">
	                <a href="/selamat-makan"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-selamat.png"></a>		    	
		    		<p class="case-titel">SELAMAT MAKAN</p>
		    </div>
		           
		    <div class="u-gridCol4 case-blok">
	                <a href="/ton-kokke"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-kokke.png"></a>		    	
		    		<p class="case-titel">TON KOKKE SCHILDERBEDRIJF</p>
		    </div>


		    <div class="u-gridCol4 case-blok">
	                <a href="/sym-schoonmaak"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-sym.png"></a>		    	
		    		<p class="case-titel">SYM SCHOONMAAK</p>
		    </div>	    	            
		
		</div>  

		<div class="u-gridRow row-case-blok">    
		    
		    <div class="u-gridCol4 case-blok">
	                <a href="/wimbressers"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-wimbressers.png"></a>		    	
		    		<p class="case-titel">WIMBRESSERS TWEEWIELERS</p>
		    </div>
		           
		    <div class="u-gridCol4 case-blok">
	                <a href="/mao-administratie"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-mao.png"></a>		    	
		    		<p class="case-titel">MAO ADMINISTRATIE</p>
		    </div>


		    <div class="u-gridCol4 case-blok">
	                <a href="/omen-uitvaartzorg"><img class="dienst-thumb" src="<?php echo get_stylesheet_directory_uri();?>/img/showcase-omen.png"></a>		    	
		    		<p class="case-titel">OMEN UITVAARTZORG</p>
		    </div>	    	            
		
		</div>  

	</div>   

	<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--fullwidth" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>-->
<?php get_footer(); ?>
