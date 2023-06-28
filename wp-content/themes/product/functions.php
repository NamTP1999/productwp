<?php

function register_styles(): void
{
    wp_enqueue_style('product-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '1.0', 'all');
    wp_enqueue_style('product-style', get_template_directory_uri() . '/assets/css/style.css', array('product-bootstrap'), '1.0', 'all');
    wp_enqueue_style('product-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '1.0', 'all');
}

function register_scripts(): void
{
    wp_enqueue_script('product-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4', 'all', true);
    wp_enqueue_script('product-jsdelivr', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16', 'all', true);
    wp_enqueue_script('product-bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4', 'all', true);
    wp_enqueue_script('product-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', 'all', true);
}

add_action('wp_enqueue_scripts', 'register_styles');
add_action('wp_enqueue_scripts', 'register_scripts');

?>0