<?php
get_header();
$raw_title = get_the_archive_title();
preg_match("/(?<=Category: )(.*)|(?<=Author: )(.*)|(?<=Tag: )(.*)/", $raw_title, $title_arr);
$title = $title_arr[0];
$obj = get_queried_object();
if (is_author()) {
    $top = "author";
    $description = get_the_author_meta('description');
} else if (is_tag()) {
    $top = "tag";
    $description = tag_description($obj->ID);
} else if (is_category()) {
    $top = "category";
    $description = category_description($obj->ID);
}
?>
<div class="max-w-2xl px-4 mx-auto mt-16">
    <div class="mb-8 pb-8 border-b text-center">
        <!-- <p class="uppercase font-bold tracking-[1px] mb-2 opacity-25"><?php echo $top; ?></p> -->
        <!-- <p class="text-4xl font-garamond italic mb-2 capitalize"><?php echo $top; ?></p> -->
        <!-- <h1 class="text-4xl font-medium mb-4"><?php echo $title ?></h1> -->
        <h1 class="text-4xl mb-4"><span class="font-garamond italic capitalize"><?php echo $top; ?>: </span><span class="font-medium"><?php echo $title ?></span></h1>
        <div class="opacity-50"><?php echo $description; ?></div>
    </div>
    <?php if (have_posts()): while (have_posts()): the_post(); get_template_part("template_parts/post"); endwhile; endif; ?>
</div>
<?php get_footer(); ?>