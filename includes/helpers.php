<?php
function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
function waLink(string $context = 'cyber security assignment'): string {
    $message = rawurlencode("Hello, I need help with my {$context}. I can share the assignment brief and deadline.");
    return 'https://wa.me/' . WHATSAPP_NUMBER . '?text=' . $message;
}
function icon(string $name, int $size = 24): string {
    $icons = [
        'shield' => '<path d="M12 3 5 6v5c0 4.7 2.9 8.3 7 10 4.1-1.7 7-5.3 7-10V6l-7-3Z"/><path d="m9 12 2 2 4-4"/>',
        'network' => '<rect x="4" y="4" width="6" height="5" rx="1"/><rect x="14" y="15" width="6" height="5" rx="1"/><rect x="4" y="15" width="6" height="5" rx="1"/><path d="M7 9v3h10v3M7 12v3"/>',
        'terminal' => '<rect x="3" y="4" width="18" height="16" rx="2"/><path d="m7 9 3 3-3 3m5 0h5"/>',
        'search' => '<circle cx="11" cy="11" r="7"/><path d="m20 20-4-4m-8-5h6m-3-3v6"/>',
        'key' => '<circle cx="8" cy="15" r="4"/><path d="m11 12 8-8m-3 3 2 2m-5 1 2 2"/>',
        'bug' => '<path d="M8 7a4 4 0 0 1 8 0v9a4 4 0 0 1-8 0V7Z"/><path d="M5 8h3m8 0h3M5 13h3m8 0h3M6 18l3-2m9 2-3-2M9 4 7 2m8 2 2-2m-9 9h8"/>',
        'arrow' => '<path d="M5 12h14m-5-5 5 5-5 5"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'book' => '<path d="M4 5.5A2.5 2.5 0 0 1 6.5 3H11v16H6.5A2.5 2.5 0 0 0 4 21.5v-16Zm16 0A2.5 2.5 0 0 0 17.5 3H13v16h4.5a2.5 2.5 0 0 1 2.5 2.5v-16Z"/>',
        'message' => '<path d="M21 15a4 4 0 0 1-4 4H8l-5 3 1.5-5A8 8 0 0 1 3 12a8 8 0 0 1 8-8h2a8 8 0 0 1 8 8v3Z"/>',
        'file' => '<path d="M6 2h8l4 4v16H6V2Z"/><path d="M14 2v5h5M9 12h6m-6 4h6"/>',
        'lock' => '<rect x="5" y="10" width="14" height="11" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3m-4 4v3"/>',
        'spark' => '<path d="m12 3 1.4 4.6L18 9l-4.6 1.4L12 15l-1.4-4.6L6 9l4.6-1.4L12 3Zm6 11 .7 2.3L21 17l-2.3.7L18 20l-.7-2.3L15 17l2.3-.7L18 14Z"/>',
    ];
    $body = $icons[$name] ?? $icons['shield'];
    return '<svg class="icon" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $body . '</svg>';
}
function buildSitemap(array $slugs): string {
    $urls = [SITE_URL . '/'];
    foreach ($slugs as $slug) $urls[] = SITE_URL . '/' . $slug;
    $date = date('Y-m-d');
    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
    foreach ($urls as $i => $url) {
        $xml .= "  <url>\n    <loc>" . htmlspecialchars($url, ENT_XML1) . "</loc>\n    <lastmod>{$date}</lastmod>\n    <changefreq>" . ($i === 0 ? 'weekly' : 'monthly') . "</changefreq>\n    <priority>" . ($i === 0 ? '1.0' : '0.9') . "</priority>\n  </url>\n";
    }
    $xml .= '</urlset>';
    return $xml;
}
