<?php
function renderHead(array $page, string $canonical, array $subjects): void {
    $faq = $page['faqs'] ?? [];
    $isHome = rtrim($canonical, '/') === rtrim(SITE_URL, '/');
    $isPreviewHost = str_ends_with(strtolower($_SERVER['HTTP_HOST'] ?? ''), '.vercel.app');
    $robots = $isPreviewHost
        ? 'noindex, nofollow, noarchive'
        : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

    $organizationId = SITE_URL . '/#organization';
    $websiteId = SITE_URL . '/#website';
    $serviceId = $canonical . '#service';
    $webPageId = $canonical . '#webpage';

    $graph = [
        ['@type'=>'Organization','@id'=>$organizationId,'name'=>SITE_NAME,'url'=>SITE_URL . '/'],
        ['@type'=>'WebSite','@id'=>$websiteId,'url'=>SITE_URL . '/','name'=>SITE_NAME,'publisher'=>['@id'=>$organizationId],'inLanguage'=>'en'],
        ['@type'=>'WebPage','@id'=>$webPageId,'url'=>$canonical,'name'=>$page['h1'],'description'=>$page['description'],'isPartOf'=>['@id'=>$websiteId],'about'=>['@type'=>'Thing','name'=>$page['primary']],'mainEntity'=>['@id'=>$serviceId],'inLanguage'=>'en'],
        ['@type'=>'Service','@id'=>$serviceId,'name'=>$page['h1'],'description'=>$page['description'],'url'=>$canonical,'serviceType'=>$page['primary'],'provider'=>['@id'=>$organizationId],'audience'=>['@type'=>'EducationalAudience','educationalRole'=>'student']],
    ];

    $breadcrumbItems = [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>SITE_URL . '/'],
    ];
    if (!$isHome) {
        $breadcrumbItems[] = ['@type'=>'ListItem','position'=>2,'name'=>$page['nav'] ?? $page['h1'],'item'=>$canonical];
    }
    $graph[] = ['@type'=>'BreadcrumbList','@id'=>$canonical . '#breadcrumb','itemListElement'=>$breadcrumbItems];

    if ($faq) {
        $graph[] = [
            '@type'=>'FAQPage',
            '@id'=>$canonical . '#faq',
            'mainEntity'=>array_map(static fn($item) => [
                '@type'=>'Question',
                'name'=>$item[0],
                'acceptedAnswer'=>['@type'=>'Answer','text'=>$item[1]],
            ], $faq),
        ];
    }

    $schema = ['@context'=>'https://schema.org','@graph'=>$graph];
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($page['title']) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>">
    <meta name="robots" content="<?= e($robots) ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta name="theme-color" content="#07111f">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($page['title']) ?>">
    <meta property="og:description" content="<?= e($page['description']) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= e($page['title']) ?>">
    <meta name="twitter:description" content="<?= e($page['description']) ?>">
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
    <link rel="stylesheet" href="/assets/styles.css?v=2.0.0">
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>
<?php
}
