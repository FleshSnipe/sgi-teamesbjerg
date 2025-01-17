<?php
/* Template Name: Nyheder */
get_header();
?>

<style>
    .news-post-text {
        display: flex;
        justify-content: center; /* Horizontální zarovnání */
        align-items: center;    /* Vertikální zarovnání */
        text-align: center;     /* Zarovnání textu */
        width: 100%;            /* Nadpis bude mít šířku 100% v rámci svého kontejneru */
    }

    .greyy {
        display: flex;
        justify-content: center; /* Horizontální zarovnání */
        color: #6b7280;
        text-align: center;
    }

    .div-in-center {
        display: flex;
        flex-direction: column;
        justify-content: center; /* Vertikální zarovnání */
        align-items: center;     /* Horizontální zarovnání */
        padding: 2rem;
        width: 100%;            /* Bílá část má šířku 400px */
    }

    .thumbnail-fixed-size {
        width: 300px;           /* Nastavení stejné šířky pro všechny obrázky */
        height: 200px;          /* Nastavení výšky pro všechny obrázky */
        object-fit: cover;      /* Zabrání deformaci obrázku */
        border-radius: 8px 0 0 8px;
    }

    .post-fixed-width {
        display: flex;
        flex-direction: row;    /* Obsah se zobrazí vedle sebe (obrázek + text) */
        justify-content: start; /* Zarovnání na začátek (vlevo) */
        width: 100%;            /* Vzít celou šířku dostupnou pro příspěvek */
        max-width: 700px;       /* Maximální šířka pro celý příspěvek (obrázek + text) */
        margin: 0 auto;         /* Centrum na stránce */
        gap: 1rem;              /* Mezera mezi obrázkem a textem */
        background-color: #fff; /* Bílá barva pozadí */
        border-radius: 8px;     /* Zaoblení rohů */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Přidání stínu */
    }

    @media (max-width: 768px) {
        .post-fixed-width {
            flex-direction: column; /* Na mobilu budou prvky pod sebou */
            max-width: 100%;         /* Na mobilu bude šířka postu 100% */
        }
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
                <div class="post-fixed-width">
                    <div class="w-full">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="thumbnail-fixed-size">
                        <?php endif; ?>
                    </div>
                    <div class="div-in-center">
                        <h3 class="text-sm font-medium lg:text-xl md:text-lg news-post-text">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-xs text-gray-500 lg:text-base md:text-base greyy">
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
