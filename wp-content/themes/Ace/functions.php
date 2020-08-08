<?php

// Load stylesheets
function load_stylesheets()
{

    //registering the stylesheet
    wp_register_style('plugins', get_template_directory_uri() . '/assest/css/plugins.css', array(), 1, 'all');
    //loading or enqueing the stylesheet
    wp_enqueue_style('plugins');

    wp_register_style('theme', get_template_directory_uri() . '/assest/css/theme.css', array(), 1, 'all');
    wp_enqueue_style('theme');

    wp_register_style('icons', get_template_directory_uri() . '/assest/css/icons.css', array(), 1, 'all');
    wp_enqueue_style('icons');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('style');

    wp_register_style('responsive', get_template_directory_uri() . '/assest/css/responsive.css', array(), 1, 'all');
    wp_enqueue_style('responsive');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

//Load scripts
function load_scripts()
{

    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/assest/js/vendor/jquery-1.12.4.min.js', array(), 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('html5shiv', get_template_directory_uri() . '/assest/js/html5shiv.min.js', array(), 1, 1, 1);
    wp_enqueue_script('html5shiv');

    wp_register_script('respond', get_template_directory_uri() . '/assest/js/respond.min.js', array(), 1, 1, 1);
    wp_enqueue_script('respond');

    wp_register_script('modernizr', get_template_directory_uri() . '/assest/js/vendor/modernizr-2.8.3.min.js', array(), 1, 1, 1);
    wp_enqueue_script('modernizr');

    wp_register_script('bootstrap', get_template_directory_uri() . '/assest/js/vendor/bootstrap.min.js', array(), 1, 1, 1);
    wp_enqueue_script('bootstrap');

    wp_register_script('easing', get_template_directory_uri() . '/assest/js/vendor/jquery.easing.1.3.js', array(), 1, 1, 1);
    wp_enqueue_script('easing');

    wp_register_script('migrate', get_template_directory_uri() . '/assest/js/vendor/jquery-migrate-1.2.1.min.js', array(), 1, 1, 1);
    wp_enqueue_script('migrate');

    wp_register_script('appear', get_template_directory_uri() . '/assest/js/vendor/jquery.appear.js', array(), 1, 1, 1);
    wp_enqueue_script('appear');

    wp_register_script('carousel', get_template_directory_uri() . '/assest/js/owl.carousel.min.js', array(), 1, 1, 1);
    wp_enqueue_script('carousel');

    wp_register_script('stellar', get_template_directory_uri() . '/assest/js/stellar.js', array(), 1, 1, 1);
    wp_enqueue_script('stellar');

    wp_register_script('waypoints', get_template_directory_uri() . '/assest/js/waypoints.min.js', array(), 1, 1, 1);
    wp_enqueue_script('waypoints');

    wp_register_script('counterup', get_template_directory_uri() . '/assest/js/jquery.counterup.min.js', array(), 1, 1, 1);
    wp_enqueue_script('counterup');

    wp_register_script('wow', get_template_directory_uri() . '/assest/js/wow.min.js', array(), 1, 1, 1);
    wp_enqueue_script('wow');

    wp_register_script('modal', get_template_directory_uri() . '/assest/js/jquery-modal-video.min.js', array(), 1, 1, 1);
    wp_enqueue_script('modal');

    wp_register_script('stellarnav', get_template_directory_uri() . '/assest/js/stellarnav.min.js', array(), 1, 1, 1);
    wp_enqueue_script('stellarnav');

    wp_register_script('placeholdem', get_template_directory_uri() . '/assest/js/placeholdem.min.js', array(), 1, 1, 1);
    wp_enqueue_script('placeholdem');

    wp_register_script('contact', get_template_directory_uri() . '/assest/js/contact-form.js', array(), 1, 1, 1);
    wp_enqueue_script('contact');

    wp_register_script('ajaxchimp', get_template_directory_uri() . '/assest/js/jquery.ajaxchimp.js', array(), 1, 1, 1);
    wp_enqueue_script('ajaxchimp');

    wp_register_script('sticky', get_template_directory_uri() . '/assest/js/jquery.sticky.js', array(), 1, 1, 1);
    wp_enqueue_script('sticky');

    wp_register_script('main', get_template_directory_uri() . '/assest/js/main.js', array(), 1, 1, 1);
    wp_enqueue_script('main');

    wp_register_script('googleapis', get_template_directory_uri() . '/assest/js/googleapis.js', array(), 1, 1, 1);
    wp_enqueue_script('googleapis');

    wp_register_script('maps', get_template_directory_uri() . '/assest/js/maps.active.js', array(), 1, 1, 1);
    wp_enqueue_script('maps');
}
add_action('wp_enqueue_scripts', 'load_scripts');
