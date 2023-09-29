<?php
get_header();
if (is_author()) {
    $author = get_queried_object();
    $title = "Author: ".$author->display_name;
    $description = get_the_author_meta('description');
}
?>
<div class="max-w-2xl px-4 mx-auto mt-16">
    <div class="mb-8 pb-8 border-b text-center">
        <h1 class="text-4xl font-medium mb-4"><?php echo $title ?></h1>
        <p class="text-xl opacity-50"><?php echo $description ?></p>
    </div>
    <?php if (have_posts()): while (have_posts()): the_post(); get_template_part("template_parts/post"); endwhile; endif; ?>
</div>
<?php get_footer(); ?>