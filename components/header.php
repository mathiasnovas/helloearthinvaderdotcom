<header class="header">
    <div class="container">
        <?php if ($currentPage['slug'] === 'home'): ?>
            <figure class="front-page-logo"><img src="/assets/images/logo.png" alt="Earth Invader Logo"></figure>
            <h2 class="h-display">Hi Who's This</h2>
            <h3 class="h-display" style="margin-top: 0">Coming September 25th</h3>
        <?php else: ?>
            <h1><?= $currentPage['title']; ?></h1>
        <?php endif; ?>
    </div>
</header>
