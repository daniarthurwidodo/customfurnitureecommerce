<?php
// Debug: Add this to track template loading
error_log('functions.php loaded - ' . date('Y-m-d H:i:s'));

// Include the WP Bootstrap Navwalker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

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

// Register navigation menus
function customfurnitureecommerce_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'customfurnitureecommerce'),
    ));
}
add_action('init', 'customfurnitureecommerce_register_menus');

// Debug: Add template debugging
function customfurnitureecommerce_template_debug() {
    error_log('Template included: ' . basename(get_page_template()) . ' - ' . date('Y-m-d H:i:s'));
}
add_action('wp_head', 'customfurnitureecommerce_template_debug');

// WooCommerce Support
function customfurnitureecommerce_woocommerce_setup() {
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'customfurnitureecommerce_woocommerce_setup');

// WooCommerce wrapper
function customfurnitureecommerce_woocommerce_wrapper_start() {
    echo '<div class="container mt-4"><div class="row"><div class="col-12">';
}
add_action('woocommerce_before_main_content', 'customfurnitureecommerce_woocommerce_wrapper_start', 10);

function customfurnitureecommerce_woocommerce_wrapper_end() {
    echo '</div></div></div>';
}
add_action('woocommerce_after_main_content', 'customfurnitureecommerce_woocommerce_wrapper_end', 10);
