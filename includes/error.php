<?php
function render404(array $subjects): void {
    $page = [
        'title' => 'Page Not Found | Cyber Security Assignment Help',
        'h1' => 'Page Not Found',
        'description' => 'The requested cybersecurity assignment help page could not be found.',
        'primary' => 'cyber security assignment help',
        'secondary' => [],
    ];
    renderHead($page, SITE_URL . '/404', $subjects);
    renderHeader($subjects);
    ?>
<main><section class="not-found"><div class="container not-found__inner"><span class="big-code">404</span><h1>That page is outside our network.</h1><p>The link may have changed. Return to the homepage or choose a cybersecurity subject below.</p><div class="hero__actions"><a class="btn btn--primary" href="/">Back to Home</a><a class="btn btn--ghost" href="/#subjects">Browse Subjects</a></div></div></section></main>
<?php
    renderFooter($subjects);
}
