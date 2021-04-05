<?php get_header(); ?>

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="<?= the_field('portfolio_image'); ?>" alt="<?= the_field('portfolio_title') ?>" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0"><?= the_title(); ?></h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <?= the_field('portfolio_content'); ?>
        </div>
    </header>

    <main>
        <section class="container py-5">
            <h2 class="text-center"><?= the_title(); ?></h2>
            <?= the_content(); ?>
        </section>

        <section class="text-center bg-primary py-5">

            <?php /*
            Possible également de cette façon si on ne crée pas de sous groupe dans ACF
            <h2><?= the_field('works_title'); ?></h2>
            <p><?= the_field('works_content'); ?></p>
            */ ?>

            <?php
            if( have_rows('recent_works')):
                while(have_rows('recent_works')): the_row();
            ?>
                <h2><?= the_sub_field('work_title'); ?></h2>
                <p><?= the_sub_field('work_content'); ?></p>

                <div class="container">
                    <div class="row">
                        <?php $query = new WP_Query(['post_type' => 'work', 'posts_per_page' => 6]); ?>
                        <?php while($query->have_posts()): $query->the_post(); ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="<?= the_post_thumbnail_url() ?>" />
                                <div class="card-body">
                                    <h4><?= the_title() ?></h4>
                                    <a href="<?= the_permalink(); ?>" class="btn btn-primary" title="Découvrir">Découvrir</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>

            <?php endwhile; endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>

        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?= the_field('contact_title'); ?></h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star"></i> Font Awesome fontawesome.com --></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <?= the_field('contact_form'); ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>