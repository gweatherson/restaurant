<?php

/**
 * Contact Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Set variables from ACF.
$title = get_field('title') ?: 'Please enter an city.';
$address = get_field('address') ?: 'Please enter an address.';
$email = get_field('email') ?: 'Please enter an email address.';
$phone = get_field('phone') ?: 'Please enter a phone number.';
?>

<div class="contact__content">
<?php if(isset($title) && !empty($title)): ?>
  <h1><?= $title; ?></h1>
<?php endif; ?>


<?php if(isset($address) && !empty($address)): ?>
  <address>
    <?= $address; ?><br />

    <?php if(isset($email) && !empty($email)): ?>
    <a href="mailto:<?= $email; ?>"><?= $email; ?></a><br />
    <?php endif; ?>

    <?php if(isset($phone) && !empty($phone)): ?>
    <a href="tel:+<?= $phone; ?>"><?= $phone; ?></a>
    <?php endif; ?>
  </address>
<?php endif; ?>
</div>

<div id="mapid"></div>
