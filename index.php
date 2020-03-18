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

        <title><?= $pageTitle ?></title>

        <!-- Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Roboto+Mono&display=swap" rel="stylesheet">
        <link href="/assets/css/app.css" rel="stylesheet">

        <!-- JavaScript -->
        <!-- <script src="/assets/js/jquery-3.4.1.min.js"></script> -->
    </head>
    <body class="page-<?= $currentPage['slug'] ?>">
        <div class="content">
            <?php if ($currentPage['slug'] === 'home'): ?>
                <section class="section">
                    <div class="frontpage-video">
                        <video autoplay muted loop>
                            <source src="/assets/video/bg.mp4">
                        </video>
                    </div>

                    <?php include_once('components/header.php'); ?>
                </section>
            <?php else: ?>
                <?php include_once('components/header.php'); ?>
                <?php include_once('pages/' . $currentPage['slug'] . '.php'); ?>
            <?php endif; ?>

            <?php include_once('components/menu.php'); ?>
        </div>
    </body>
</html>
