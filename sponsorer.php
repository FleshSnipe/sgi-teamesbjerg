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
    padding-top: 2rem; /* default for pt-16 */
    }

    @media (min-width: 768px) {
    .responsive-all {
        padding-bottom: 5rem; /* equivalent to pb-40 on md */
        padding-top: 3rem; /* equivalent to pt-40 on md */
    }
    }

    @media (min-width: 1024px) {
    .responsive-all {
        padding-bottom: 6rem; /* equivalent to pb-64 on lg */
        padding-top: 4rem; /* equivalent to pt-64 on lg */
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

    .container {
    margin: 0 auto;
    max-width: 1200px; /* max-w-7xl odpovídá této velikosti */
}

    .content-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 5rem; /* pt-20 */
        padding-bottom: 4rem; /* pb-16 */
    }

    .headline {
        font-size: 2rem; /* text-2xl */
        font-weight: bold; /* font-bold */
        color: #151517;
        margin-bottom: 1rem; /* mb-4 */
        padding-right:1rem;
        padding-left:1rem;

        /* Větší velikosti pro větší obrazovky */
        @media (min-width: 768px) {
            font-size: 1.875rem; /* md:text-3xl */
        }
        @media (min-width: 1024px) {
            font-size: 2.25rem; /* lg:text-4xl */
            margin-bottom: 2rem; /* lg:mb-8 */
        }
    }

    .text-and-image-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;

        /* Přepnutí na řádkové zarovnání pro větší obrazovky */
        @media (min-width: 1024px) {
            flex-direction: row;
            gap: 1rem; /* space-x-4 */
        }
    }

    .description {
        max-width: 40rem; /* max-w-xl */
        padding-left: 1rem; /* px-4 */
        padding-right: 1rem; /* px-4 */
        font-size: 0.875rem; /* text-sm */
        line-height: 1.5;

        /* Větší velikosti pro větší obrazovky */
        @media (min-width: 768px) {
            font-size: 1rem; /* md:text-base */
        }
        @media (min-width: 1024px) {
            font-size: 1.125rem; /* lg:text-lg */
            padding: 0; /* lg:px-0 */
        }
    }

    .contact-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.5rem; /* space-y-2 */
    }

    .contact-image {
        height: 299px; /* h-[299px] */
        width: auto; /* w-auto */
    }

    .contact-name {
        font-size: 1.25rem; /* text-xl */
        font-weight: bold; /* font-bold */
        color: #151517;

        /* Větší velikosti pro větší obrazovky */
        @media (min-width: 768px) {
            font-size: 1.5rem; /* md:text-2xl */
        }
        @media (min-width: 1024px) {
            font-size: 1.875rem; /* lg:text-3xl */
        }
    }

    .contact-email,
    .contact-phone {
        font-size: 1.125rem; /* text-lg */
        font-weight: 500; /* font-medium */
    }


</style>
<div class="container">
    <div class="content-wrapper">
        <h1 class="headline">
            Vil du være vores sponsor?
        </h1>
        <div class="text-and-image-wrapper">
            <p class="description">
                Vi går op i at sikre et super samarbejde for begge parter. Der er mange måder at skabe værdi på og vi vil gerne hjælpe jer til at skabe salg, eksponering og meget mere.<br><br>
                Vi har en tilskuerebase der favner forholdsvis bredt. Den består primært af unge, kerne familien og bedsteforældre. Derudover har vi kontakt til mange forskellige virksomheder i Esbjerg-området. Hvis det lyder som jeres målgruppe, så vil vi meget gerne tage en snak med jer for at se om et samarbejde vil give mening.<br><br>
                Skriv en mail eller en besked så tager vi en snak om det.
            </p>
            <div class="contact-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/images/coach.jpg" alt="U19 Cheftræner" class="contact-image">
                <h2 class="contact-name">Morten Laugesen Jørgensen</h2>
                <p class="contact-email">mortenlaugesen@outlook.com</p>
                <p class="contact-phone">+45 31 67 09 95</p>
            </div>
        </div>
    </div>
</div>
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
