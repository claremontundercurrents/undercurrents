<?php get_header();?>
<?php if (!is_paged()): ?>
<?php if (get_theme_mod("uc-show-featured", false)): ?>
<div class="max-w-7xl px-4 mx-auto mt-16 mb-32 relative">
    <div class="grid md:grid-cols-3 gap-x-6">
        <?php
        $featured_posts = get_posts(array("numberposts" => 3, "category_name" => "featured"));
        foreach ($featured_posts as $featured_post): ?>
        <a class="block mb-16" href="<?php echo get_the_permalink($featured_post) ?>">
            <?php echo get_the_post_thumbnail($featured_post, "full", array("class" => "w-full aspect-[1.25] object-cover block mb-8")) ?>
            <div class="flex items-center mb-4 text-xs">
                <?php
                $tags = get_the_tags($featured_post);
                if ($tags) {
                    foreach ($tags as $tag) {
                        ?>
                        <p class="font-bold text-tdarkred tracking-[1px] mr-2 uppercase">
                            <?php echo $tag->name; ?>
                        </p>
                        <?php
                    }
                }
                ?>
                <p class="font-medium opacity-50">
                    <?php echo get_the_date("F j, Y", $featured_post); ?>
                </p>
            </div>
            <h3 class="font-garamond font-semibold text-2xl sm:text-[28px] mb-4 leading-tight sm:leading-[32px]">
                <?php echo get_the_title($featured_post); ?>
            </h3>
            <p class="opacity-50">
                <?php echo get_the_excerpt($featured_post); ?>
            </p>
        </a>        
        <?php
        endforeach;
        ?>
    </div>
</div>
<?php endif; ?>
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
                <span class="font-bold"><?php echo get_theme_mod("uc-mag-issue") ?></span> / <?php echo get_theme_mod("uc-mag-season") ?>
            </p>
            <p class="text-2xl font-garamond font-medium mb-2"><?php echo get_theme_mod("uc-mag-title") ?></p>
            <p class="opacity-75 text-xs mb-4"><?php echo get_theme_mod("uc-mag-description") ?></p>
            <a href="<?php echo get_theme_mod("uc-mag-cta-url") ?>" class="bg-tred py-2 px-3 text-xs uppercase text-white rounded tracking-[1px] font-bold"><?php echo get_theme_mod("uc-mag-cta-text") ?></a>
        </div>
    </div>
</div>
<div class="max-w-7xl px-4 mx-auto lg:flex mt-16 pt-16">
    <div class="lg:w-2/3 lg:pr-8 max-w-xl mx-auto md:max-w-3xl lg:max-w-full lg:mx-0">
        <h2 class="font-garamond text-2xl font-semibold mb-12">Latest news</h2>
        <div class="md:flex">
            <div class="md:w-1/2 md:pr-8">
                <?php
                $latest_post = end(get_posts(array("numberposts" => 1, "category_name" => "news")));
                ?>
                <a class="block mb-16" href="<?php echo get_the_permalink($latest_post) ?>">
                    <?php echo get_the_post_thumbnail($latest_post, "full", array("class" => "w-full aspect-[1.25] object-cover block mb-8")) ?>
                    <div class="flex items-center mb-4 text-xs flex-wrap">
                        <?php
                        $tags = get_the_tags($latest_post);
                        if ($tags) {
                            foreach ($tags as $tag) {
                                ?>
                                <p class="font-bold text-tdarkred tracking-[1px] mr-2 uppercase">
                                    <?php echo $tag->name; ?>
                                </p>
                                <?php
                            }
                        }
                        ?>
                        <p class="font-medium opacity-50">
                            <?php echo get_the_date("F j, Y", $latest_post); ?>
                        </p>
                    </div>
                    <h3 class="font-garamond font-semibold text-2xl sm:text-[28px] mb-4 leading-tight sm:leading-[32px]">
                        <?php echo get_the_title($latest_post); ?>
                    </h3>
                    <p class="opacity-50">
                        <?php echo get_the_excerpt($latest_post); ?>
                    </p>
                </a>
            </div>
            <div class="md:w-1/2">
                <?php
                $next_three_news = get_posts(array("numberposts" => 4, "category_name" => "news", "exclude" => array($latest_post->ID)));
                foreach ($next_three_news as $three_post):
                ?>
                    <a class="flex mb-8" href="<?php echo get_the_permalink($three_post) ?>">
                        <div class="pr-4">
                            <div class="flex items-center mb-4 text-xs flex-wrap">
                                <?php
                                $tags = get_the_tags($three_post);
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        ?>
                                        <p class="font-bold text-tdarkred tracking-[1px] mr-2 uppercase">
                                            <?php echo $tag->name; ?>
                                        </p>
                                        <?php
                                    }
                                }
                                ?>
                                <p class="font-medium opacity-50">
                                    <?php echo get_the_date("F j, Y", $three_post); ?>
                                </p>
                            </div>
                            <h3 class="font-garamond text-xl leading-tight">
                                <?php echo get_the_title($three_post); ?>
                            </h3>
                        </div>
                        <?php echo get_the_post_thumbnail($three_post, "full", array("class" => "w-28 h-28 object-cover flex-shrink-0 ml-auto")) ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="lg:w-1/3 lg:pl-8 lg:border-l max-w-sm mx-auto lg:max-w-full lg:mx-0 pt-8 mt-8 border-t lg:border-t-0 lg:pt-0 lg:mt-0">
        <h2 class="font-garamond text-2xl font-semibold mb-12">Commentary</h2>
        <?php
        $commentary_posts = get_posts(array("numberposts" => 2, "category_name" => "commentary"));
        foreach ($commentary_posts as $commentary_post):
        ?>
            <a class="block mb-12" href="<?php echo get_the_permalink($commentary_post) ?>">
                <?php echo get_the_post_thumbnail($commentary_post, "full", array("class" => "w-40 h-40 object-cover block mb-6")) ?>
                <div class="flex items-center mb-4 text-xs flex-wrap">
                    <p class="font-bold text-tdarkred tracking-[1px] mr-2 uppercase">
                        <?php
                        $coauthors = get_coauthors($commentary_post->ID);
                        $last = end($coauthors)->ID;
                        foreach ($coauthors as $author) {
                            echo $author->display_name;
                            if ($author->ID != $last) {
                                echo ", ";
                            }
                        }
                        ?>
                    </p>
                    <p class="font-medium opacity-50">
                        <?php echo get_the_date("F j, Y", $commentary_post); ?>
                    </p>
                </div>
                <h3 class="font-garamond text-2xl font-semibold leading-[28px] mb-4">
                    <?php echo get_the_title($commentary_post); ?>
                </h3>
                <p class="opacity-50 text-sm">
                    <?php echo get_the_excerpt($commentary_post); ?>
                </p>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<?php else: ?>
    <h1 class="text-4xl mb-4 text-center mt-16"><i class="font-garamond">Page:</i> <?php echo get_query_var('paged'); ?></h1>
<?php endif; ?>
<div class="max-w-2xl px-4 mx-auto mt-16">
    <?php if (!is_paged()): ?>
        <h2 class="font-garamond text-2xl font-semibold mb-12">More</h2>
    <?php endif; ?>
<?php if (have_posts()): while (have_posts()): the_post(); if (is_paged() || (get_the_ID() != $latest_post->ID && !in_array(get_the_ID(), array_map(fn($post): int => $post->ID, $next_three_news)) && !in_array(get_the_ID(), array_map(fn($post):int => $post->ID, $commentary_posts)))) { get_template_part("template_parts/post"); } endwhile; endif; ?>
<div class="mb-16 border-t pt-8 mt-8">
    <?php the_posts_pagination()?>
</div>
</div>
<?php get_footer();?>