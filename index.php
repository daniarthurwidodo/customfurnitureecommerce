<?php get_header(); ?>
<main>
    <h1>Welcome to Custom Furniture Ecommerce</h1>
    <p>This is your new WordPress theme. Start customizing!</p>
    <?php if (current_user_can('edit_posts')) : ?>
        <p><a href="<?php echo get_edit_post_link(); ?>" class="btn btn-primary">Edit this page</a></p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>
