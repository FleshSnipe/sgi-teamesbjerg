<footer>
    <div class="bg-[#14141a]">
        <div class="container pt-10 mx-auto padding-icons">
            <div class="flex justify-center">
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/tehk.sgi/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/facebookGrey.png" alt="facebookIcon" class="w-auto h-12 transition-transform duration-300 ease-in-out lg:h-16 hover:scale-110 icons">
                    </a>
                    <a href="https://www.instagram.com/tehk_sgi/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/instagramGrey.png" alt="instagramIcon" class="w-auto h-12 transition-transform duration-300 ease-in-out lg:h-16 hover:scale-110 icons">
                    </a>
                </div>
            </div>
        </div>
        <div class="container py-20 mx-auto max-w-7xl center-align">
            <div class="flex lg:flex-row md:flex-row flex-col items-center justify-center lg:divide-x md:divide-x lg:divide-y-0 md:divide-y-0 divide-y divide-[#687279] lg:space-y-0 md:space-y-0 space-y-8">
                <div>
                    <div class="pr-0 lg:pr-28 md:pr-12">
                        <h4 class="pb-2 font-medium text-center text-white">
                            Kontakt Os
                        </h4>
                        <p class="text-[#687279] text-sm mb-8">
                            Præstemarksvej 43, 6710 Esbjerg<br>Sædding-Guldager
                        </p>
                        <p class="text-[#687279] text-sm mt-8">
                            Phone: +45 31 67 09 95 <br>
                            Email: <span>
                                <a href="mailto:mortenlaugesen@outlook.com" class="hover:text-red-900 hover:underline">mortenlaugesen@outlook.com</a>
                            </span>
                        </p>
                    </div>
                </div>
                <div class="pl-0 lg:pl-28 md:pl-12">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logoCombined_white.png" alt="logoCombined" class="h-auto w-[300px] image-max">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-[#0c0f12] py-6">
        <p class="text-[#687279] text-center">
            Copyright © <?php echo date('Y'); ?> - Silné Česko
        </p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
<style>
    .image-max{
        max-width:261.58px;
    }

    .padding-icons{
        padding-top:20px;
    }

    .icons{
        height:48px;
    }

    .center-align {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column; /* Pokud chcete vertikální zarovnání */
        text-align: center; /* Zajistí textové zarovnání */
        min-height: 100vh; /* Pro vertikální centrování na celou výšku */
    }
</style>
