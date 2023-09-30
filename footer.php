<div class="w-full h-8 bg-black uppercase font-medium tracking-[1px] text-xs text-white flex items-center justify-center">
    <span>Thanks for reading Undercurrents</span>
</div>
<div class="w-full bg-gradient-radial from-[#220000] to-tdark pb-16 lg:pb-0 relative">
    <div class="absolute right-0 top-0 h-full bg-[#222222] w-[calc(50%-500px)] hidden lg:block"></div>
    <div class="max-w-4xl lg:max-w-7xl px-4 mx-auto lg:flex relative">
        <div class="lg:w-[60%] pr-4 py-16 lg:py-32 text-center lg:text-left">
            <img src="<?php echo get_template_directory_uri() . "/img/square-logo.png" ?>" alt="" class="w-16 mb-8 block rounded mx-auto lg:mx-0">
            <p class="font-garamond font-medium text-3xl sm:text-4xl md:text-[45px] !leading-tight hero-text hero-text-light">
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
            <div class="flex justify-center lg:justify-start items-center mt-12">
                <?php
                    $footermenu = get_menu_items_by_registered_slug("footer");
                    $lasttitle = end($footermenu)->title;
                    foreach ($footermenu as $item) {
                        ?>
                        <a href="<?php echo $item->url?>" class="text-white opacity-50 hover:opacity-100 <?php if ($item->title == $lasttitle) {echo "lg:mr-8";} else {echo "mr-8";}?> whitespace-nowrap"><?php echo $item->title?></a>
                        <?php
                    }
                ?>
            </div>
        </div>
        <div class="lg:w-[40%] flex-shrink-0 flex items-center max-w-md mx-auto relative mt-8 lg:mt-0">
            <div class="absolute top-0 left-[40%] w-3/5 bg-[#222222] h-full" id="issue-promo-back-footer"></div>
            <style>
                #issue-promo-back-footer:before {
                    content: "";
                    transform: skewX(-8deg) translateX(-50%);
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 55%;
                    height: 100%;
                    background-color: #222;
                }
            </style>
            <img src="<?php echo get_template_directory_uri() . "/img/issue1.png" ?>" alt="" class="w-2/5 sm:w-1/2 flex-shrink- pr-4 relative py-4 block">
            <div class="w-3/5 sm:w-1/2 flex-shrink-0 text-white relative pr-4 py-8">
                <p class="text-[10px] uppercase tracking-[1px] mb-2">
                    <span class="font-bold"><?php echo get_theme_mod("uc-mag-issue") ?></span> / <?php echo get_theme_mod("uc-mag-season") ?>
                </p>
                <p class="text-2xl font-garamond font-medium mb-2"><?php echo get_theme_mod("uc-mag-title") ?></p>
                <p class="opacity-75 text-xs mb-4"><?php echo get_theme_mod("uc-mag-descript") ?></p>
                <a href="<?php echo get_theme_mod("uc-mag-cta-url") ?>" class="bg-tred py-2 px-3 text-xs uppercase text-white rounded tracking-[1px] font-bold"><?php echo get_theme_mod("uc-mag-cta-text") ?></a>
            </div>
        </div>
    </div>
</div>
</body>