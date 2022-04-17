<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Parim veebileht, mis siiani nähtud">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;700&display=swap" rel="stylesheet">
    <!--link rel="stylesheet" href="assets/css/style.css"!-->
    <?php
    wp_head();
    ?>
</head>
<body>
<header>
    <nav>
        <div class="navbar">
            <?php wp_nav_menu(['menu' => 'main']); ?>
        </div>
    </nav>
</header>
<main>
