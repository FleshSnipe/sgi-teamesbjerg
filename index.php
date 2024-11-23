<?php
/*
Template Name: Forside
*/


get_header();
?>

<div>
    <div class="relative w-full lg:h-[90vh] md:h-[60vh] h-[40vh] overflow-hidden">
        <div id="carousel" class="flex transition-transform duration-700 ease-in-out" style="transform: translateX(0);">
            <?php 
            // Zobrazení obrázků pro carousel
            for ($i = 1; $i <= 5; $i++) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/image<?php echo $i; ?>.jpg" alt="Slide <?php echo $i; ?>" class="w-full h-full object-cover">
            <?php endfor; ?>
        </div>

        <!-- Text uprostřed obrázku -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-bold text-center block lg:w-full md:w-full w-[20rem]">
            <div class="lg:text-5xl md:text-3xl text-xl">
                <h1>Team Esbjerg – SGI Håndbold U19 / U17</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto lg:max-w-3xl md:max-w-xl max-w-[250px] py-20">
    <div class="flex justify-center lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-8">
        <h2>Nyheder</h2>
    </div>
    <div class="space-y-8 flex flex-col items-center">
        <?php
        // Načtení nejnovějších příspěvků
        $news_query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3,
        ]);

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <div class="flex lg:flex-row md:flex-row flex-col items-center justify-center shadow-lg rounded-lg">
                    <?php if (has_post_thumbnail()) : ?>
                        <div>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="rounded-l-lg w-auto lg:h-full md:h-[220px] h-[250px]">
                        </div>
                    <?php endif; ?>
                    <div class="space-y-4 lg:pl-20 pl-8 lg:py-0 md:py-0 py-12">
                        <h3 class="lg:text-xl md:text-lg text-sm font-medium">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-gray-500 lg:text-base md:text-base text-xs">
                            <?php echo get_the_date(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
    <div class="pt-8">
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="bg-[#e3252d] text-white lg:text-base text-sm lg:py-4 py-3 lg:px-5 px-4 rounded-lg">Alle Nyheder</a>
    </div>
</div>

<div class="bg-[#e3252d]">
    <div class="container mx-auto max-w-7xl py-20">
        <div class="flex flex-col items-center">
            <h2 class="flex justify-center lg:text-4xl md:text-3xl text-2xl font-bold text-white pb-8">
                Socials
            </h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/wholeTeam.png" alt="wholeTeam" class="h-auto w-[75%]">
            <div class="flex">
                <div class="flex space-x-4">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebookIcon.png" alt="facebookIcon" class="lg:h-16 h-12 w-auto hover:scale-110 transition-transform duration-300 ease-in-out">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/instagramIcon.png" alt="instagramIcon" class="lg:h-16 h-12 w-auto hover:scale-110 transition-transform duration-300 ease-in-out">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto max-w-8xl py-20">
    <h2 class="flex justify-center lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-2">
        Sponsorer
    </h2>
    <div>
        <div class="flex flex-wrap justify-center items-center gap-6">
            <?php
            // Vytvoř seznam sponzorů (lze upravit na dynamické načítání z ACF nebo custom post types)
            $sponsors = [
                'bravida.png', 'cityOptik.png', 'nemByg.png', 'remaTarp.png', 'pGreens.png',
                'conixi.png', 'sportDirect.png', 'elSalg.png', 'skiltefabriken.png', 'toyota.png',
                'proRepubliQ.png', 'lolk.png', 'qubiqa.png', 'phonixTag.png', 'remaSonderris.png', 'vejers.png',
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" class="w-56 h-auto object-contain">
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="bg-[#e3252d]">
    <div class="container mx-auto lg:max-w-4xl md:max-w-3xl py-28 px-8">
        <div class="bg-white rounded-lg flex flex-col items-center">
            <div class="space-y-6 lg:py-28 md:py-20 py-12 flex flex-col items-center">
                <h3 class="flex justify-center lg:text-4xl md:text-3xl text-xl font-bold text-[#151517] text-center">
                    Opdateringer til nyhedsbrev
                </h3>
                <p class="text-gray-500 lg:text-base md:text-base text-xs lg:w-full md:w-full w-[17rem] text-center">
                    Indtast din e-mailadresse nedenfor for at abonnere på vores nyhedsbrev!
                </p>
                <div class="pt-4 flex justify-center space-x-4">
                    <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 lg:text-sm md:text-sm text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-[14rem] md:w-[14rem] w-[10rem] pl-4" placeholder="Your email address">
                    <button class="bg-[#e3252d] text-white lg:text-base text-sm lg:py-4 py-3 lg:px-5 px-4 rounded-lg">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
