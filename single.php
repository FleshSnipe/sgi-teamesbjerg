<?php
get_header();
?>

<div class="container mx-auto py-20">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="prose lg:prose-xl mx-auto">
            <h1><?php the_title(); ?></h1>
            <p class="text-gray-500 text-sm"><?php the_date(); ?> | Autor: <?php the_author(); ?></p>
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="rounded-lg mt-6">
            <?php endif; ?>
            <div class="mt-6">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</div>

<?php
get_footer();
