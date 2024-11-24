<?php
/* Template Name: Sponsorer */
get_header();
?>
<style>
    .responsive-all {
        margin-left: auto;
        margin-right: auto;
        max-width: 90rem; /* equivalent to max-w-8xl */
        display: flex;
        flex-direction: column;
        padding-bottom: 4rem; /* default for pb-16 */
        }

    @media (min-width: 768px) {
    .responsive-all {
        padding-bottom: 10rem; /* equivalent to pb-40 on md */
    }
    }

    @media (min-width: 1024px) {
    .responsive-all {
        padding-bottom: 16rem; /* equivalent to pb-64 on lg */
    }
    }


    h2 {
    display: flex;
    justify-content: center;
    font-size: 1.5rem; /* equivalent to text-2xl */
    font-weight: bold;
    color: #151517;
    padding-bottom: 2.5rem; /* equivalent to pb-10 */
    }

    @media (min-width: 768px) {
    h2 {
        font-size: 1.875rem; /* equivalent to text-3xl on md */
    }
    }

    @media (min-width: 1024px) {
    h2 {
        font-size: 2.25rem; /* equivalent to text-4xl on lg */
    }
    }


    /* Flex kontejner pro sekce sponzorů */
    .responsive1 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    gap: 1.5rem; /* equivalent to gap-6 */
    flex-direction: column;
    }

    @media (min-width: 640px) {
    .responsive1 {
        flex-direction: row; /* equivalent to sm:flex-row */
    }
    }


    .sponsors {
    width: 50%; /* equivalent to w-1/2 */
    height: auto;
    object-fit: contain;
    max-width: 200px; /* equivalent to max-w-[200px] */
    }

    @media (min-width: 640px) {
    .sponsors {
        width: 33.33%; /* equivalent to sm:w-1/3 */
    }
    }

    @media (min-width: 768px) {
    .sponsors {
        width: 25%; /* equivalent to md:w-1/4 */
    }
    }

    @media (min-width: 1024px) {
    .sponsors {
        width: 16rem; /* equivalent to lg:w-64 */
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
