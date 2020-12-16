<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> |<?php wp_title(); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
    <?php wp_enqueue_style( 'normalize', get_stylesheet_uri() ); ?>
    <?php wp_head(); ?>
</head <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<body>
    <header id="header-sticky" class="header">
        <nav class="nav container">
            <div class="logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div>

            <form role="search" method="GET" action="<?php echo home_url( '/' ); ?>" class="search">
                <img width="20px" src="https://www.flaticon.com/svg/static/icons/svg/116/116836.svg" alt="">
                <input type="text" name="s" placeholder="Search...">
            </form>

            <?php
                wp_nav_menu( array(
                    'header-menu'   => 'header-menu',
                    'container'     => 'ul',
                    'manu_class'    => 'menu'
                ));
            ?>
        </nav>
    </header>


    <main class="content">
