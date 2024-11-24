<?php
/* Template Name: Sponsorer */
get_header();
?>

<div class="container mx-auto max-w-8xl h-[90vh] flex flex-col items-center justify-center">
    <h2 class="flex justify-center lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-10">
        Sponsorer
    </h2>
    <div>
        <div class="flex flex-col flex-wrap items-center justify-center gap-6 sm:flex-row">
            <?php
            // Dynamické načítání sponzorů pomocí ACF nebo vlastního post typu
            // V tomto případě použijeme pole s názvy obrázků jako ukázku
            $sponsors = [
                'bravida.png', 'cityOptik.png', 'nemByg.png', 'remaTarp.png', 'pGreens.png',
                'conixi.png', 'sportDirect.png', 'elSalg.png', 'skiltefabriken.png', 'toyota.png',
                'proRepubliQ.png', 'lolk.png', 'qubiqa.png', 'phonixTag.png', 'remaSonderris.png', 'vejers.png'
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" 
                     alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" 
                     class="object-contain w-56 h-auto">
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
