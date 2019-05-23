<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= get_bloginfo('name') ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header class="container-fluid" id="header">
        <nav class="navbar navbar-expand-md navbar-light bg-faded">
            <a class="navbar-brand" href="/">
                <img class="logo" src="<?= get_template_directory_uri() ?>/dist/images/logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu([
                    'menu'            => 'top',
                    'theme_location'  => 'top',
                    'container'       => 'div',
                    'container_id'    => 'bs4navbar',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav ml-auto',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ]);
            ?>
        </nav>
    </header>