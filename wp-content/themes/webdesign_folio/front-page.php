<?php get_header(); ?>

    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="<?= the_field('portfolio_image'); ?>" alt="<?= the_field('portfolio_title') ?>" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0"><?= the_field('portfolio_title'); ?></h1>
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













    <?php while (have_posts()) : the_post() ?>
    <main class="container py-5">
        <h2 class="text-center"><?= the_title(); ?></h2>

        <div class="row">
            <div class="col-md-8 offset-4">
                <?= the_content(); ?>
            </div>
        </div>

    </main>
    <?php endwhile; ?>

<?php get_footer(); ?>