<?php
// Enqueue theme stylesheet
function customfurnitureecommerce_enqueue_styles() {
    wp_enqueue_style('customfurnitureecommerce-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'customfurnitureecommerce_enqueue_styles');
