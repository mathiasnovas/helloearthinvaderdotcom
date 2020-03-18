<nav class="main-navigation">
    <div class="container">
        <div class="main-navigation-section">
            <?php foreach (Invader::getPages() as $page): ?>
                <a
                    class="<?= $page['slug'] === $currentPage['slug'] ? 'current-page' : ''; ?>"
                    href="<?= $page['slug'] === 'home' ? '/' : '/' . $page['slug'] ?>"
                >
                    <small>
                        <?= $page['title'] ?>
                    </small>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="main-navigation-section some">
            <a target="_blank" href="https://instagram.com/helloearthinvaderdotcom">
                <small>Instagram</small>
            </a>
            <a target="_blank" href="https://instagram.com/helloearthinvaderdotcom">
                <small>Facebook</small>
            </a>
        </div>
    </div>
</nav>
