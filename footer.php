
</main>
<footer>
    <div class="container">
        <nav>
            <div class="navbar">
                <?php
                wp_nav_menu([
                    'menu'        => 'social', // Do not fall back to first non-empty menu.
                    'fallback_cb' => false // Do not fall back to wp_page_menu()
                ]);
                ?>
            </div>
        </nav>
    </div>
</footer>
</body>
</html>
