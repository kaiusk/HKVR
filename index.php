<?php
get_header();
?>
    <section class="first-section">
        <div class="container">
            <div class="head">
                <h1><?php echo get_bloginfo('name'); ?></h1>
                <h2 class="text-primary"><?php echo get_bloginfo('description'); ?></h2>
                <div>
                    <a href="#" class="button">Osta kohe!</a>
                    <a href="#" class="button">Liitu kohe!</a>
                </div>
            </div>
        </div>
    </section>
    <section class="second-section">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <div class="container">
                    <article>
                        <?php the_content(); ?>
                    </article>
                </div>
            <?php }
        }
        ?>
    </section>
<?php
get_footer();