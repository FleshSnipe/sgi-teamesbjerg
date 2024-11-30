<?php
get_header();
?>

<div class="container blog-wrapper mx-auto py-20">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="prose lg:prose-xl mx-auto">
            <h4><?php the_title(); ?></h4>
            <p class="text-gray-500 text-sm py-4"><?php the_date(); ?> | Autor: <?php the_author(); ?></p>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="rounded-lg mt-6">
            <?php endif; ?>
            <div class="mt-6">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<style>
    .prose img {
        max
        max-width: 100%;
        height: auto;
    }

    .prose h1 {
        font-size: 2.5rem;
        font-weight: 700;
    }

    .prose h2 {
        font-size: 2rem;
    }

    .prose p {
        color: #687279;
    }

    .blog-wrapper{
        max-width: 800px;
    }

</style>

<?php
get_footer();
