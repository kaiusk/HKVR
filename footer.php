</main>
<footer>
    <div class="container">
        <nav>
            <?php
            wp_nav_menu([
                'menu'            => 'social', // Do not fall back to first non-empty menu.
                'fallback_cb'     => false, // Do not fall back to wp_page_menu()
                'container_class' => 'navbar'
            ]);
            ?>
        </nav>
        <p class="text-center"><?php create_copyright(); ?></p>
    </div>
</footer>
</body>
</html>
