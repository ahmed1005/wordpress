
<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Bootstrap to WordPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

 
              <!-- Bootstrap Core CSS -->
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
              
               <!--FontAwesome Icons -->
                              
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
				<!-- Custom CSS -->			  
<!--			  <link href="css/style-Ahmed.css" rel="stylesheet">-->
               
            <!--Google Fonts -->
               <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

	<!--<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- FontAwesome Icons -->
<!--<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>
	




<!-- HEADER
	--------------------- -->
	<header class=" ahmed site-header" role="banner">
    
    
	    <!-- Navbar
	    =================================== -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
  <a class="navbar-brand" href="#">Fit4Ever</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
    <a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="Fitness4Ever"></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
<!--

     <li class="nav-item">
       <a class="nav-link" href="#">Link</a>
         </li>-->
         
<!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Mnue
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
-->
<!--
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Testimonial</a>
      </li>
-->
    </ul>
<!--    <form class="form-inline my-2 my-lg-0">-->
<!--      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--    </form>-->
 
         <?php
      
      
            wp_nav_menu( array(
            
                'theme_location'   => 'primary',
                'container'        => 'nav',
                'container_class'  => 'navbar-collapse collapse',
                'menu_class'       => 'nav navbar-nav navbar-right'
            ))
      
      
    
      
      
      ?>
 
 	
 
  </div>
</nav>
	</header>
