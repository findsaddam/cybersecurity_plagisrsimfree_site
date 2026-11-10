<?php
function renderHeader(array $subjects): void {
    ?>
<div class="topbar">
    <div class="container topbar__inner">
        <div class="topbar__message"><span class="pulse"></span> Student-focused cybersecurity academic support</div>
        <div class="topbar__right">
            <span class="topbar__trust"><?= icon('lock', 16) ?> Private & confidential</span>
            <a href="<?= e(waLink()) ?>" target="_blank" rel="noopener">WhatsApp <?= e(WHATSAPP_LABEL) ?></a>
        </div>
    </div>
</div>
<header class="site-header" id="siteHeader">
    <div class="container nav-wrap">
        <a class="brand" href="/" aria-label="Cyber Security Assignment Help home">
            <span class="brand__mark"><?= icon('shield', 28) ?></span>
            <span class="brand__text"><strong>CyberSecurity</strong><small>Assignment Help</small></span>
        </a>
        <nav class="desktop-nav" aria-label="Main navigation">
            <a href="/" class="nav-link">Home</a>
            <div class="nav-dropdown" data-dropdown>
                <button class="nav-link nav-dropdown__toggle" type="button" aria-expanded="false" data-dropdown-toggle>
                    Subjects <span class="chevron">⌄</span>
                </button>
                <div class="dropdown-panel" data-dropdown-panel>
                    <div class="dropdown-head">
                        <div><span class="mini-label">Most requested</span><strong>Cybersecurity Subjects</strong></div>
                        <span class="dropdown-badge">6 focused pages</span>
                    </div>
                    <div class="dropdown-grid">
                        <?php foreach ($subjects as $slug => $subject): ?>
                            <a class="dropdown-card" href="/<?= e($slug) ?>">
                                <span class="dropdown-card__icon"><?= icon($subject['icon'], 20) ?></span>
                                <span><strong><?= e($subject['nav']) ?></strong><small><?= e($subject['eyebrow']) ?></small></span>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <a href="#how-it-works" class="nav-link">How It Works</a>
            <a href="#faq" class="nav-link">FAQs</a>
        </nav>
        <div class="nav-actions">
            <a class="btn btn--sm btn--primary desktop-cta" href="<?= e(waLink()) ?>" target="_blank" rel="noopener">Get Help <?= icon('arrow', 17) ?></a>
            <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" data-menu-toggle>
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
<div class="mobile-overlay" data-mobile-overlay></div>
<aside class="mobile-menu" data-mobile-menu aria-hidden="true">
    <div class="mobile-menu__head">
        <a class="brand" href="/">
            <span class="brand__mark"><?= icon('shield', 25) ?></span>
            <span class="brand__text"><strong>CyberSecurity</strong><small>Assignment Help</small></span>
        </a>
        <button class="mobile-close" type="button" aria-label="Close menu" data-menu-close>×</button>
    </div>
    <nav class="mobile-nav">
        <a href="/">Home</a>
        <button type="button" class="mobile-accordion" aria-expanded="false" data-mobile-subjects>Subjects <span>+</span></button>
        <div class="mobile-subjects" data-mobile-subjects-panel>
            <?php foreach ($subjects as $slug => $subject): ?>
                <a href="/<?= e($slug) ?>"><?= icon($subject['icon'], 18) ?> <?= e($subject['nav']) ?></a>
            <?php endforeach; ?>
        </div>
        <a href="#how-it-works">How It Works</a>
        <a href="#faq">FAQs</a>
    </nav>
    <div class="mobile-menu__cta">
        <p>Have an assignment brief?</p>
        <a class="btn btn--primary btn--full" href="<?= e(waLink()) ?>" target="_blank" rel="noopener">Send it on WhatsApp <?= icon('arrow', 17) ?></a>
    </div>
</aside>
<?php
}
