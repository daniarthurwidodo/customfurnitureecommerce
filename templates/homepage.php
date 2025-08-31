<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<main>
    <h1>Homepage Template</h1>
    <p>Welcome to your custom homepage!</p>
    <?php
    // Example: Display latest posts
    $latest_posts = new WP_Query(['posts_per_page' => 5]);
    if ($latest_posts->have_posts()) :
        echo '<ul>';
        while ($latest_posts->have_posts()) : $latest_posts->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        endwhile;
        echo '</ul>';
        wp_reset_postdata();
    endif;
    ?>
</main>
<?php get_footer(); ?>
