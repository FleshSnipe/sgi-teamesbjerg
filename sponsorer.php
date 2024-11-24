<?php
/* Template Name: Sponsorer */
get_header();
?>
<style>
    .sponsors {
        width: 180px;
        height: auto;
    }

    @media only screen and (max-width: 992px) {
        .sponsors {
            width: 160px;
        }
    }

    @media only screen and (max-width: 768px) {
        .sponsors {
            width: 140px;
        }
    }

    @media only screen and (max-width: 576px) {
        .sponsors {
            width: 120px;
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
                     class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-80 h-auto object-contain max-w-[200px]">
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
                     class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-80 h-auto object-contain max-w-[200px]">
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
                     class="w-1/2 sm:w-1/3 md:w-1/4 lg:w-80 h-auto object-contain max-w-[200px]">
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
