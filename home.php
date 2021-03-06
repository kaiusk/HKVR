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
        <div class="container">
            <h2 class="text-primary text-center">Osta meilt neid häid asju!</h2>

            <div class="selling-items">
                <?php
                if (have_posts()) {
                    //while (have_posts()) {
                    for ($i = 0; $i < 4; $i++) { // max 4 posts
                        if (!have_posts()) {
                            break;
                        }
                        the_post();
                        ?>
                        <div class="selling-item <?= is_sticky() ? 'featured' : '' ?>">
                            <div class="selling-head">
                                <h3><?php the_title(); ?></h3>
                                <p><?php the_excerpt(); ?></p>
                                <?php if (is_sticky()) { ?>
                                    <span class="best-seller">Enim ostetud</span>
                                <?php } ?>
                            </div>
                            <div class="price">
                                <h4><?php echo get_post_meta(get_the_ID(), 'hind', true); ?>&euro;</h4>
                                <p>kuus</p>
                            </div>
                            <div class="selling-body">
                                <ul>
                                    <?php foreach (get_post_custom(get_the_ID()) as $key => $value) {
                                        if (!str_starts_with($key, '_')) { ?>
                                            <li><?= $key; ?></li>
                                        <?php }
                                    } ?>
                                </ul>
                                <a class="button <?= is_sticky() ? 'btn-primary' : 'btn-black' ?>"
                                   href="<?php the_permalink(); ?>">Osta</a>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
<?php
get_footer();