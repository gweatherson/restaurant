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
$title = get_field('hero_title') ?: 'Please enter a title.';
$image = get_field('hero_image') ?: 'Please upload a mobile image.';
$video = get_field('hero_video') ?: 'Please upload a video.';
?>

<section class="hero">

  <header>
    <h1><?php echo $title; ?></h1>
  </header>

  <video muted autoplay loop playsinline>
    <source src="<?php echo $video; ?>" type="video/mp4">
    <img src="<?php echo $image; ?>" title="Your browser does not support the <video> tag">
  </video>

</section>
