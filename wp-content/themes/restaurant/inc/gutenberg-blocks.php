<?php

function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'description'       => __('Hero block'),
        'render_template'   => 'template-parts/blocks/hero.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'hero' ),
    ));

    // register the menu block.
    acf_register_block_type(array(
        'name'              => 'menu',
        'title'             => __('Menu'),
        'description'       => __('Menu block'),
        'render_template'   => 'template-parts/blocks/menu.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'menu' ),
    ));

    // register the contact block.
    acf_register_block_type(array(
        'name'              => 'contact',
        'title'             => __('Contact'),
        'description'       => __('Contact block'),
        'render_template'   => 'template-parts/blocks/contact.php',
        'category'          => 'formatting',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'contact' ),
    ));

}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

?>
