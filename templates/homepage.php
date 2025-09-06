<?php
/*
Template Name: Homepage
*/
// Debug: Add this line to confirm the template is being loaded
error_log('Loading homepage.php template - ' . date('Y-m-d H:i:s'));

get_header(); ?>
<main>
    <h1>Homepage Template</h1>
    <p>Welcome to your custom homepage!</p>
    <?php
    // Debug: Add error checking around the WP_Query
    error_log('Before WP_Query - ' . date('Y-m-d H:i:s'));
    
    // Example: Display latest posts
    $latest_posts = new WP_Query(['posts_per_page' => 5]);
    
    if (is_wp_error($latest_posts)) {
        error_log('WP_Query error: ' . $latest_posts->get_error_message());
    } else {
        error_log('WP_Query successful - found ' . $latest_posts->found_posts . ' posts');
    }
    
    if ($latest_posts->have_posts()) :
        echo '<ul>';
        while ($latest_posts->have_posts()) : $latest_posts->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        endwhile;
        echo '</ul>';
        wp_reset_postdata();
    else:
        echo '<p>No posts found.</p>';
    endif;
    ?>
</main>
<?php 
// Debug: Add this line to confirm we reach the end of the template
error_log('Reached end of homepage.php template - ' . date('Y-m-d H:i:s'));
get_footer(); 
?>
