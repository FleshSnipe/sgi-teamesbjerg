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
                <img src="<?php echo get_template_directory_uri(); ?>/images/image<?php echo $i; ?>.jpg" alt="Slide <?php echo $i; ?>" class="object-cover w-full h-full">
            <?php endfor; ?>
        </div>

        <!-- Text uprostřed obrázku -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-bold text-center block lg:w-full md:w-full w-[20rem]">
            <div class="text-xl lg:text-5xl md:text-3xl">
                <h1>Team Esbjerg – SGI Håndbold U19 / U17</h1>
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto lg:max-w-3xl md:max-w-xl max-w-[250px] py-20">
    <div class="flex justify-center lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-8">
        <h2>Nyheder</h2>
    </div>
    <div class="flex flex-col items-center space-y-8">
        <?php
        // Načtení nejnovějších příspěvků
        $news_query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3,
        ]);

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <div class="flex flex-col items-center justify-center rounded-lg shadow-lg lg:flex-row md:flex-row">
                    <div class="w-full h-full lg:w-1/2 md:w-1/2">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-full rounded-l-lg">
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col items-center justify-center py-12 pl-8 space-y-4 lg:pl-20 lg:py-0 md:py-0 div-in-center">
                        <h3 class="text-sm font-medium lg:text-xl md:text-lg news-post-text">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-xs text-gray-500 lg:text-base md:text-base greyy news-post-text">
                            <?php echo get_the_date(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
    <div class="pt-20 flex justify-center">
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="bg-[#e3252d] text-white font-medium lg:text-base text-sm lg:py-4 py-3 lg:px-5 px-4 rounded-lg">Alle Nyheder</a>
    </div>
</div>

<div class="bg-[#e3252d]">
    <div class="container py-20 mx-auto max-w-7xl">
        <div class="flex flex-col items-center">
            <h2 class="flex justify-center pb-8 text-2xl font-bold text-white lg:text-4xl md:text-3xl">
                Socials
            </h2>
            <img src="<?php echo get_template_directory_uri(); ?>/images/wholeTeam.png" alt="wholeTeam" class="h-auto w-[75%]">
            <div class="flex">
                <div class="flex space-x-4">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebookIcon.png" alt="facebookIcon" class="w-auto h-12 transition-transform duration-300 ease-in-out lg:h-16 hover:scale-110">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/instagramIcon.png" alt="instagramIcon" class="w-auto h-12 transition-transform duration-300 ease-in-out lg:h-16 hover:scale-110">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-20 mx-auto max-w-8xl">
    <h2 class="flex justify-center lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-2">
        Sponsorer
    </h2>
    <div>
        <div class="flex flex-wrap items-center justify-center gap-6">
            <?php
            // Vytvoř seznam sponzorů (lze upravit na dynamické načítání z ACF nebo custom post types)
            $sponsors = [
                'bravida.png', 'cityOptik.png', 'nemByg.png', 'remaTarp.png', 'pGreens.png',
                'conixi.png', 'sportDirect.png', 'elSalg.png', 'skiltefabriken.png', 'toyota.png',
                'proRepubliQ.png', 'lolk.png', 'qubiqa.png', 'phonixTag.png', 'remaSonderris.png', 'vejers.png',
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" class="object-contain w-56 h-auto">
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="bg-[#e3252d]">
    <div class="container px-8 mx-auto lg:max-w-4xl md:max-w-3xl py-28">
        <div class="flex flex-col items-center bg-white rounded-lg">
            <div class="flex flex-col items-center py-12 space-y-6 lg:py-28 md:py-20">
                <h3 class="flex justify-center lg:text-4xl md:text-3xl text-xl font-bold text-[#151517] text-center">
                    Opdateringer til nyhedsbrev
                </h3>
                <p class="text-gray-500 lg:text-base md:text-base text-xs lg:w-full md:w-full w-[17rem] text-center">
                    Indtast din e-mailadresse nedenfor for at abonnere på vores nyhedsbrev!
                </p>
                <div class="flex justify-center pt-4 space-x-4">
                    <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 lg:text-sm md:text-sm text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block lg:w-[14rem] md:w-[14rem] w-[10rem] pl-4" placeholder="Your email address">
                    <button class="bg-[#e3252d] text-white lg:text-base text-sm lg:py-4 py-3 lg:px-5 px-4 rounded-lg">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
   .news-post-text {
    display: flex;            /* Používáme flexbox pro centrování */
    margin-right: 1rem;       /* Přidá mezery pod text */
    height: 100%;             /* Aby text byl centrován na celé výšce, pokud je to potřeba */
    }

    /* Responzivní změna pro malé obrazovky (do 600px) */
    @media (max-width: 600px) {
        .news-post-text {
            margin-right: 0; /* Odstranění mezery na pravé straně na velmi malých obrazovkách */
            align-items: center;      /* Zarovnání textu na střed na ose Y */
            justify-items: center;
        }
    }

    /* Responzivní změna pro střední obrazovky (mezi 600px a 768px) */
    @media (max-width: 768px) {
        .news-post-text {
            margin-right: 3rem; /* Mezery zůstávají na středních obrazovkách */
        }
    }

    .greyy{
        display:flex;
        color: #6b7280;           /* Šedá barva pro text */
        justify-items: left;
    }

    .div-in-center{
        padding-left:2rem;
        padding-top:2rem;
        padding-bottom:2rem;
    }

    /* Ostatní styly pro stránkování */
    .page-numbers {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 35px;
        height: 35px;
        background-color: white;
        color: black;
        border-radius: 50%;
        text-decoration: none;
        margin: 0 5px;
    }

    .page-numbers.current {
        background-color: #e3252d;
        color: white;
    }

    .page-numbers:hover {
        text-decoration: underline;
    }

</style>

<?php get_footer(); ?>
