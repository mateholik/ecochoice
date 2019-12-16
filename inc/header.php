<?php
if ( ! function_exists( 'storefront_header_container' ) ) {
    /**
     * The header container
     */
    function storefront_header_container() {
        echo '<div class="col-full">';
    }
}
if ( ! function_exists( 'storefront_skip_links' ) ) {
    /**
     * Skip links
     *
     * @since  1.4.1
     * @return void
     */
    function storefront_skip_links() {
        ?>
        <a class="skip-link screen-reader-text" href="#site-navigation"><?php esc_attr_e( 'Skip to navigation', 'storefront' ); ?></a>
        <a class="skip-link screen-reader-text" href="#content"><?php esc_attr_e( 'Skip to content', 'storefront' ); ?></a>
        <?php
    }
}
if ( ! function_exists( 'storefront_social_icons' ) ) {
    /**
     * Display social icons
     * If the subscribe and connect plugin is active, display the icons.
     *
     * @link http://wordpress.org/plugins/subscribe-and-connect/
     * @since 1.0.0
     */
    function storefront_social_icons() {
        if ( class_exists( 'Subscribe_And_Connect' ) ) {
            echo '<div class="subscribe-and-connect-connect">';
            subscribe_and_connect_connect();
            echo '</div>';
        }
    }
}
if ( ! function_exists( 'storefront_site_branding' ) ) {
    /**
     * Site branding wrapper and display
     *
     * @since  1.0.0
     * @return void
     */
    function storefront_site_branding() {
        ?>
        <div class="site-branding">
            <?php storefront_site_title_or_logo(); ?>
        </div>
        <?php
    }
}
if ( ! function_exists( 'storefront_secondary_navigation' ) ) {
    /**
     * Display Secondary Navigation
     *
     * @since  1.0.0
     * @return void
     */
    function storefront_secondary_navigation() {
        if ( has_nav_menu( 'secondary' ) ) {
            ?>
            <nav class="secondary-navigation" role="navigation" aria-label="<?php esc_html_e( 'Secondary Navigation', 'storefront' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'secondary',
                        'fallback_cb'    => '',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
            <?php
        }
    }
}
if ( ! function_exists( 'storefront_product_search' ) ) {
    /**
     * Display Product Search
     *
     * @since  1.0.0
     * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
     * @return void
     */
    function storefront_product_search() {
        if ( storefront_is_woocommerce_activated() ) {
            ?>
            <div class="site-search">
                <?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
            </div>
            <?php
        }
    }
}
if ( ! function_exists( 'storefront_header_container_close' ) ) {
    /**
     * The header container close
     */
    function storefront_header_container_close() {
        echo '</div>';
    }
}
if ( ! function_exists( 'storefront_primary_navigation_wrapper' ) ) {
    /**
     * The primary navigation wrapper
     */
    function storefront_primary_navigation_wrapper() {
        echo '<div class="storefront-primary-navigation"><div class="col-full">';
    }
}
if ( ! function_exists( 'storefront_primary_navigation' ) ) {
    /**
     * Display Primary Navigation
     *
     * @since  1.0.0
     * @return void
     */
    function storefront_primary_navigation() {
        ?>
        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
            <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span></button>
            <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'primary',
                    'container_class' => 'primary-navigation',
                )
            );

            wp_nav_menu(
                array(
                    'theme_location'  => 'handheld',
                    'container_class' => 'handheld-navigation',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
        <?php
    }
}
if ( ! function_exists( 'storefront_header_cart' ) ) {
    /**
     * Display Header Cart
     *
     * @since  1.0.0
     * @uses  storefront_is_woocommerce_activated() check if WooCommerce is activated
     * @return void
     */
    function storefront_header_cart() {
        if ( storefront_is_woocommerce_activated() ) {
            if ( is_cart() ) {
                $class = 'current-menu-item';
            } else {
                $class = '';
            }
            ?>
            <ul id="site-header-cart" class="site-header-cart menu">
                <li class="<?php echo esc_attr( $class ); ?>">
                    <?php storefront_cart_link(); ?>
                </li>
                <li>
                    <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                </li>
            </ul>
            <?php
        }
    }
}
if ( ! function_exists( 'storefront_primary_navigation_wrapper_close' ) ) {
    /**
     * The primary navigation wrapper close
     */
    function storefront_primary_navigation_wrapper_close() {
        echo '</div></div>';
    }
}

function unHookHeader(){
    remove_action('storefront_header', 'storefront_header_container', 0);
    remove_action('storefront_header', 'storefront_skip_links', 5);
    remove_action('storefront_header', 'storefront_social_icons', 10);
    remove_action('storefront_header', 'storefront_site_branding', 20);
    remove_action('storefront_header', 'storefront_secondary_navigation', 30);
    remove_action('storefront_header', 'storefront_product_search', 40);
    remove_action('storefront_header', 'storefront_header_container_close', 41);
    remove_action('storefront_header', 'storefront_primary_navigation_wrapper', 42);
    remove_action('storefront_header', 'storefront_primary_navigation', 50);
    remove_action('storefront_header', 'storefront_header_cart', 60);
    remove_action('storefront_header', 'storefront_primary_navigation_wrapper_close', 68);
}
add_action('init', 'unHookHeader');

function customHeader() {
    ?>
   <div class="container container--nav">
       <div class="header__wrap">
           <div class="header__logo">
               <?php storefront_site_title_or_logo(); ?>
           </div>
           <div class="header__navigation">
               <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
                   <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false"><span><?php echo esc_attr( apply_filters( 'storefront_menu_toggle_text', __( 'Menu', 'storefront' ) ) ); ?></span></button>
                   <?php
                   wp_nav_menu(
                       array(
                           'theme_location'  => 'primary',
                           'container_class' => 'primary-navigation',
                       )
                   );

                   wp_nav_menu(
                       array(
                           'theme_location'  => 'handheld',
                           'container_class' => 'handheld-navigation',
                       )
                   );
                   ?>
               </nav>
           </div>
           <div class="header__cart">
               <?php
               if ( storefront_is_woocommerce_activated() ) {
                   if ( is_cart() ) {
                       $class = 'current-menu-item';
                   } else {
                       $class = '';
                   }
                   ?>
                   <ul id="site-header-cart" class="site-header-cart menu">
                       <li class="<?php echo esc_attr( $class ); ?>">
                           <?php storefront_cart_link(); ?>
                       </li>
                       <li>
                           <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                       </li>
                   </ul>
                   <?php
               } ?>
           </div>
       </div>
   </div>
    <?php if( !is_front_page()) {?>
    <div class="page-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-bg.jpg');">
        <?php if(is_woocommerce()) {?>
            <h1><?php woocommerce_page_title(); ?></h1>
        <?php } else if (is_category()) { ?>
             <h1><?php single_cat_title(); ?></h1> <?php
        } else { ?>
            <h1><?php echo the_title(); ?></h1>
        <?php } ?>
    </div>
    <?php } ?>
    <div class="container <?php if( !is_front_page()) echo 'container--cannabis'?>">


    <?php
}
add_action( 'storefront_header', 'customHeader', 1 );
