<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <title>Side Menu</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <?php wp_head(); ?>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sideber">
        <header>My App</header>
        <?php dynamic_sidebar('leftsidebar'); ?>
    </div>
    <section></section>
    <?php wp_footer(); ?>
</body>
</html>