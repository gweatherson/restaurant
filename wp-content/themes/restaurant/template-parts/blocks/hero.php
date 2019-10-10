<?php

/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Set variables from ACF.
$title = get_field('hero_title') ?: 'Please enter a hero title.';
$image_desktop = get_field('hero_image_desktop') ?: 'Please upload a hero desktop image.';
$image_mobile = get_field('hero_image_mobile') ?: 'Please upload a hero mobile image.';
?>





<section class="hero">

  <header>
    <h1><?php echo $title; ?></h1>
  </header>






<img class="hero__image" src="<?php echo $image_mobile; ?>"
     srcset="large.jpg 1024w, <?php echo $image_desktop; ?> 640w, <?php echo $image_mobile; ?> 320w"
     sizes="(min-width: 36em) 33.3vw, 100vw"
     alt="Hero image of <?php echo $title; ?>">


</section>
