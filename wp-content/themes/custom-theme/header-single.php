<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage custom-theme
 * @since custom-theme 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8"/>
	<title><?php bloginfo('title');?></title>

    <link href="<?php bloginfo('template_directory'); ?>/favicon.png" rel="shortcut icon">
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/normalize.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/bootstrap.min.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/768.css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/mobile.css' media='all' />
    <link rel='stylesheet' id='main style-css'  href='<?php bloginfo('template_directory'); ?>/includes/css/page-style.css' media='all' />

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.mousewheel.js'></script>
	<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/includes/js/jquery.requestAnimationFrame.js'></script>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<?php wp_head(); ?>
	<style>
		.bg-1 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/ribbon-red-bg.jpg") no-repeat;  
			background-position: center 50px; 
		}
		.bg-block-content-1 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/c1.jpg") no-repeat;  
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-2 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/c2.jpg") no-repeat;  
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-3 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/c3.jpg") no-repeat;  
			background-size: cover;
			background-position: center center;
		}
		.bg-block-content-4 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/c4.jpg") no-repeat;  
			background-size: cover;
			background-position: center center;
		}
		.face-1 { 
			background:url("<?php bloginfo('template_directory'); ?>/images/home/face-bg.png") no-repeat;  
		    background-position: -0.8vw -0.2vw;
		    background-size: auto;
		}
	</style>
</head>
<body class="page-template page-template-onecolumn-page page-template-onecolumn-page-php page page-id-15 desktop chrome">
	<?php 
		$v = 0;
		$menuargs = array(
			"theme_location" => "primary",
			"menu_class" => "s-menu",
			"menu_id" => "MAIN-MENU",
		);
		$items_mobile = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs); 
	?> 
	<nav class="mobiletop">   
		<ul id="menu-footer-menu" class="menu">
			<?php foreach( $items_mobile as $item ){ ?>
				<li class="menu-item "><a class="text-caps" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
			<?php } ?>
		</ul>	
	</nav>
	<!-- container -->
	<div class="page-container">
		<section class="header-logo">
			<div style="background-color: #fff2db;height: 100px;">
				<div class="center-logo" style="z-index: 1;">
					<a href="<?php echo get_permalink( get_page_by_path( 'home' ) ); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/home/ribbon.png" alt="Menu"></a> 
				</div>
				<div class="col-md-6 left center" style="padding-top: 35px;"><span class="header-caption">Contemporary & Traditional Designs Engineered for Stability</span></div>
				<div class="col-md-6 left center" style="padding-top: 35px;"><span class="header-caption">Commercial & Residential Wine Cellar Specialist Builders</span></div>
			</div>
		</section>

		<section class="header-logo-mobile" style="background-color: #fff5e3;">
			<div class="top-nav-holder-768" style="background-color: #fff5e3;">
				<!-- call-us-container -->
				<div style="position:absolute;left: 20px;">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/ribbon.png" alt="Menu"> 
				</div>
				<div class="col-md-8 menu-left-480 left" style="">
				</div>
				<div class="col-md-4 menu-icon menu-right-480 left" style="padding-right:0px;text-align: right;">
				   <a href="#" id="pull"><img src="<?php bloginfo('template_directory'); ?>/images/menu.jpg" alt="Menu"> </a>
				</div>
			</div>
		</section>
		<?php 
			$v = 0;
			$menuargs = array(
				"theme_location" => "primary",
				"menu_class" => "s-menu",
				"menu_id" => "MAIN-MENU",
			);
			$items = wp_get_nav_menu_items( 'MAIN-MENU', $menuargs); 
		?> 
		<section class="menu-desktop">
			<div class="shadow-top" style="background-color: #ffebc8;height: 50px;">
				<ul class="nav-desktop">
					<?php foreach( $items as $item ){ ?>
						<li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</section>

		<section class="contact-1-mobile" style="background-color: #fff5e3;">
			<div style="background-color: #ffebc8;display: flex;padding-top: 15px;padding-bottom: 15px;width: 100%;">
				<div class="col-md-12 left">
					<div class="contact-container">
						<div class="left ft-ct" style="width:10%;">
							<img style="position: relative;top: 9px;left:15px;width:7vw;padding:0px;" src="<?php bloginfo('template_directory'); ?>/images/home/phone.png" alt="Menu"> 
						</div>
						<div class="contact-mobile left ft-ct" style="padding:0px;position:relative;left:20px;width:80%;">
							<span>Call us to receive your custom quote <a href="tel:2818097283">(281)-809-7283</a> <br/> or complete our <a class="contact-link" href="#">request a quote form</a></span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="banner-mobile">
			<div style="background-color: #fff2db;display: flex;">
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b1.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b2.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b3.jpg" alt="Menu"> 
				</div>
				<div class="banner-block">
					<img src="<?php bloginfo('template_directory'); ?>/images/home/b4.jpg" alt="Menu"> 
				</div>
			</div>
		</section>

  <section class="content">
	<div style="width: 100%;margin: 0px;padding: 0px;">
	  <div class="left-side" style="padding: 0px;">
	    <section class="ribbon">
		    <div class="col-md-12 left" style="padding: 0px;margin: 0px;">
		    	<div class="bg-1" style="background-color: #be0a2f;margin: 0px;padding: 0px;padding-top: 20px;">
		    		<span class="footnote center">Wine Cellar Design</span>
		    		<br/>
		    		<span class="footnote-2">3D Drawing <br/> Request</span>
		    		<br/>
		    		<span class="footnote center">We will create a unique <br/>design just for you!</span>
		    		<br/>
		    		<a class="button-blue" href="#">Click Here</a>
		    		<br/>
		    	</div>
		    	<img class="img-ribbon-bottom" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon-bottom.png">
		    	<img class="img-ribbon-top" src="<?php bloginfo('template_directory'); ?>/images/home/ribbon-top.png">
		    	<div style="height: 16.1vw;background-color: #be0a2f;margin: 0px;padding: 0px;padding-top: 10px;position: relative;bottom: 1.5vw;">
		    			<span class="footnote-2">Fast Quote <span style="font-size: 1vw;">or</span></span>
		    			<span class="footnote-2">Just a Question?</span>
		    			<br class="clear" />
		    			<div style="width: 100%;" style="background-color: #be0a2f;position: relative;">
		    				<div class="col-md-7 left cd-1 tw-container" style="z-index: 3;background-color: #be0a2f;">
		    					<span class="footnote text-left" style="padding-left: 10px;">Have one of <br/>our wine cellar<br/>designers<br/> contact you</span>
		    					<br class="clear" />
		    					<a class="button-blue" href="#">Click Here</a>
		    				</div>
		    				<div class="col-md-5 cd-2 left face-1 tw-container" style="z-index: 2;background-color: #be0a2f;position: relative;">
		    				</div>
		    			</div>
		    	</div>
		    </div>
	    </section>
	    <br class="clear" />
	    <section class="left-side-nav">
		    <?php 
		      $v = 0;
		      $menuargs = array(
		        "theme_location" => "primary",
		        "menu_class" => "s-menu",
		        "menu_id" => "LEFT-MENU",
		      );
		      $items_left = wp_get_nav_menu_items( 'LEFT-MENU', $menuargs); 
		    ?>
	    	<div style="width: 100%;background-color: #ffebc8;">
	    		<div style="background-color: #aea18b;padding-top: 10px;padding-bottom: 10px;padding-left: 25px;padding-right: 25px;">
	    			<span class="footnote text-left">Project Features</span>
	    		</div>
	    		<ul class="nav-pages">
	    			<?php foreach( $items_left as $item ){ ?>
	    				<li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
	    			<?php } ?>
	    		</ul>
	    	</div>

	    </section>
	  </div>	
	  <div class="right-side">


		<section class="contact-section">
			<div style="background-color: #fbe2b5;display: flex;padding-top: 9px;padding-bottom: 9px;box-shadow: 1px 2px 6px 0px #0e0e0e7a;">
				<div class="col-md-4 left">
					<span class="contact-1" style="text-transform: uppercase;"><?php the_title(); ?></span>
				</div>
				<div class="col-md-8 left">
					<div class="contact-container">
						<div class="col-md-1 left">
							<img style="position: relative;top: 9px;" src="<?php bloginfo('template_directory'); ?>/images/home/phone.png" alt="Menu"> 
						</div>
						<div class="col-md-10 left">
							<span>Call us to receive your custom quote <a href="tel:2818097283">(281)-809-7283</a> <br/> or complete our <a class="contact-link" href="#">request a quote form</a></span>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="contact-2-mobile">
			<div style="background-color: #ffebc8;display: flex;padding-top: 15px;padding-bottom: 15px;width: 100%;">
				<div class="col-md-12 left">
					<div class="contact-container">
						<div class="center" style="padding:0px;width:100%;">
							<span class="contact-1 co-text">HOUSTON'S BEST WINE<br/>CELLARS BUILDERS</span>
						</div>
					</div>
				</div>
			</div>
		</section>