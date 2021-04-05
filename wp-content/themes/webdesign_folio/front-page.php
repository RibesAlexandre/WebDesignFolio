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

        <section class="text-center text-white bg-primary py-5">
            <?php
            if (have_rows('recent_works')):
            while(have_rows('recent_works')): the_row()
            ?>
            <h2><?php the_sub_field('work_title') ?></h2>
            <p><?php the_sub_field('work_content'); ?></p>

            <div class="container">
                <div class="row">

                    <?php
                    $query = new WP_Query(['post_type' => 'work', 'posts_per_page' => 6]);
                    while($query->have_posts()):
                        $query->the_post();
                        ?>

                        <div class="col-md-3 col-lg-3">
                            <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal6">
                                <img class="img-fluid" src="<?= the_post_thumbnail_url() ?>" alt="" />
                            </div>
                        </div>

                    <?php endwhile; ?>
                </div>
            </div>


            <?php
            endwhile;
            endif;
            ?>


        </section>

    </main>

<?php get_footer(); ?>