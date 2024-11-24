<?php
/* Template Name: Sponsorer */
get_header();
?>
<style>
    .responsive-all {
        display: flex;
        flex-direction: column;
        justify-content: center; /* Zarovnání obsahu na střed na ose Y */
        align-items: center; /* Zarovnání obsahu na střed na ose X */
        height: 90vh; /* Nastavení výšky na 90vh */
        padding-bottom: 16px;
        margin: 0 auto;
        max-width: 1920px; /* max-w-8xl */
    }

    @media (min-width: 768px) {
        .responsive-all {
            padding-bottom: 40px; /* md:pb-40 */
        }
    }

    @media (min-width: 1024px) {
        .responsive-all {
            padding-bottom: 64px; /* lg:pb-64 */
        }
    }

    .responsive-all h2 {
        display: flex;
        justify-content: center;
        font-size: 1.5rem; /* text-2xl */
        font-weight: bold;
        color: #151517;
        padding-bottom: 10px;
    }

    @media (min-width: 768px) {
        .responsive-all h2 {
            font-size: 1.875rem; /* md:text-3xl */
        }
    }

    @media (min-width: 1024px) {
        .responsive-all h2 {
            font-size: 2.25rem; /* lg:text-4xl */
        }
    }

    /* Flex kontejner pro sekce sponzorů */
    .responsive1 {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        gap: 1.5rem;
    }

    @media (min-width: 640px) {
        .responsive1 {
            flex-direction: row;
        }
    }

    /* Obrázky sponzorů */
.sponsors {
    width: 50%; /* Zvýšena šířka oproti původní hodnotě */
    height: auto;
    object-fit: contain;
    max-width: 300px; /* Maximální šířka pro větší obrázky */
}

@media (min-width: 640px) {
    .sponsors {
        width: 50%; /* sm:w-1/2 */
        max-width: 350px; /* Upravena maximální šířka na větších obrazovkách */
        object-fit: contain;
    }
}

@media (min-width: 768px) {
    .sponsors {
        width: 40%; /* md:w-2/5 */
        max-width: 400px; /* Maximální šířka na středních obrazovkách */
        object-fit: contain;
    }
}

@media (min-width: 1024px) {
    .sponsors {
        width: 30%; /* lg:w-1/3 */
        max-width: 450px; /* Maximální šířka na velkých obrazovkách */
        object-fit: contain;
    }
}

</style>

<div class="responsive-all">
    <h2>Sponsorer</h2>
    <div>
        <div class="responsive1">
            <?php
            // Dynamické načítání sponzorů
            $sponsors = [
                'bravida.png', 'cityOptik.png', 'nemByg.png', 'remaTarp.png', 'pGreens.png',
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" 
                     alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" 
                     class="sponsors">
            <?php endforeach; ?>
        </div>
        <div class="responsive1">
            <?php
            // Dynamické načítání sponzorů
            $sponsors = [
                'conixi.png', 'sportDirect.png', 'elSalg.png', 'skiltefabriken.png', 'toyota.png'
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" 
                     alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" 
                     class="sponsors">
            <?php endforeach; ?>
        </div>
        <div class="responsive1">
            <?php
            // Dynamické načítání sponzorů
            $sponsors = [
                'proRepubliQ.png', 'lolk.png', 'qubiqa.png', 'phonixTag.png', 'remaSonderris.png', 'vejers.png'
            ];

            foreach ($sponsors as $sponsor) : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sponsorer/<?php echo $sponsor; ?>" 
                     alt="<?php echo pathinfo($sponsor, PATHINFO_FILENAME); ?>" 
                     class="sponsors">
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
