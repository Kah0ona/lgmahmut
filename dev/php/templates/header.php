<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/app-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ur-d6d06864-85c9-8d43-8810-6cd42e44821b", doNotHash: true, doNotCopy: true, hashAddressBar: false});</script>
        
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>    
    
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >

<div class="full-bg-nav">
	<div class="u-gridContainer">
        <div class="u-gridRow">                 
            <div class="logo u-gridCol2">
                <a href="/home"><img class="logo-header" src="<?php echo get_stylesheet_directory_uri();?>/img/logo.png"></a>
            </div>

           <div class="Bot-Nav u-gridCol10 navigatie">
        		<div class="Nav-toggle u-cf">
        			<a class="Navigation-menuToggle" id="js-navCollapse">
        				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
        					<use xlink:href="#icon-menu2"></use>
        				</svg>
        			</a>
        		</div>


        		<?php include 'includes/navigation.php'; ?>
        		
        		<!--<div class="Mob-contact-ico">
        			<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0165781450">
        				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
        					<use xlink:href="#icon-phone"></use>
        				</svg>
        			</a>
        		
                        <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@lokaalgevonden.nl">
        				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
        					<use xlink:href="#icon-envelope"></use>
        				</svg>
        			</a>
        		</div>--><!-- header-contact -->
        	</div>
    </div>
  </div>
</div>
