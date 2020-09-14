<nav class="main-navigation">
    <div class="container">
        <div class="main-navigation-section">
            <?php foreach (Invader::getPages() as $page): ?>
                <?php if (!isset($page['hide']) || !$page['hide']): ?>
                    <a
                        class="<?= $page['slug'] === $currentPage['slug'] ? 'current-page' : ''; ?>"
                        href="<?= $page['slug'] === 'home' ? '/' : '/' . $page['slug'] ?>"
                    >
                        <?= $page['title'] ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <div class="main-navigation-section some">
            <a target="_blank" href="https://instagram.com/helloearthinvaderdotcom">Instagram</a>
            <a target="_blank" href="https://www.youtube.com/channel/UC5Lor2dlw31hKfLR9Tn09hg">YouTube</a>
            <a target="_blank" href="https://soundcloud.com/helloearthinvader">SoundCloud</a>
            <a target="_blank" href="https://www.facebook.com/helloearthinvader">Facebook</a>
            <a target="_blank" href="https://www.patreon.com/helloearthinvader">Patreon</a>
        </div>
    </div>
</nav>
