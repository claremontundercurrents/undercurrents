<?php get_header();?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<div class="max-w-4xl mx-auto px-4 mt-16 relative">
    <div class="absolute -left-8 -top-40 w-48 pointer-events-none">
        <img src="<?php echo get_template_directory_uri() . "/img/uc-background.svg" ?>" alt="" class="w-full">
    </div>
    <p class="text-xs font-medium opacity-50 mb-8">
        <?php echo the_date("F j, Y"); ?>
    </p>
    <h3 class="font-garamond text-3xl sm:text-4xl md:text-5xl mb-8 !leading-tight font-medium"><?php the_title(); ?></h3>
    <p class="text-xl md:text-2xl opacity-50 !leading-normal">
        <?php echo get_the_excerpt(); ?>
    </p>
    <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-full block my-16") )?>
</div>
<div class="max-w-2xl mx-auto px-4 content content-drop font-garamond">
    <?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>