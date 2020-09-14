<?php

require_once('lib/Invader.php');

$currentPage = Invader::getPage();
$pageTitle = $currentPage['slug'] === 'home'
    ? $currentPage['title']
    : '(earth)invader | ' . $currentPage['title'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- HELLO!!!!!! You look amazing!!! -->

        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="<?= $pageTitle ?>">
        <meta property="og:image" content="/assets/images/matty-20 2.JPG">

        <?php if (isset($currentPage['description'])): ?>
            <meta property="og:description" content="<?= $currentPage['description'] ?>">
        <?php endif; ?>

        <!-- Favicon -->
        <link rel="shortcut icon" href="/favicon.png" />

        <!-- Title -->
        <title><?= $pageTitle ?></title>

        <!-- Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Mono:400,700&display=swap" rel="stylesheet">
        <link href="/assets/css/vendor/aos.css" rel="stylesheet" />
        <link href="/assets/css/app.css" rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161183810-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-161183810-1');
        </script>
    </head>
    <body class="page-<?= $currentPage['slug'] ?>" data-aos="fade-in">
        <div class="content">
            <?php if ($currentPage['slug'] === 'home'): ?>
                <section class="section">
                    <div class="frontpage-video">
                        <div class="frontpage-video__links">
                            <a href="https://distrokid.com/hyperfollow/earthinvader/hi-whos-this" target="_blank">Pre-save the EP</a>
                            <a href="https://www.youtube.com/watch?v=Ktbhz5Wi8rU" target="_blank">'Empty Moons' video premiere</a>
                            <!-- <a href="https://ampl.ink/G6MaX" target="_blank">Listen to the single</a> -->
                        </div>
                        <video autoplay muted loop playsinline>
                            <source src="/assets/video/hiwhosthisloop.mp4">
                        </video>
                    </div>

                    <?php include_once('components/header.php'); ?>
                </section>
            <?php else: ?>
                <?php include_once('components/header.php'); ?>
            <?php endif; ?>

            <?php include_once('pages/' . $currentPage['slug'] . '.php'); ?>
            <?php include_once('components/menu.php'); ?>
        </div>

        <?php include_once('components/footer.php'); ?>
    </body>
</html>
