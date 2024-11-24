<?php
/* Template Name: Sponsorer */
get_header();
?>
<style>
    /* Kontejner hlavní sekce */
    .sponsors-container {
        display: flex;
        flex-direction: column;
        padding-bottom: 16px;
        margin: 0 auto;
        max-width: 1920px; /* max-w-8xl */
    }

    @media (min-width: 768px) {
        .sponsors-container {
            padding-bottom: 40px; /* md:pb-40 */
        }
    }

    @media (min-width: 1024px) {
        .sponsors-container {
            padding-bottom: 64px; /* lg:pb-64 */
        }
    }

    /* Nadpis sekce */
    .sponsors-heading {
        display: flex;
        justify-content: center;
        font-weight: bold;
        font-size: 1.5rem; /* text-2xl */
        color: #151517;
        padding-bottom: 10px;
    }

    @media (min-width: 768px) {
        .sponsors-heading {
            font-size: 1.875rem; /* md:text-3xl */
        }
    }

    @media (min-width: 1024px) {
        .sponsors-heading {
            font-size: 2.25rem; /* lg:text-4xl */
        }
    }

    /* Flex kontejner pro sponzory */
    .sponsors-wrapper {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        gap: 1.5rem;
    }

    /* Obrázky sponzorů */
    .sponsors {
        width: 50%; /* w-1/2 */
        height: auto;
        object-fit: contain;
        max-width: 200px;
    }

    @media (min-width: 640px) {
        .sponsors {
            width: 33.3333%; /* sm:w-1/3 */
        }
    }

    @media (min-width: 768px) {
        .sponsors {
            width: 25%; /* md:w-1/4 */
        }
    }

    @media (min-width: 1024px) {
        .sponsors {
            width: 20rem; /* lg:w-80 */
        }
    }
</style>

<div class="container flex flex-col pb-16 mx-auto max-w-8xl lg:pb-64 md:pb-40">
    <h2 class="flex justify-center lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-10">
    Sponsorer
    </h2>
    <div>
        <div class="flex flex-col flex-wrap items-center justify-center gap-6 sm:flex-row">
            <?php
            // Dynamické načítání sponzorů
            $sponsors = [
                'bravida.png', 'cityOptik.png', 'nemByg.png', 'remaTarp.png', 'pGreens.png',
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" 
                     alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" 
                     class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-80 h-auto object-contain max-w-[200px] sponsors">
            <?php endforeach; ?>
        </div>
        <div class="flex flex-col flex-wrap items-center justify-center gap-6 sm:flex-row">
            <?php
            // Dynamické načítání sponzorů
            $sponsors = [
                'conixi.png', 'sportDirect.png', 'elSalg.png', 'skiltefabriken.png', 'toyota.png',
                'proRepubliQ.png', 'lolk.png', 'qubiqa.png', 'phonixTag.png', 'remaSonderris.png', 'vejers.png'
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" 
                     alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" 
                     class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-80 h-auto object-contain max-w-[200px] sponsors">
            <?php endforeach; ?>
        </div>
        <div class="flex flex-col flex-wrap items-center justify-center gap-6 sm:flex-row">
            <?php
            // Dynamické načítání sponzorů
            $sponsors = [
                'proRepubliQ.png', 'lolk.png', 'qubiqa.png', 'phonixTag.png', 'remaSonderris.png', 'vejers.png'
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" 
                     alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" 
                     class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-80 h-auto object-contain max-w-[200px] sponsors">
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
