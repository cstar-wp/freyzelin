<?php

/**
 * including files from /functions/
 */
function requireFilesDirLoop($path ) {
    $contents = scandir($path);

    foreach ($contents as $content) {
        if ($content === '.' || $content === '..') continue;
        $contentPath = str_replace(['/','\\'], DIRECTORY_SEPARATOR, trim($path, '/') . '/' . $content);

        if (is_file($contentPath)) {
            require_once $contentPath;
        } else if (is_dir($contentPath)) {
            requireFilesDirLoop($contentPath);
        }
    }
}

require_once __DIR__ . '/functions/bs4navwalker.php';
require_once __DIR__ . '/functions/enqueue_assets.php';

function startRecursiveRequering() {
    $path = dirname(__FILE__) . '/functions/';
    requireFilesDirLoop($path);
}
add_action('wp_enqueue_scripts', 'startRecursiveRequering');

register_nav_menu('top', 'Top menu');