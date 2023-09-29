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
            <p class="font-garamond font-medium hidden lg:block">Documenting and amplifying 5C organizing</p>
            <div class="flex items-center h-full ml-auto">
                <a href="" class="ml-6 opacity-50 hover:opacity-100 font-medium text-sm hidden lg:block">About</a>
                <a href="" class="ml-6 opacity-50 hover:opacity-100 font-medium text-sm hidden lg:block">Standards</a>
                <a href="" class="ml-6 opacity-50 hover:opacity-100 font-medium text-sm hidden lg:block">Join</a>
                <a href="" class="ml-6 rounded font-bold tracking-[1px] text-white text-xs px-4 py-3 bg-tred uppercase hidden sm:block">Get Issue 1</a>
            </div>
        </div>
    </div>
    <div class="w-full flex items-center justify-center h-12">
        <a href="" class="mx-4 opacity-50 hover:opacity-100 text-sm">Labor</a>
        <a href="" class="mx-4 opacity-50 hover:opacity-100 text-sm">Palestine</a>
        <a href="" class="mx-4 opacity-50 hover:opacity-100 text-sm">Abolition</a>
        <a href="" class="mx-4 opacity-50 hover:opacity-100 text-sm">Commentary</a>
        <a href="" class="mx-4 opacity-50 hover:opacity-100 text-sm">Print</a>
    </div>