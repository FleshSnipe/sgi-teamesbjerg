<?php
/* Template Name: Klubben */
get_header();
?>

<div class="container mx-auto max-w-7xl lg:h-[90vh] lg:py-0 py-20 flex justify-center">
    <div class="flex lg:flex-row md:flex-col flex-col justify-center items-center">
        <div class="lg:max-w-xl md:max-w-lg max-w-sm lg:px-0 md:px-0 px-5">
            <h1 class="lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] lg:mb-8 mb-4">
                <?php the_title(); ?>
            </h1>
            <p class="lg:text-base md:text-sm text-xs">
                <?php
                // Dynamický obsah stránky
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </p>
        </div>
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logoCombined.png" alt="logoCombined" class="h-auto lg:w-[650px] md:w-[550px] w-[450px]">
        </div>
    </div>
</div>

<?php get_footer(); ?>
