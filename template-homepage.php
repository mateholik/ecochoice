<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section>
              <div class="custom-slider-1">
                <div id="slider1" class="owl-carousel">
                    <div class="item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide1.jpg');">
                        <div class="container">
                            <div class="item__box">
                                <div class="item__line">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/green-line.svg' ); ?>
                                </div>
                                <div class="item__leave">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/leave.svg' ); ?>
                                </div>
                                <h1 class="item__title">PLUOštinių KANAPIŲ PRODUKcija</h1>
                                <p class="item__text">Maistinės pluoštinės kanapės, iš kurių gaminama mūsų produkcija, ypatingai turtingos skalsiomis savybėmis ir organizmui reikalingais elementais: Omega-3, Omega-6 riebalų rugštimis</p>
                                <div class="item__btns">
                                    <a href="#" class="btn btn--transparent">Daugiau Informacijos</a>
                                    <a href="#" class="btn btn--light">Kanapių Produktai</a>
                                </div>
                                <div class="item__line">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/green-line.svg' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item--short" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide2.jpg');">
                        <div class="container">
                            <div class="item__box item__box--brown">
                                <div class="item__line item__line--white">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/green-line.svg' ); ?>
                                </div>
                                <div class="item__leave item__leave--white">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/leave.svg' ); ?>
                                </div>
                                <h1 class="item__title item__title--white">PLUOštinių KANAPIŲ PRODUKcija</h1>
                                <p class="item__text">Maistinės pluoštinės kanapės, iš kurių gaminama mūsų produkcija, ypatingai turtingos skalsiomis savybėmis ir organizmui reikalingais elementais: Omega-3, Omega-6 riebalų rugštimis</p>
                                <div class="item__btn">
                                    <a href="#" class="btn btn--white">Rinkiniai</a>
                                </div>
                                <div class="item__line item__line--white">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/green-line.svg' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide3.jpg');">
                        <div class="container">
                            <div class="item__box">
                                <div class="item__line">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/green-line.svg' ); ?>
                                </div>
                                <div class="item__leave">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/leave.svg' ); ?>
                                </div>
                                <h1 class="item__title">PLUOštinių KANAPIŲ PRODUKcija</h1>
                                <p class="item__text">Maistinės pluoštinės kanapės, iš kurių gaminama mūsų produkcija, ypatingai turtingos skalsiomis savybėmis ir organizmui reikalingais elementais: Omega-3, Omega-6 riebalų rugštimis</p>
                                <div class="item__btns">
                                    <a href="#" class="btn btn--transparent">Daugiau Informacijos</a>
                                    <a href="#" class="btn btn--light">Kanapių Produktai</a>
                                </div>
                                <div class="item__line">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/green-line.svg' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/slide4.jpg');">
                        <div class="container">
                            <div class="item__box item__box--left">
                                <div class="item__line">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/green-line.svg' ); ?>
                                </div>
                                <div class="item__leave">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/leave.svg' ); ?>
                                </div>
                                <h1 class="item__title">PLUOštinių KANAPIŲ PRODUKcija</h1>
                                <p class="item__text">Maistinės pluoštinės kanapės, iš kurių gaminama mūsų produkcija, ypatingai turtingos skalsiomis savybėmis ir organizmui reikalingais elementais: Omega-3, Omega-6 riebalų rugštimis</p>
                                <div class="item__btns">
                                    <a href="#" class="btn btn--transparent">Daugiau Informacijos</a>
                                    <a href="#" class="btn btn--light">Kanapių Produktai</a>
                                </div>
                                <div class="item__line">
                                    <?php echo file_get_contents( get_stylesheet_directory_uri() . '/assets/img/svg/green-line.svg' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </section>

            <section>
                <div class="container">
                    <div class="links">
                        <div class="item">
                            <h1 class="item__title">Nauda</h1>
                            <div class="item__img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img1.jpg');">
                                <div class="item__mask"></div>
                                <p class="item__text"><strong>Kanapės padeda:</strong><br>
                                    DEGINTI RIEBALUS <br>
                                    Mažinti cholesterolio kiekį <br>
                                    APSAUGOTI NUO Vėžio <br>
                                    PALAIKYTI ENERGIJĄ  <br>
                                    Mažinti cholesterolio kiekį <br>
                                    APSAUGOTI NUO Vėžio <br>
                                </p>
                            </div>
                            <a href="" class="btn btn--light">Skaityti daugiau</a>
                        </div>
                        <div class="item">
                            <h1 class="item__title">Natūrali produkcija</h1>
                            <div class="item__img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img2.jpg');">
                                <div class="item__mask"></div>
                                <p class="item__text">Ekologiška lietuviška produkcija
                                </p>
                            </div>
                            <a href="" class="btn btn--light">Produktai</a>
                        </div>
                        <div class="item">
                            <h1 class="item__title">Idėja dovanai</h1>
                            <div class="item__img" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img3.jpg');">
                                <div class="item__mask"></div>
                                <p class="item__text">
                                    įvairūs pluoštinių kanapių rinkiniai
                                </p>
                            </div>
                            <a href="" class="btn btn--light">Skaityti daugiau</a>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="cats">
                    <div class="container">
                        <h1 class="title">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-left.svg" alt="arrow">
                            <span>KATEGORIJOS</span>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-right.svg" alt="arrow">
                        </h1>
                        <p class="text">Ypatingai turtingos skalsiomis savybėmis ir organizmui reikalingais elementais: Omega-3, Omega-6 riebalų rugštimis</p>
                        <div class="custom-slider-2">
                            <div id="slider2" class="owl-carousel">
                            <?php
                            $args = array('taxonomy' => 'product_cat');
                            $categories = get_categories( $args );
                            foreach ($categories as $cat) {
                                $size = 'medium'; //can also be value: 'thumbnail'
                                $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_image( $thumbnail_id, $size );
                                $link = get_category_link( $cat->term_id);
                                echo ' <a href="'.$link.'"  class="item">
                                    <div class="item__thumb">
                                            '.$image.'
                                    </div>
                                    <div class="item__content">
                                        <h1 class="item__title"> '.$cat->name.'</h1>
                                        <p class="item__text">Žalia, Miško Uogų arbatos</p>
                                        <p class="item__link"> Daugiau »</p>
                                    </div>
                                </a>';
                            }
                            ?>
                            </div>
                        </div>
                        <div class="mob">
                            <?php
                            $args = array('taxonomy' => 'product_cat');
                            $categories = get_categories( $args );
                            foreach ($categories as $cat) {
                                $size = 'medium'; //can also be value: 'thumbnail'
                                $thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true );
                                $image = wp_get_attachment_image( $thumbnail_id, $size );
                                $link = get_category_link( $cat->term_id);
                                echo ' <a href="'.$link.'"  class="item">
                                    <div class="item__thumb">
                                            '.$image.'
                                    </div>
                                    <div class="item__content">
                                        <h1 class="item__title"> '.$cat->name.'</h1>
                                        <p class="item__text">Žalia, Miško Uogų arbatos</p>
                                        <p class="item__link"> Daugiau »</p>
                                    </div>
                                </a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="sets-wrap" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg1.jpg');">
                    <div class="container container--no-padding">
                        <div class="sets">
                            <div class="sets__row">
                                <div class="sets__col">
                                    <div class="bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img4.jpg');">
                                        <div class="bg__mask"></div>
                                        <div class="bg__title bg__title--soft">Įsigyk </div>
                                        <div class="bg__title">Kanapių Rinkinius</div>
                                        <a href="" class="btn btn--transparent">Daugiau Rinkinių</a>
                                    </div>
                                </div>
                                <div class="sets__col">
                                    <div class="products">
                                        <div class="products__title">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-left.svg" alt="arrow">
                                            <span>Rinkiniai</span>
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/header-right.svg" alt="arrow">
                                        </div>
                                        <p class="products__text"> Ypatingai turtingos skalsiomis savybėmis ir organizmui reikalingais elementais: Omega-3, Omega-6 riebalų rugštimis</p>
<!--                                        --><?php //echo do_shortcode('[products limit="3" columns="3" category="dovanu-rinkiniai"]') ?>
                                        <?php echo do_shortcode('[products limit="3" columns="3" category="accessories"]') ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
    <div class="container">
        <?php
        /**
         * Functions hooked in to homepage action
         *
         * @hooked storefront_homepage_content      - 10
         * @hooked storefront_product_categories    - 20
         * @hooked storefront_recent_products       - 30
         * @hooked storefront_featured_products     - 40
         * @hooked storefront_popular_products      - 50
         * @hooked storefront_on_sale_products      - 60
         * @hooked storefront_best_selling_products - 70
         */
        do_action( 'homepage' );
        ?>
    </div>

        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
