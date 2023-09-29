<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<div class="max-w-4xl mx-auto px-4 mt-16 relative">
    <div class="absolute -left-8 -top-40 w-48 pointer-events-none">
        <img src="<?php echo get_template_directory_uri() . "/img/uc-background.svg" ?>" alt="" class="w-full">
    </div>
    <div class="flex items-center mb-8">
        <?php
        $tags = get_the_tags();
        if ($tags) {
            foreach ($tags as $tag) {
                ?>
                <a class="font-bold text-tdarkred tracking-[1px] mr-2 uppercase" href="<?php echo get_tag_link($tag) ?>"><?php echo $tag->name; ?></a>
                <?php
            }
        }
        ?>
        <p class="font-medium opacity-50">
            <?php echo the_date("F j, Y"); ?>
        </p>
    </div>
    <h3 class="font-garamond text-3xl sm:text-4xl md:text-5xl mb-8 !leading-tight font-medium"><?php the_title(); ?></h3>
    <p class="text-xl md:text-2xl opacity-50 mb-8 !leading-normal">
        <?php echo get_the_excerpt(); ?>
    </p>
    <div>
        <?php
            $post_id = get_the_ID();
            $coauthors = get_coauthors($post_id);
            $last = end($coauthors)->ID;
            foreach ($coauthors as $author) {
                $authorLink = get_author_posts_url($author->ID);
                ?>
                <a href="<?php echo $authorLink; ?>" class="font-semibold underline text-tdarkred"><?php echo $author->display_name ?></a><?php if ($author->ID != $last) echo ", "?>
                <?php
            }
        ?>
    </div>
    <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block my-16") )?>
</div>
<div class="max-w-2xl mx-auto px-4 content content-drop font-garamond">
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>