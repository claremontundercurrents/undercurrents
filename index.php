<?php get_header();?>
<div class="max-w-7xl px-4 mx-auto lg:flex mt-16 relative">
    <div class="absolute -left-8 -top-40 w-48 pointer-events-none">
        <img src="<?php echo get_template_directory_uri() . "/img/uc-background.svg" ?>" alt="" class="w-full">
    </div>
    <div class="lg:w-2/3">
        <p class="font-garamond font-medium text-3xl sm:text-4xl md:text-5xl !leading-tight hero-text">Undercurrents reports on <a><i>labor</i></a>, <a><i>Palestine liberation</i></a>, <a><i>prison abolition</i></a>, <a><i>tenants’ rights</i></a> and other community organizing at and around the Claremont Colleges.</p>
    </div>
    <div class="lg:w-1/3">

    </div>
</div>
<div class="max-w-2xl px-4 mx-auto mt-16">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <a class="flex mb-16" href="<?php the_permalink()?>">
        <?php echo get_the_post_thumbnail( null, "full", array("class" => "w-60 h-48 object-cover flex-shrink-0") )?>
        <div class="ml-8">
            <p class="text-xs font-medium opacity-50 mb-4">
                <?php echo the_date("F j, Y"); ?>
            </p>
            <h3 class="font-garamond text-2xl mb-4 leading-[28px]"><?php the_title(); ?></h3>
            <p class="text-sm opacity-50">
                <?php echo get_the_excerpt(); ?>
            </p>
        </div>
    </a>
<?php endwhile; endif; ?>
</div>
<?php get_footer();?>