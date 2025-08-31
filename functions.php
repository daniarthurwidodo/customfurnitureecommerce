<?php
// Enqueue theme stylesheet
function customfurnitureecommerce_enqueue_assets() {
    // Theme stylesheet
    wp_enqueue_style('customfurnitureecommerce-style', get_stylesheet_uri());

    // Bootstrap CSS (CDN)
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    
    // FontAwesome CSS (CDN)
    wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    // jQuery (WordPress includes jQuery, just enqueue)
    wp_enqueue_script('jquery');

    // Bootstrap JS (CDN, depends on jQuery)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'customfurnitureecommerce_enqueue_assets');
