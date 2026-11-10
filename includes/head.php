<?php
function renderHead(array $page, string $canonical, array $subjects): void {
    $keywords = array_merge([$page['primary']], $page['secondary'] ?? [], $page['longtails'] ?? []);
    $faq = $page['faqs'] ?? [];
    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'WebSite',
                '@id' => SITE_URL . '/#website',
                'url' => SITE_URL . '/',
                'name' => SITE_NAME,
                'inLanguage' => 'en',
            ],
            [
                '@type' => 'Service',
                '@id' => $canonical . '#service',
                'name' => $page['h1'],
                'description' => $page['description'],
                'url' => $canonical,
                'serviceType' => $page['primary'],
                'audience' => ['@type' => 'EducationalAudience', 'educationalRole' => 'student'],
            ],
        ],
    ];
    if ($faq) {
        $schema['@graph'][] = [
            '@type' => 'FAQPage',
            '@id' => $canonical . '#faq',
            'mainEntity' => array_map(static fn($item) => [
                '@type' => 'Question',
                'name' => $item[0],
                'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item[1]],
            ], $faq),
        ];
    }
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>">
    <meta name="keywords" content="<?= e(implode(', ', $keywords)) ?>">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta name="theme-color" content="#07111f">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($page['title']) ?>">
    <meta property="og:description" content="<?= e($page['description']) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/styles.css?v=1.0.0">
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>
<?php
}
