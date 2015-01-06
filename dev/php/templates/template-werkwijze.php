<?php
/*
Template Name: Werkwijze
*/
?>

<?php get_header(); ?>
<div class="vertical-space"></div>
	<div class="werkwijze-header"> 
		<div class="u-gridContainer">
		    <div class="u-gridRow">                 
                
		    <div class="overlay-werkwijze">
			        <h1>Werkwijze</h1>
			        <h4>Voor het behalen van een optimaal resultaat en een soepele samenwerking</br> werken wij volgens een aantal stappen.</h4>
			    </div>          

		</div>
	</div>	
</div>



	<div class="u-gridContainer slider-werkwijze">

	    	          
		<div class="Slider">
			<div class="u-gridRow">    
				<div class="u-gridCol3">
					<p class="werkwijze-titel">1) Kennismaking</p>
		 		</div>
				<div class="u-gridCol6">
					<img class="werkwijze-img" src="<?php echo get_stylesheet_directory_uri();?>/img/kennismaken.png">
				</div>
				<div class="u-gridCol3">
					<p class="werkwijze-uitleg-kennismaking">In de eerste stap zullen wij kennis maken met u, en andersom. Uw wensen worden in kaart gebracht en zullen worden vertaald naar concrete projectdoelstellingen. </p>
				</div>
			</div>  


			<div class="u-gridRow">    
				<div class="u-gridCol3">
					<p class="werkwijze-titel">2) Ontwerpen</p>
		 		</div>
				<div class="u-gridCol6">
					<img class="werkwijze-img"  src="<?php echo get_stylesheet_directory_uri();?>/img/ontwerpen.png">
				</div>
				<div class="u-gridCol3">
					<p class="werkwijze-uitleg">Op basis van de kennismaking en de doelstellingen maakt onze webdesigner voor u een ontwerp. Op basis van uw wensen zullen één à twee ontwerpen aan u voorgelegd worden. Bij LokaalGevonden geloven we niet in een maximaal aantal correctie rondes, maar gaan we door totdat u tevreden bent.</p>
				</div>
			</div> 


			<div class="u-gridRow">    
				<div class="u-gridCol3">
					<p class="werkwijze-titel">3) Ontwikkelen</p>
		 		</div>
				<div class="u-gridCol6">
					<img class="werkwijze-img"  src="<?php echo get_stylesheet_directory_uri();?>/img/programmeren.png">
				</div>
				<div class="u-gridCol3">
					<p class="werkwijze-uitleg-ontwikkelen">Wanneer u akkoord heeft gegeven gaat ons productieteam aan de slag met de ontwikkeling. Het ontwerp zal worden gerealiseerd aan de hand van zelfgeschreven code en  zal geïnstalleerd worden op Wordpress.</p>
				</div>
			</div>   


			<div class="u-gridRow">    
				<div class="u-gridCol3">
					<p class="werkwijze-titel">4) Opleveren</p>
		 		</div>
				<div class="u-gridCol6">
					<img class="werkwijze-img"  src="<?php echo get_stylesheet_directory_uri();?>/img/opleveren.png">
				</div>
				<div class="u-gridCol3">
					<p class="werkwijze-uitleg-opleveren">Wanneer u tevreden bent met de website, zal deze  van het testdomein worden verhuisd naar het juiste domein. U ontvangt dan van ons een handleiding en inloggegevens zodat u zelf de content aan kunt passen.</p>
				</div>
			</div>   


			<div class="u-gridRow">    
				<div class="u-gridCol3">
					<p class="werkwijze-titel">5) Support</p>
		 		</div>
				<div class="u-gridCol6">
					<img class="werkwijze-img"  src="<?php echo get_stylesheet_directory_uri();?>/img/support.png">
				</div>
				<div class="u-gridCol3">
					<p class="werkwijze-uitleg-support">Bij LokaalGevonden bieden we garantie en support op de website, zolang deze door ons onderhouden en gehost wordt.</p>
				</div>
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
