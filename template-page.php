<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Puslapis
 *
 * @package storefront
 */

get_header(); ?>


<div class="page-bg" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-bg.jpg');">
    <h1><?php echo the_title(); ?></h1>
</div>

<div class="container">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
  endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
</div>

<?php
get_footer();
