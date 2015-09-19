<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
 
    global $page, $paged;
 
    wp_title( '|', true, 'right' );
 
    bloginfo( 'name' );
 
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";
 
    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );
 
    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
 
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/app.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">





<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>
 
<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
 
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>











</head>
 
<body <?php body_class(); ?>>


            <nav class="top-bar">
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    </li>          
                    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <?php foundation_top_bar_l(); ?>
 
                    <?php foundation_top_bar_r(); ?>
                </section>
            </nav>
      








<!--start main -->
<div class="row" id="main">


    <header>
   <div class="row">
    <div class="large-12 columns">

<div class="large-4 small-8 columns" id="logo">
        <hgroup>
            <h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" style="margin-top:30px; alt="">
            </a></h1>
            
        </hgroup>
        </div>
        <!--end logo -->
 
    <!--start slideshow -->     
       <div class="large-8 small-12 columns right" id="slideshow">
    <?php echo do_shortcode("[metaslider id=34]"); ?>   
 </div>
 <!-- end slideshow -->
        


       
</div>
</div>

    </header>