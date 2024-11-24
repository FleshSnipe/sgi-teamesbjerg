<?php
/* Template Name: Klubben */
get_header();
?>
<style>
    .video-container {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%; /* Kontejner zabírá celou šířku stránky */
        max-width: 1200px; /* Maximální šířka kontejneru */
        margin: 0 auto; /* Centrovat na stránce */
        padding-bottom: 4rem;
    }

    .video-container iframe {
        width: 100%; /* Video zabírá celou šířku kontejneru */
        max-width: 1200px; /* Zajistit, že video nepřesáhne max velikost */
        height: auto; /* Zachovat poměr stran */
        aspect-ratio: 16 / 9; /* Poměr stran videa */
    }

    /* Responzivní styly pro menší obrazovky */
    @media (max-width: 768px) {
        .video-container {
            padding-bottom: 2rem; /* Menší mezera na menších obrazovkách */
        }

        .video-container iframe {
            max-width: 90%; /* Zmenšení maximální šířky videa */
        }
    }

    @media (max-width: 480px) {
        .video-container {
            padding-bottom: 1rem; /* Ještě menší mezera na velmi malých obrazovkách */
        }

        .video-container iframe {
            max-width: 100%; /* Plná šířka videa na malých obrazovkách */
        }
    }
</style>


<div class="container mx-auto max-w-7xl lg:h-[90vh] lg:py-0 py-20 flex justify-center">
        <div class="flex flex-col items-center justify-center lg:flex-row md:flex-col">
            <div class="max-w-sm px-5 lg:max-w-xl md:max-w-lg lg:px-0 md:px-0">
                <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] lg:mb-8 mb-4">
                    Vores historie
                </h1>
                <p class="text-xs lg:text-base md:text-sm">
                    I 2022 blev der taget et aktivt valg om at sikre kvaliteten af drengehåndbolden i Esbjerg. I årene efter Corona havde drengehåndbold haft en hård skæbne. Initiativet blev taget for at lave denne skæbne om. Det skete med et holdfællesskab hos klubberne Team Esbjerg HK og SGI Håndbold. Det første år var svært og en plads i U17 A-rækken gjorde det ikke så attraktivt at være en del af. Vi var bevidste om, at det var en start og projektet skulle bruge tid til at komme på benene. Vi er nu i gang med andet år og står nu med to hold: U17 i U17 2. Division og U19 1. Division. Holdene består af mange spillere fra selv samme hold, men har også fået tilgang siden hen. Det fortæller kort og godt, hvordan vores holdning er: fokus på et sportsligt setup, der udvikler alle. Det har siden hen givet flere af vores spillere mulighed for at vise sig frem til regional talenttræning, national talentræning og en udtagelse til landsholdssamling. Kursen er sat og vi har ikke planer om at ændre den. Vi vil have drengehåndbolden i Esbjerg!
                </p>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logoCombined.png" alt="logoCombined" class="h-auto lg:w-[650px] md:w-[550px] w-[450px]">
            </div>
        </div>
    </div>
    <div class="container mx-auto max-w-7xl">
        <div class="video-container">
            <iframe 
                class="video-frame" 
                src="https://www.youtube.com/embed/u2XTcLqXG0Q" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    </div>

<?php get_footer(); ?>
