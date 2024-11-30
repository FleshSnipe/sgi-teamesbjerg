<?php
/* Template Name: Nyheder */
get_header();
?>

<style>
   .news-post-text {
    display: flex;            /* Používáme flexbox pro centrování */
    margin-right: 1rem;       /* Přidá mezery pod text */
    height: 100%;             /* Aby text byl centrován na celé výšce, pokud je to potřeba */
    }

    /* Responzivní změna pro malé obrazovky (do 600px) */
    @media (max-width: 600px) {
        .news-post-text {
            margin-right: 0; /* Odstranění mezery na pravé straně na velmi malých obrazovkách */
            align-items: center;      /* Zarovnání textu na střed na ose Y */
            justify-items: center;
        }
    }

    /* Responzivní změna pro střední obrazovky (mezi 600px a 768px) */
    @media (max-width: 768px) {
        .news-post-text {
            margin-right: 3rem; /* Mezery zůstávají na středních obrazovkách */
        }
    }

    .greyy{
        display:flex;
        color: #6b7280;           /* Šedá barva pro text */
        justify-items: left;
    }

    .div-in-center{
        padding-left:2rem;
        padding-top:2rem;
        padding-bottom:2rem;
    }

    /* Ostatní styly pro stránkování */
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

    .page-numbers .pagination-prev,
    .page-numbers .pagination-next {
        display: inline-flex; /* Zarovnání šipky a textu na jeden řádek */
        align-items: center; /* Vertikální zarovnání obsahu */
        justify-content: center; /* Horizontální zarovnání */
        min-width: 100px; /* Nastavení minimální šířky */
        text-align: center; /* Zarovnání textu */
        gap: 0.5rem; /* Mezera mezi šipkou a textem */
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
                <div class="flex flex-col items-center justify-center rounded-lg shadow-lg lg:flex-row md:flex-row">
                    <div class="w-full lg:w-1/2 md:w-1/2">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="w-full h-auto rounded-l-lg">
                        <?php endif; ?>
                    </div>
                    <div class="flex flex-col items-center justify-center py-12 pl-8 space-y-4 lg:pl-20 lg:py-0 md:py-0 div-in-center">
                        <h3 class="text-sm font-medium lg:text-xl md:text-lg news-post-text">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-xs text-gray-500 lg:text-base md:text-base greyy news-post-text">
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
                        'prev_text' => '<span class="pagination-prev">&laquo; Previous</span>',
                        'next_text' => '<span class="pagination-next">Next &raquo;</span>',
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


<?php get_footer(); ?>
