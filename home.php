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
    <div class="flex flex-col items-center space-y-8">
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
                <div class="news-item">
                    <div class="news-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="news-thumbnail-img">
                        <?php endif; ?>
                    </div>
                    <div class="news-content">
                        <h3 class="news-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="news-date">
                            <?php echo get_the_date(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
            <div class="flex items-center justify-between pt-8">
                <div class="flex items-center justify-center flex-1 space-x-3">
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
            <p class="text-lg font-medium text-center text-gray-500">No news was found.</p>
        <?php endif;
        wp_reset_postdata(); ?>
    </div>
</div>
<style>
    /* Kontejner pro celý příspěvek */
.news-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 0.5rem; /* rounded-lg */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* shadow-lg */

    /* Zarovnání do řádku na větších obrazovkách */
    @media (min-width: 768px) {
        flex-direction: row;
    }
}

/* Sekce s miniaturou */
.news-thumbnail {
    width: 100%;
}

@media (min-width: 768px) {
    .news-thumbnail {
        width: 50%; /* lg:w-1/2 a md:w-1/2 */
    }
}

/* Obrázek miniatury */
.news-thumbnail-img {
    width: 100%; /* w-full */
    height: auto; /* h-auto */
    border-radius: 0.5rem 0 0 0.5rem; /* rounded-l-lg */
}

/* Obsah příspěvku */
.news-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 3rem 0; /* py-12 */
    padding-left: 2rem; /* pl-8 */

    /* Větší odsazení na větších obrazovkách */
    @media (min-width: 1024px) {
        padding-left: 5rem; /* lg:pl-20 */
        padding-top: 0; /* lg:py-0 */
        padding-bottom: 0; /* lg:py-0 */
    }
}

/* Nadpis příspěvku */
.news-title {
    font-size: 0.875rem; /* text-sm */
    font-weight: 500; /* font-medium */

    /* Větší velikosti písma na větších obrazovkách */
    @media (min-width: 768px) {
        font-size: 1rem; /* md:text-lg */
    }
    @media (min-width: 1024px) {
        font-size: 1.25rem; /* lg:text-xl */
    }
}

/* Datum příspěvku */
.news-date {
    font-size: 0.75rem; /* text-xs */
    color: #6b7280; /* text-gray-500 */

    /* Větší velikosti písma na větších obrazovkách */
    @media (min-width: 768px) {
        font-size: 1rem; /* md:text-base */
    }
    @media (min-width: 1024px) {
        font-size: 1rem; /* lg:text-base */
    }
}

</style>


<?php get_footer(); ?>
