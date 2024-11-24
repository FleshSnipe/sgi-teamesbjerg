<?php
/* Template Name: Kontakt */
get_header();
?>
<style>
    .container {
    margin-left: auto;
    margin-right: auto;
    max-width: 56rem; /* equivalent to max-w-4xl */
    height: 100%; /* equivalent to h-full */
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-top: 5rem; /* equivalent to py-20 */
    padding-bottom: 5rem; /* equivalent to py-20 */
    }

    @media (min-width: 1024px) {
    .container {
        height: 90vh; /* equivalent to lg:h-[90vh] */
        padding-top: 0; /* equivalent to lg:py-0 */
        padding-bottom: 0; /* equivalent to lg:py-0 */
    }
    }

    .trener {
    width: auto; /* equivalent to w-auto */
    height: 299px; /* equivalent to h-[299px] */
    }


    .responsive-map {
    padding-bottom: 0; /* Default for smaller screens */
    padding-top:4rem;
    }

    @media (min-width: 1024px) {
    .responsive-map {
        padding-bottom: 16rem; /* Equivalent to padding-bottom on larger screens */
        padding-top:4rem;
    }
    }

    .map{
        padding-right:2rem;
        padding-left:2rem;
    }

    @media (min-width: 1024px) {
    .map {
        padding-right:0rem;
        padding-left:0rem;
    }
    }

</style>

<div class="container mx-auto max-w-4xl lg:h-[90vh] h-full flex flex-col justify-center lg:py-0 py-20">
    <div class="flex flex-col justify-between space-y-8 lg:flex-row lg:space-y-0">
        <div class="flex flex-col items-center">
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517]">U19 Cheftræner</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/coach.jpg" alt="U19 Cheftræner" class="w-auto h-[299px] trener">
            <h2 class="lg:text-3xl md:text-2xl text-xl font-bold text-[#151517]">Morten Laugesen Jørgensen</h2>
            <p class="text-lg font-medium">
                <a href="mailto:mortenlaugesen@outlook.com" class="hover:text-red-700 hover:underline">mortenlaugesen@outlook.com</a>
            </p>
            <p class="text-lg font-medium">+45 31 67 09 95</p>
        </div>
        <div class="flex flex-col items-center">
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517]">U17 Cheftræner</h1>
            <img src="<?php echo get_template_directory_uri(); ?>/images/anonymous.png" alt="U17 Cheftræner" class="w-auto h-[299px] trener">
            <h2 class="lg:text-3xl md:text-2xl text-xl font-bold text-[#151517]">Lars Nielsen</h2>
            <p class="text-lg font-medium">
                <a href="mailto:L_bruun@outlook.com" class="hover:text-red-700 hover:underline">L_bruun@outlook.com</a>
            </p>
            <p class="text-lg font-medium">+45 52 73 85 35</p>
        </div>
    </div>
    <div class="container pt-16 pb-20 mx-auto text-center max-w-7xl responsive-map">
        <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-4">Adresse</h1>
        <p class="text-lg font-medium">Præstemarksvej 43,</p>
        <p class="text-lg font-medium">6710 Esbjerg Sædding-Guldager</p>
        <div class="flex justify-center map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d564.6707171714573!2d8.398439669681537!3d55.520473957527585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464adf87341c3f4b%3A0x7f6910969c8d5a60!2sPr%C3%A6stemarksvej%2043%2C%206710%20Esbjerg%20Kommune!5e0!3m2!1scs!2sdk!4v1732372627003!5m2!1scs!2sdk" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </div> 
    </div>
</div>

<?php get_footer(); ?>
