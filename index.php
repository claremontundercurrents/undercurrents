<?php get_header();?>
<div class="max-w-7xl px-4 mx-auto lg:flex mt-16 relative">
    <div class="absolute -left-8 -top-40 w-48 pointer-events-none">
        <img src="<?php echo get_template_directory_uri() . "/img/uc-background.svg" ?>" alt="" class="w-full">
    </div>
    <div class="lg:w-2/3">
        <p class="font-garamond font-medium text-3xl sm:text-4xl md:text-[45px] !leading-tight hero-text">Undercurrents reports on <a><i>labor</i></a>, <a><i>Palestine liberation</i></a>, <a><i>prison abolition</i></a>, <a><i>tenants’ rights</i></a> and other community organizing at and around the Claremont Colleges.</p>
    </div>
    <div class="lg:w-1/3 flex-shrink-0 flex items-center max-w-md mx-auto">
        <img src="<?php echo get_template_directory_uri() . "/img/issue1.png" ?>" alt="" class="w-1/2 flex-shrink- pr-4">
        <div class="w-1/2 flex-shrink-0">
            <p class="text-[10px] uppercase tracking-[1px] mb-2">
                <span class="font-bold">Issue 1</span> / Spring 2023
            </p>
            <p class="text-2xl font-garamond font-medium mb-2">Setting the Standard</p>
            <p class="opacity-75 text-xs mb-4">How Pomona workers won a historic $25 minimum wage; a new union in Claremont; Tony Hoang on organizing</p>
            <a href="" class="bg-tred py-2 px-3 text-xs uppercase text-white rounded tracking-[1px] font-bold">Read PDF</a>
        </div>
    </div>
</div>
<div class="max-w-2xl px-4 mx-auto mt-16">
<?php if (have_posts()): while (have_posts()): the_post(); get_template_part("template_parts/post"); endwhile; endif; ?>
</div>
<?php get_footer();?>