<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Book My Guitar 1.0
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" role="banner">
                <div class="top-header">
                    <div class="mainWrapper center">
                        <div class="wid50 left">
                            <div class="mininavleft">
                                <a href="#" class="phone">Call us 1 800 - 555 - 1000</a>
                            </div>
                        </div>
                        <div class="wid50 right">
                            <div class="mininavright">
                                <a href="http://ignitethemes.net/couture/my-account/" class="registerbtn">Login/Register</a>
                                <a href="http://ignitethemes.net/couture/cart/" class="shopcart">Cart</a>
                                <a href="http://ignitethemes.net/couture/shop/" class="shop">Shop</a>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="main-header">
                    <div class="mainWrapper center">
                        <div class="wid25 left">
                            <a class="home-link" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
                            </a>
                        </div>
                        <div class="wid75 right">
                            <div class="socialbar right">
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/facebook.png" alt="facebook">
                                </a>
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/twitter.png" alt="twitter">
                                </a>
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/vimeo.png" alt="vimeo">
                                </a>
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/myspace.png" alt="myspace">
                                </a>
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/rss.png" alt="rss">
                                </a>
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/skype.png" alt="skype">
                                </a>
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/youtube.png" alt="youtube">
                                </a>
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/flickr.png" alt="flickr">
                                </a>
                                <a target="_blank" href="">
                                    <img class="social" src="http://ignitethemes.net/couture/wp-content/themes/couture/images/social/wordpress.png" alt="wordpress">
                                </a>	    
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="navbar" class="navbar">
                        <div class="mainWrapper center">
                            <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-header-menu')); ?>
                                <?php // get_search_form(); ?>
                            </nav><!-- #site-navigation -->
                        </div>
                    </div><!-- #navbar -->
                </div>
            </header><!-- #masthead -->
            <div id="main" class="site-main">
                <div class="shiping-details">
                    <div class="mainWrapper center">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/specialloffer.png" />
                    </div>
                </div>
