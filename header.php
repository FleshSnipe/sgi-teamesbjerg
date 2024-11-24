<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        * {
            font-family: Poppins, sans-serif;
        }
        a.active::after {
            width: 100%;
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="bg-[#e3252d] lg:sticky static top-0 z-50 opacity-[90%]">
        <div class="container py-4 mx-auto max-w-7xl lg:py-0">
            <div class="relative flex items-center justify-end py-4 pr-4 lg:justify-between lg:pr-0">
                <!-- Logo -->
                <div class="absolute transform -translate-x-1/2 lg:static left-1/2 lg:translate-x-0 lg:pr-0 pr-28">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/teamEsbjerg.png" alt="teamEsbjergHandball" class="w-auto h-20">
                </div>
                <div class="hidden lg:block">
                    <ul class="flex space-x-16 text-lg font-medium text-white">
                        <li>
                            <a href="<?php echo home_url('/'); ?>" class="relative after:content-[''] after:absolute after:h-[2px] after:w-0 after:bg-white after:bottom-[-16px] after:left-1/2 after:-translate-x-1/2 after:origin-center hover:after:w-full after:transition-all after:duration-300 active:after:w-full focus:after:w-full">
                                Forside
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/nyheder/'); ?>" class="relative after:content-[''] after:absolute after:h-[2px] after:w-0 after:bg-white after:bottom-[-16px] after:left-1/2 after:-translate-x-1/2 after:origin-center hover:after:w-full after:transition-all after:duration-300 focus:after:w-full active:after:w-full">
                                Nyheder
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/klubben/'); ?>" class="relative after:content-[''] after:absolute after:h-[2px] after:w-0 after:bg-white after:bottom-[-16px] after:left-1/2 after:-translate-x-1/2 after:origin-center hover:after:w-full after:transition-all after:duration-300 focus:after:w-full active:after:w-full">
                                Klubben
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/sponsorer/'); ?>" class="relative after:content-[''] after:absolute after:h-[2px] after:w-0 after:bg-white after:bottom-[-16px] after:left-1/2 after:-translate-x-1/2 after:origin-center hover:after:w-full after:transition-all after:duration-300 focus:after:w-full active:after:w-full">
                                Sponsorer
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo home_url('/kontakt/'); ?>" class="relative after:content-[''] after:absolute after:h-[2px] after:w-0 after:bg-white after:bottom-[-16px] after:left-1/2 after:-translate-x-1/2 after:origin-center hover:after:w-full after:transition-all after:duration-300 focus:after:w-full active:after:w-full">
                                Kontakt us
                            </a>
                        </li>
                    </ul>
                </div>                                         
                <div class="absolute transform -translate-x-1/2 lg:static left-1/2 lg:translate-x-0 lg:pl-0 pl-28">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sgiHandball.png" alt="sgiHandball" class="w-auto h-20">
                </div>
                <div class="block lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                    </svg>                      
                </div>
            </div>
        </div>
    </div>