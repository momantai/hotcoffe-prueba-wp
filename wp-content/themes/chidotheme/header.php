<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="bg-gray-50 shadow sticky top-0">
        <nav class="container m-auto flex items-center justify-between py-2">
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div class="buscador">
                <input class="border-1 border-blue-500 py-1 px-1 rounded outline-none" type="text">
            </div>
            <ul class="flex">
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'top',
                            'container'      => 'ul',
                            'menu_class'     => 'flex',
                            'link_before'    => '<li class="mr-3">',
                            'link_after'     => '</li>',
                            'item_wrap'      => '<ul id="%1$s" class="flex">%3$s</ul>'
                        )
                    );
                ?>
            </ul>
        </nav>
    </header>
    <div class="content" style="min-height: calc(100vh - 88px);">
        <main>