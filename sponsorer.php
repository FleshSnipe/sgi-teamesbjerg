<?php
/* Template Name: Sponsorer */
get_header();
?>
<style>
    /* Kontejner pro celkový obsah sponzorů */
.container {
    margin-left: auto;
    margin-right: auto;
    max-width: 1920px; /* max-w-8xl */
    display: flex;
    flex-direction: column;
    padding-bottom: 16px; /* pb-16 */
}

@media (min-width: 768px) {
    .container {
        padding-bottom: 40px; /* md:pb-40 */
    }
}

@media (min-width: 1024px) {
    .container {
        padding-bottom: 64px; /* lg:pb-64 */
    }
}

/* Nadpis */
h2 {
    display: flex;
    justify-content: center;
    font-size: 1.5rem; /* text-2xl */
    font-weight: bold;
    color: #151517;
    padding-bottom: 10px;
}

@media (min-width: 768px) {
    h2 {
        font-size: 1.875rem; /* md:text-3xl */
    }
}

@media (min-width: 1024px) {
    h2 {
        font-size: 2.25rem; /* lg:text-4xl */
    }
}

/* Flex kontejner pro sekce sponzorů */
.flex-wrap {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
    flex-direction: column;
}

@media (min-width: 640px) {
    .flex-wrap {
        flex-direction: row; /* sm:flex-row */
    }
}

/* Styly pro obrázky sponzorů */
.sponsor-img {
    width: 50%; /* w-1/2 */
    height: auto; /* h-auto */
    object-fit: contain; /* object-contain */
    max-width: 200px; /* max-w-[200px] */
}

@media (min-width: 640px) {
    .sponsor-img {
        width: 33.3333%; /* sm:w-1/3 */
    }
}

@media (min-width: 768px) {
    .sponsor-img {
        width: 25%; /* md:w-1/4 */
    }
}

@media (min-width: 1024px) {
    .sponsor-img {
        width: 20rem; /* lg:w-80 (odpovídá 320px v CSS) */
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
