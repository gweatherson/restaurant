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
$item = get_field('menu_item') ?: 'Menu Item Blank.';
?>


<?php if( have_rows('menu_item') ): ?>
  <?php while( have_rows('menu_item') ): the_row();

    // vars
    $name = get_sub_field('item_name');
    $price = get_sub_field('item_price');
    $description = get_sub_field('item_description');
    $photo = get_sub_field('item_photo');
    ?>


      <?php if( $name ): ?>
        <?php echo $name; ?>
      <?php endif; ?>

      <?php if( $price ): ?>
        <?php echo $price; ?>
      <?php endif; ?>

      <?php if( $description ): ?>
        <?php echo $description; ?>
      <?php endif; ?>

      <?php if( $photo ): ?>
        <?php echo $photo; ?>
      <?php endif; ?>
      <hr />

  <?php endwhile; ?>
<?php endif; ?>
