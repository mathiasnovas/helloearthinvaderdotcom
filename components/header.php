<header class="header">
    <div class="container">
        <h1 class="<?= $currentPage['slug'] === 'home' ? 'h-display' : '' ?>"><?= $currentPage['title']; ?></h1>

        <?php if ($currentPage['slug'] === 'home'): ?>
            <h2 class="h-display">Hi Who's This</h2>
            <h3 class="h-display" style="margin-top: 0">Coming September 25th</h3>
        <?php endif; ?>
    </div>
</header>
