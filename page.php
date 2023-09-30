<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<div class="max-w-2xl mx-auto px-4 content content-drop font-garamond py-16">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>