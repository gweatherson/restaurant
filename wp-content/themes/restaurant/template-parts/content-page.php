<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package restaurant
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header screen-reader-text">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php restaurant_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'restaurant' ),
			'after'  => '</div>',
		) );
		?>


    <div class="contact__content">
      <h1>Reno</h1>

      <address>
        <p>1111 Street Street Reno, Nevada<br />
        <a href="mailto:contact@restaurant.com">contact@restaurant.com</a><br />
        <a href="tel:+17751111111">(775) 111-1111</a></p>
      </address>
    </div>


	</div><!-- .entry-content -->
  <div id="mapid"></div>
</article><!-- #post-<?php the_ID(); ?> -->
