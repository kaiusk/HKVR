<?php
get_header();
?>
    <h2><?php the_title(); ?></h2>
<?php
the_content();
?>
    <p>Omadus:
        <?php echo get_post_meta(get_the_ID(), 'omadus', true); ?>
    </p>
    <p>Hind:
        <?php echo get_post_meta(get_the_ID(), 'hind', true); ?>
    </p>
<?php
get_footer();