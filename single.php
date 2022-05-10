<?php
get_header();
?>
    <section class="details-section">
        <div class="container">
            <div class="details-head">
                <h1><?php the_title(); ?></h1>
                <h2 class="text-primary"><?php the_excerpt(); ?></h2>
                <h4 class="text-primary"><?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                    }
                    ?></h4>
            </div>
        </div>
    </section>
    <section class="details">
        <div class="container">
            <?php echo get_the_post_thumbnail(); ?>
            <div class="details-wrap">
                <div class="boxes">
                    <div class="box">
                        <i class="pe-7s-wine pe-5x text-primary"></i>
                        <h5>Hind</h5>
                        <?php echo get_post_meta(get_the_ID(), 'hind', true); ?>
                    </div>
                    <div class="box">
                        <i class="pe-7s-cash pe-5x text-primary"></i>
                        <h5>Omadus</h5>
                        <?php echo get_post_meta(get_the_ID(), 'omadus', true); ?>
                    </div>
                </div>
                <div>
                    <?php the_content(); ?>
                    <button class="button btn-black">Nupp</button>
                </div>
                <!--div class="properties">
                    <div class="single">
                        <i class="pe-7s-headphones pe-3x pe-va"></i>
                    </div>
                    <div class="single">
                        <i class="pe-7s-box1 pe-3x pe-va"></i>
                    </div>
                    <div class="single">
                        <i class="pe-7s-display1 pe-3x pe-va"></i>
                    </div>
                    <div class="single">
                        <i class="pe-7s-drop pe-3x pe-va"></i>
                    </div>
                </div!-->
            </div>
        </div>
    </section>
    <h2></h2>
<?php
get_footer();