<?php
/*
Template Name: Posts
*/
get_header(); ?>
<main>
    <h1>Posts Template</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            echo '<article>';
            echo '<h2><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
            echo '<div>' . get_the_excerpt() . '</div>';
            echo '</article>';
        endwhile;
    else :
        echo '<p>No posts found.</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>
