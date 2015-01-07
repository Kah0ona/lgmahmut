<?php
/*
Template Name: Over ons
*/
?>

<?php get_header(); ?>
<div class="vertical-space"></div>

	<div class="video-area-bg">
		<div class="video-area-responsive">
			<div class="u-gridContainer">
		    	<div class="u-gridRow">  
				    <div class="overlay">
				        <h1>WE MAKEN MOOIE DINGEN.</h1>
				        <h4>TOT IN DE PUNTJES VERZORGD: EEN WEBSITE OP A-LOCATIE.</h4>
				    </div>
				</div>
			</div>
		</div>
	</div>

	<div class="video-area">
	    <video id="video" autoplay loop>
			<source src="<?php echo get_stylesheet_directory_uri();?>/img/over_ons.ogv" type="video/ogg">
			<source src="<?php echo get_stylesheet_directory_uri();?>/img/over_ons.mp4" type="video/mp4">
		</video>
		<div class="u-gridContainer">
	    	<div class="u-gridRow">  
			    <div class="overlay">
			        <h1>WE MAKEN MOOIE DINGEN.</h1>
			        <h4>TOT IN DE PUNTJES VERZORGD: EEN WEBSITE OP A-LOCATIE.</h4>
			    </div>
			</div>
		</div>
	</div>




	<div class="full-bg-diensten">
		<div class="u-gridContainer">
	    	<div class="u-gridRow website-area" id="website">                 
	            <div class="u-gridCol6">
	                 <img class="dienst-img" src="<?php echo get_stylesheet_directory_uri();?>/img/dienst-website.png">
	            </div>
	            <div class="u-gridCol6">
	           	     <h2>Website</h2>

					 <b>Geschikt voor desktop, tablet en mobiel</b></br>
	           	     <p>
						Internet wordt steeds mobieler en de eindgebruiker van uw website blijft natuurlijk niet achter.
						Bij LokaalGevonden zijn we sterk overtuigd dat responsive webdesign de oplossing biedt om alle gebruikers optimaal te bedienen.
						Alle websites en webshops worden daarom ontwikkeld in responsive design en ontwerpen wij voor u een mobiele app: zo is uw website geoptimaliseerd voor elke gebruiker. 
					</p>
	           		
	           		<a href="/webdevelopment-webdesign">Lees meer</a>           	
	            </div>            
	    	</div>
		</div>
	</div>
		
	<div class="u-gridContainer">
    	<div class="u-gridRow website-area" id="webshop">                 
            <div class="u-gridCol6">
           	     <h2>Webshop</h2>
				
           	     <p>
					Online uw verkoop stimuleren? Wij ontwerpen voor u een webshop waarbij structuur, 
					looppad en het aanbod perfect op elkaar aansluiten. Bovendien zijn onze webshops  
					responsive en zoekmachinevriendelijk opgebouwd: dit biedt u een goede positie in Google, 
					hogere conversies en een voorsprong op uw concurrenten. 
				</p> 

				<a href="/webshop">Lees meer</a>           	
            </div>
            <div class="u-gridCol6">
	                <img class="dienst-img-rechts" src="<?php echo get_stylesheet_directory_uri();?>/img/dienst-webshop.png">
            </div>            
    	</div> 
    </div>   	

	<div class="full-bg-diensten">
		<div class="u-gridContainer">
    		<div class="u-gridRow website-area" id="seo">                 
	            <div class="u-gridCol6">
	                 <img class="dienst-img" src="<?php echo get_stylesheet_directory_uri();?>/img/dienst-seo.png">
	            </div>
	            <div class="u-gridCol6">
	           	     <h2>SEO</h2>
					
	           	     <p>
						Om bezoekers te kunnen genereren via zoekmachines als Google dient uw website met de
						 juiste zoekwoorden op een hoge positie te staan. Met behulp van onze SEO expertise 
						 zorgen wij ervoor dat uw vindbaarheid zal vergroten. Dit levert u de juiste en meer 
						 relevante bezoekers op, wat tot conversie-verhoging zal leiden.  
					</p>

					<a href="/zoekmachine-optimalisatie">Lees meer</a>           	
	            </div>            
	    	</div>
	    </div>
	</div>

	<div class="u-gridContainer">
    	<div class="u-gridRow website-area">                 
            <div class="u-gridCol6">
           	     <h2>Logo</h2>
				
           	     <p>
					Een logo moet passend, tijdloos en herkenbaar zijn. 
					Onze grafische vormgevers ontwerpen graag voor u een logo dat voldoet aan uw wensen en past bij uw bedrijf.
					 In samenwerking met u kunnen onze grafische vormgevers ook uw huisstijl en alle uitingen 
					 (flyers, briefpapier, brochures) verzorgen. 
				</p> 

				<a href="/logo">Lees meer</a>           	
           	
            </div>
            <div class="u-gridCol6">
	                <img class="dienst-img-rechts" src="<?php echo get_stylesheet_directory_uri();?>/img/dienst-logo.png">
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
