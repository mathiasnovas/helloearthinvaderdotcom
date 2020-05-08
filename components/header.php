<header class="header">
    <div class="container">
        <h1 class="<?= $currentPage['slug'] === 'home' ? 'h-display' : '' ?>"><?= $currentPage['title']; ?></h1>

        <?php if ($currentPage['slug'] === 'home'): ?>
            <h2 class="h-display">I'm out</h2>
        <?php endif; ?>
    </div>
</header>
