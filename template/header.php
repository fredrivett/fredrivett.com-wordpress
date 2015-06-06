<?php
/**
 * The Header for our theme
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html class="no-js"  <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,700,300,800' rel='stylesheet' type='text/css'>
        
        <?php $stylesheet_directory = get_stylesheet_directory_uri(); ?>
        
        <link rel="apple-touch-icon" sizes="57x57"
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114"
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72"
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" 
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60"
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120"
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76"
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152"
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180"
              href="<?php echo $stylesheet_directory; ?>/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png"
              href="<?php echo $stylesheet_directory; ?>/favicon-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png"
              href="<?php echo $stylesheet_directory; ?>/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png"
              href="<?php echo $stylesheet_directory; ?>/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png"
              href="<?php echo $stylesheet_directory; ?>/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png"
              href="<?php echo $stylesheet_directory; ?>/favicon-32x32.png" sizes="32x32">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="msapplication-TileImage"
              content="<?php echo $stylesheet_directory; ?>/mstile-144x144.png">
        <meta name="p:domain_verify" content="ebca3e22b99bba1cf14889cc51a2b10d"/>
        
	<?php wp_head(); ?>
</head>

<?php global $body_class; // this lets us access the variable declared in other files ?>
<body class="<?php echo isset($body_class) ? $body_class : ''; ?>">
  
  <?php global $topbar; // this lets us access the variable declared in other files ?>
    
    <?php // wp_nav_menu( array( 'theme_location' => 'main-navigation' ) ); ?>
  
    <nav class="top-bar <?php echo ($topbar === 'subtle' ? 'subtle' : '') ?>" data-topbar data-options="mobile_show_parent_link: true" role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="<?php echo home_url(); ?>">
              <img src="<?php echo $stylesheet_directory; ?>/img/contrast.svg"
                   alt="<?php bloginfo('name'); ?>"
                   class="contrast-logo"
                   onerror="this.onerror=null; this.src='<?php echo $stylesheet_directory; ?>/img/contrast.png'" />
            </a></h1>
        </li>
      <!-- Remove the class "menu-icon" to get rid of menu icon.
           Take out "Menu" to just have icon alone. -->
        <li class="toggle-topbar menu-icon">
          <a href="#">
            <span>Menu</span>
          </a>
        </li>
      </ul>
    <section class="top-bar-section">
      <?php foundation_top_bar_l(); ?>
      <?php foundation_top_bar_r(); ?>
    </section>
    </nav>