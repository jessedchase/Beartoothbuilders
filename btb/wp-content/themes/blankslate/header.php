<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="keywords" content="Livingston Custom Home Builder, Bozeman Custom Home Builder, Montana Custom Home Builder, Livingston Home Builder, Bozeman Home Builder, Montana Home Builder, Custom Home Builder ">
<meta name="description" content="<?php wp_title( ' | ', true, 'right' ); ?> |  We are a custom building contractor with over 30 years of experience building in Southwest Montana. We specialize in new construction as well as remodels and restorations. We offer full service general contracting from concept to completion. Please browse our website or feel free to call our office to learn more about how Beartooth Builders can assist you with your residential or commercial contracting needs." />

<meta name="google-site-verification" content="1B7wldn0y0097GTyFSSWGoAkfBkoeqfbOXaZCblC6c8" />
<title><?php wp_title( ' | ', true, 'right' ); ?> | Livingston Custom Home Builder | Bozeman Custom Home Builder</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href='http://fonts.googleapis.com/css?family=Montserrat:200,400,700' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_site_url(); ?>/images/favicon.ico">
<script>
      $(document).ready(function(){
		$('#mobilelink').click(function(){
			$( "#nav ul" ).slideToggle( "slow", function() {});
		});
	});
</script>

<?php wp_head(); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<div id="header">
    <div id="logo">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_site_url(); ?>/images/logo.png" alt="Beartooth Builders" /></a>
    </div>
    <div id="nav">
    	<div id="mobile"><a id="mobilelink" href="javascript:void(0)">Menu</a></div>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </div>
    <div id="headertextarea">
    	<h3>About Beartooth Builders</h3>
        <p>We are a custom building contractor with over 30 years of experience building in Southwest Montana.  We specialize in new construction as well as remodels and restorations.  We offer full service general contracting from concept to completion.   Please browse our website or feel free to call our office to learn more about how Beartooth Builders can assist you with your residential or commercial contracting needs.
</p>
    </div>
    <div id="headerphone">
        406.222.7205
    </div>
</div>
