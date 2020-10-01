<?php get_header(); ?>

        <h2 class="page-heading">Search Results for <?= get_search_query();?> </h2>

<?php if(have_posts()): ?>

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
                    <?php if(get_post_type() == 'post'): ?>
                in <a href="#"><?= get_the_category_list(', '); ?>  </a>
                <?php endif; ?>
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

        </section>   

            <?php else: ?> <div class="no-results" > <h2>Couldn't find anything :( Did you just mistype somethig? </h2>
            <h3> Don't worry</h3>
            <h3>Check out the following links:</h3>
            <ul>
                <li><a href="<?= site_url('/blog') ?>"></a>Blog List</li>
                <li><a href="<?= site_url('/projects') ?>"></a>Projects List</li>
                <li><a href="<?= site_url('/about') ?>"></a>About Me</li>
                <li><a href="<?= site_url('') ?>"></a>Home</li>
            </ul>
            </div> 
                <?php endif; ?>

        <div class="pagination">
            <?= paginate_links(); ?>
        </div> 

    <?php get_footer(); ?>