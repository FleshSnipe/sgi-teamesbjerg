<?php
/* Template Name: Nyheder */
get_header();
?>

<style>
    .page-numbers {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 35px;
        height: 35px;
        background-color: white;
        color: black;
        border-radius: 50%;
        text-decoration: none;
        margin: 0 5px;
    }

    .page-numbers.current {
        background-color: #e3252d;
        color: white;
    }

    .page-numbers:hover {
        text-decoration: underline;
    }
</style>

<div class="container mx-auto lg:max-w-4xl md:max-w-xl max-w-[250px] py-20">
    <div class="flex justify-center lg:text-4xl md:text-3xl text-2xl font-bold text-[#151517] pb-8">
        <h2>Nyheder</h2>
    </div>
    <div class="space-y-8 flex flex-col items-center">
        <?php
        // Nastavení query pro příspěvky
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $news_query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 3,
            'paged' => $paged,
        ]);

        if ($news_query->have_posts()) :
            while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <div class="flex lg:flex-row md:flex-row flex-col items-center justify-center shadow-lg rounded-lg">
                    <div>
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="rounded-l-lg w-auto lg:h-[350px] md:h-[220px] h-[250px]">
                        <?php endif; ?>
                    </div>
                    <div class="space-y-4 lg:pl-20 pl-8 lg:py-0 md:py-0 py-12 pr-8">
                        <h3 class="lg:text-xl md:text-lg text-sm font-medium">
                            <a href="<?php the_permalink(); ?>" class="hover:underline"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-gray-500 lg:text-base md:text-base text-xs">
                            <?php echo get_the_date(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="flex justify-between items-center pt-8">
                <div class="flex justify-center items-center space-x-3 flex-1">
                    <?php
                    // Zobrazení stránkování
                    echo paginate_links([
                        'total' => $news_query->max_num_pages,
                        'current' => $paged,
                        'prev_text' => __('&laquo; Předchozí'),
                        'next_text' => __('Další &raquo;'),
                        'before_page_number' => '<span class="page-numbers">',
                        'after_page_number' => '</span>',
                    ]);
                    ?>
                </div>
            </div>
        <?php else : ?>
            <p class="text-lg font-medium text-center text-gray-500">Žádné novinky nebyly nalezeny.</p>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>
