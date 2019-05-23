<?php /* Template Name: Blog Page */ ?>
<?php get_header(); ?>
<?php 
$posts = [
    [
        'title' => 'Surf Trip',
        'city' => 'MÜNCHEN',
        'date' => '18.5.2019',
        'description' => 'Lucas und ich waren letztes Wochenende in München um die neue Welle in München zu testen.',
        'images' => [
            '/dist/images/blog/slider.jpg'
        ]
    ],
    [
        'title' => 'Textilmesse',
        'city' => 'MÜNCHEN',
        'date' => '19.5.2019',
        'description' => 'Lucas und ich waren letztes Wochenende in München um die neue Welle in München zu testen.',
        'images' => [
            '/dist/images/blog/slider2.png'
        ]
    ],
]
?>

<main class="container-fluid" id="blog">
    <?php foreach ($posts as $key => $post): ?>

        <article class="blog-post row">
            <div class="post-side post-left col-xl-3">
                <div class="post-top">
                    <div class="post-key">
                        <div class="key"><?= $key+1 ?></div>
                    </div>

                    <div class="post-title">
                        <h2><?= $post['title'] ?></h2>
                        <div class="city"><?= $post['city'] ?></div>
                        <div class="date"><?= $post['date'] ?></div>
                    </div>
                </div>

                <div class="post-description">
                    <div class="post-text">
                        <?= $post['description'] ?>
                    </div>
                    <a href="#" class="open">read more ></a>
                </div>
            </div>

            <div class="post-side post-right col-xl-9 post-slider">
                <div class="slider-img">
                    <img src="<?= get_template_directory_uri() . current($post['images']) ?>" alt="slider image">
                </div>
            </div>
        </article>

    <?php endforeach; ?>
</main>

<?php get_footer(); ?>