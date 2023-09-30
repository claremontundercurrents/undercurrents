<?php get_header();?>
<div class="max-w-7xl px-4 mx-auto lg:flex mt-16 relative">
    <div class="absolute -left-8 -top-40 w-48 pointer-events-none">
        <img src="<?php echo get_template_directory_uri() . "/img/uc-background.svg" ?>" alt="" class="w-full">
    </div>
    <div class="lg:w-[60%] pr-4">
        <p class="font-garamond font-medium text-3xl sm:text-4xl md:text-[45px] !leading-tight hero-text">
            Undercurrents reports on 
                <?php
                $heromenu = get_menu_items_by_registered_slug("hero");
                $lasttitle = end($heromenu)->title;
                foreach ($heromenu as $item) {
                    ?>
                        <a href="<?php echo $item->url?>"><i><?php echo $item->title?></i></a><?php if ($item->title != $lasttitle): ?><span>, </span><?php endif; ?>
                    <?php    
                }
                ?>and other community organizing at and around the Claremont Colleges.
        </p>
    </div>
    <div class="lg:w-[40%] flex-shrink-0 flex items-center max-w-md mx-auto relative mt-8 lg:mt-0">
        <div class="absolute top-0 left-1/4 w-3/4 bg-tdark h-full" id="issue-promo-back"></div>
        <style>
            #issue-promo-back:before {
                content: "";
                transform: skewX(-8deg) translateX(-50%);
                position: absolute;
                top: 0;
                left: 0;
                width: 25%;
                height: 100%;
                background-color: #111111;
            }
        </style>
        <img src="<?php echo get_template_directory_uri() . "/img/issue1.png" ?>" alt="" class="w-2/5 sm:w-1/2 flex-shrink- pr-4 relative py-4 block">
        <div class="w-3/5 sm:w-1/2 flex-shrink-0 text-white relative pr-4 py-8">
            <p class="text-[10px] uppercase tracking-[1px] mb-2">
                <span class="font-bold">Issue 1</span> / Spring 2023
            </p>
            <p class="text-2xl font-garamond font-medium mb-2">Setting the Standard</p>
            <p class="opacity-75 text-xs mb-4">How Pomona workers won a historic $25 minimum wage; a new union in Claremont; Tony Hoang on organizing</p>
            <a href="" class="bg-tred py-2 px-3 text-xs uppercase text-white rounded tracking-[1px] font-bold">Read issue 1</a>
        </div>
    </div>
</div>
<div class="max-w-2xl px-4 mx-auto mt-16">
<?php if (have_posts()): while (have_posts()): the_post(); get_template_part("template_parts/post"); endwhile; endif; ?>
</div>
<?php get_footer();?>