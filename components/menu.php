<nav class="main-navigation">
    <div class="container">
        <div class="main-navigation-section">
            <?php foreach (Invader::getPages() as $page): ?>
                <a href="<?= $page['slug'] === 'home' ? '/' : '/' . $page['slug'] ?>"><?= $page['title'] ?></a>
            <?php endforeach; ?>

        </div>

        <div class="main-navigation-section some">
            <a target="_blank" href="https://instagram.com/helloearthinvaderdotcom">Instagram</a>
            <a target="_blank" href="https://instagram.com/helloearthinvaderdotcom">Facebook</a>
        </div>
    </div>
</nav>
