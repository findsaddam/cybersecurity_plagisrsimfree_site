<?php
function renderFooter(array $subjects): void {
    ?>
<footer class="footer">
    <div class="container footer__grid">
        <div class="footer__brand">
            <a class="brand brand--footer" href="/">
                <span class="brand__mark"><?= icon('shield', 28) ?></span>
                <span class="brand__text"><strong>CyberAssignment</strong><small>Pro</small></span>
            </a>
            <p>Clear, student focused support for cybersecurity theory, authorised labs, technical reports and practical coursework.</p>
            <div class="footer__note"><?= icon('lock', 18) ?> Educational and authorised use guidance only.</div>
        </div>
        <div>
            <h3>Popular Subjects</h3>
            <ul>
                <?php foreach ($subjects as $slug => $subject): ?>
                    <li><a href="/<?= e($slug) ?>"><?= e($subject['nav']) ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div>
            <h3>Student Support</h3>
            <ul>
                <li><a href="/#how-it-works">How it works</a></li>
                <li><a href="/#subjects">Browse subjects</a></li>
                <li><a href="/#faq">Common questions</a></li>
                <li><a href="/case-studies">Solved assignment case studies</a></li>
                <li><a href="<?= e(waLink()) ?>" target="_blank" rel="noopener">WhatsApp support</a></li>
            </ul>
        </div>
        <div class="footer__contact">
            <h3>Need guidance?</h3>
            <p>Share your brief, deadline and module requirements for a focused response.</p>
            <a class="btn btn--primary btn--full" href="<?= e(waLink()) ?>" target="_blank" rel="noopener">WhatsApp <?= e(WHATSAPP_LABEL) ?></a>
        </div>
    </div>
    <div class="container footer__bottom">
        <span>© <?= date('Y') ?> CyberAssignmentPro.com</span>
        <span>Designed for clarity, privacy and academic learning.</span>
    </div>
</footer>
<a class="whatsapp-float" href="<?= e(waLink()) ?>" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <svg width="25" height="25" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.52 3.48A11.8 11.8 0 0 0 12.07 0C5.49 0 .14 5.35.14 11.93c0 2.1.55 4.15 1.6 5.95L.04 24l6.27-1.64a11.9 11.9 0 0 0 5.75 1.47h.01c6.58 0 11.93-5.35 11.93-11.93 0-3.19-1.24-6.18-3.48-8.42ZM12.07 21.8h-.01a9.86 9.86 0 0 1-5.03-1.38l-.36-.21-3.72.98.99-3.63-.24-.37a9.85 9.85 0 0 1-1.52-5.26c0-5.45 4.44-9.89 9.9-9.89a9.8 9.8 0 0 1 7 2.9 9.82 9.82 0 0 1 2.9 7c0 5.45-4.44 9.88-9.9 9.88Zm5.42-7.41c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47a8.9 8.9 0 0 1-1.65-2.05c-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48 0 1.46 1.07 2.87 1.22 3.07.15.2 2.1 3.2 5.08 4.49.71.31 1.26.49 1.7.62.71.23 1.36.19 1.87.12.57-.08 1.76-.72 2.01-1.42.25-.7.25-1.31.17-1.43-.07-.12-.27-.2-.57-.35Z"/></svg>
    <span>WhatsApp</span>
</a>
<script src="/assets/app.js?v=1.1.0" defer></script>
</body>
</html>
<?php
}

function renderHeroVisual(): void {
    ?>
<div class="hero-visual reveal" aria-hidden="true">
    <div class="visual-grid"></div>
    <div class="visual-orbit visual-orbit--one"></div>
    <div class="visual-orbit visual-orbit--two"></div>
    <div class="security-core">
        <div class="security-core__halo"></div>
        <div class="security-core__shield"><?= icon('shield', 62) ?></div>
        <span class="node node--1">IDS</span>
        <span class="node node--2">PKI</span>
        <span class="node node--3">SOC</span>
        <span class="node node--4">VPN</span>
    </div>
    <div class="visual-card visual-card--top"><span class="status-dot"></span><div><small>Study support</small><strong>Human-ready structure</strong></div></div>
    <div class="visual-card visual-card--bottom"><?= icon('file', 21) ?><div><small>Coursework</small><strong>Reports + Labs</strong></div></div>
</div>
<?php
}
