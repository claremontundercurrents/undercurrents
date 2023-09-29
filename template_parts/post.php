<a class="flex mb-16" href="<?php the_permalink() ?>">
    <?php echo get_the_post_thumbnail(null, "full", array("class" => "w-60 h-48 object-cover flex-shrink-0")) ?>
    <div class="ml-8">
        <div class="flex items-center mb-4 text-xs">
            <?php
            $tags = get_the_tags();
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
                <?php echo the_date("F j, Y"); ?>
            </p>
        </div>
        <h3 class="font-garamond text-2xl mb-4 leading-[28px]">
            <?php the_title(); ?>
        </h3>
        <p class="text-sm opacity-50">
            <?php echo get_the_excerpt(); ?>
        </p>
    </div>
</a>