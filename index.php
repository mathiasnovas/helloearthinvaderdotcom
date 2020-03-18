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

        <!-- Title -->
        <title><?= $pageTitle ?></title>

        <!-- Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Mono:400,700&display=swap" rel="stylesheet">
        <link href="/assets/css/app.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>
    <body class="page-<?= $currentPage['slug'] ?>" data-aos="fade-in">
        <div class="content">
            <?php if ($currentPage['slug'] === 'home'): ?>
                <section class="section">
                    <div class="frontpage-video">
                        <video autoplay muted loop playsinline>
                            <source src="/assets/video/bg.mp4">
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
