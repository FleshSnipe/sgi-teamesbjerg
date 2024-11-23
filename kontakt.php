<?php
/* Template Name: Kontakt */
get_header();
?>

<div class="container mx-auto max-w-4xl lg:h-[90vh] h-full flex flex-col justify-center lg:py-0 py-20">
    <div class="flex lg:flex-row flex-col justify-between lg:space-y-0 space-y-8">
        <div class="flex flex-col items-center">
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517]">U19 Cheftræner</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/coach.jpg" alt="U19 Cheftræner">
            <h2 class="lg:text-3xl md:text-2xl text-xl font-bold text-[#151517]">Morten Laugesen Jørgensen</h2>
            <p class="text-lg font-medium">
                <a href="mailto:mortenlaugesen@outlook.com" class="hover:text-red-700 hover:underline">mortenlaugesen@outlook.com</a>
            </p>
            <p class="text-lg font-medium">+45 31 67 09 95</p>
        </div>
        <div class="flex flex-col items-center">
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517]">U17 Cheftræner</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/anonymous.png" alt="U17 Cheftræner" class="w-auto h-[299px]">
            <h2 class="lg:text-3xl md:text-2xl text-xl font-bold text-[#151517]">Lars Nielsen</h2>
            <p class="text-lg font-medium">
                <a href="mailto:L_bruun@outlook.com" class="hover:text-red-700 hover:underline">L_bruun@outlook.com</a>
            </p>
            <p class="text-lg font-medium">+45 52 73 85 35</p>
        </div>
    </div>
    <div class="text-center pt-16">
        <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-8">Adresse</h1>
        <p class="text-lg font-medium">Præstemarksvej 43,</p>
        <p class="text-lg font-medium">6710 Esbjerg Sædding-Guldager</p>
    </div>
</div>

<?php get_footer(); ?>
