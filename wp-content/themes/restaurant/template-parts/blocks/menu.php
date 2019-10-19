<?php

/**
 * Menu Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'menu-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'menu';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$item = get_field('item') ?: 'Menu Item Blank.';
?>


<?php if( have_rows('item') ): ?>
  <?php while( have_rows('item') ): the_row();

    $title = get_sub_field('title');
    $price = get_sub_field('price');
    $description = get_sub_field('description');
    $image = get_sub_field('image');
    ?>

      <?php if( $title ): ?>
        <?php echo $title; ?>
      <?php endif; ?>

      <?php if( $price ): ?>
        <?php echo $price; ?>
      <?php endif; ?>

      <?php if( $description ): ?>
        <?php echo $description; ?>
      <?php endif; ?>

      <?php if( $image ): ?>
        <?php echo $image; ?>
      <?php endif; ?>
      <hr />

  <?php endwhile; ?>
<?php endif; ?>
