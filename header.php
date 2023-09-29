<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, target-densityDpi=device-dpi' name='viewport'/>
    <title><?php echo wp_get_document_title(); ?></title>
<?php
date_default_timezone_set("America/New_York");
wp_head();
?>
</head>
<body>
    <div class="w-full sticky top-0 left-0 border-t-[10px] border-t-tred h-[72px] bg-white border-b z-20">
        <div class="absolute top-0 w-full h-full flex items-center justify-center">
            <a href="<?php echo home_url("/"); ?>" class="inline-block -mt-2 h-9 relative z-40">
                <img src="<?php echo get_template_directory_uri() . "/img/header-logo.svg" ?>" alt="" class="h-full block">
            </a>
        </div>
        <div class="max-w-7xl px-4 mx-auto flex items-center h-full relative z-30">
            <p class="font-garamond font-medium">Documenting and amplifying 5C organizing</p>
            <div class="flex items-center h-full ml-auto">
                <a href="" class="ml-8 opacity-50 font-medium text-sm">About Us</a>
                <a href="" class="ml-8 opacity-50 font-medium text-sm">Editorial standards</a>
                <a href="" class="ml-8 rounded font-bold tracking-[2px] text-white text-xs px-4 py-3 bg-tred uppercase">Join Us</a>
            </div>
        </div>
    </div>
    <div class="w-full flex items-center justify-center h-12">
        <a href="" class="mx-4 opacity-50 text-sm">Labor</a>
        <a href="" class="mx-4 opacity-50 text-sm">Palestine</a>
        <a href="" class="mx-4 opacity-50 text-sm">Abolition</a>
        <a href="" class="mx-4 opacity-50 text-sm">Commentary</a>
        <a href="" class="mx-4 opacity-50 text-sm">Print</a>
    </div>