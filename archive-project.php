<?php get_header(); ?>


<a href="<?= site_url('/blog'); ?>">
    <h2 class="page-heading"> All Projects</h2>
</a>
<section>

    <?php

    while (have_posts()) {
        the_post();
    ?>

    <div class="card">
        <div class="card-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?= get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image" />
            </a>
        </div>
        <div class="card-description">
            <a href="<?php the_permalink(); ?>">
                <h3> <?php the_title(); ?></h3>
            </a>
            <div class="card-meta">
                Posted by <?php the_author(); ?> on <?php the_time('F J, Y') ?>

            </div>
            <p>
                <?= wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
        </div>
    </div>

    <?php }
    wp_reset_query();
    ?>
    <div class="pagination">
        <?= paginate_links(); ?>
    </div>

</section>

<?php get_footer(); ?>p