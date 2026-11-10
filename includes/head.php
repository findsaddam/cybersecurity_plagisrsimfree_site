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
    $pageType = $page['page_type'] ?? 'service';

    $graph = [
        ['@type'=>'Organization','@id'=>$organizationId,'name'=>SITE_NAME,'url'=>SITE_URL . '/'],
        ['@type'=>'WebSite','@id'=>$websiteId,'url'=>SITE_URL . '/','name'=>SITE_NAME,'publisher'=>['@id'=>$organizationId],'inLanguage'=>'en'],
    ];
    if ($pageType === 'case_study') {
        $articleId = $canonical . '#article';
        $graph[] = ['@type'=>'WebPage','@id'=>$webPageId,'url'=>$canonical,'name'=>$page['h1'],'description'=>$page['description'],'isPartOf'=>['@id'=>$websiteId],'mainEntity'=>['@id'=>$articleId],'inLanguage'=>'en'];
        $graph[] = ['@type'=>'Article','@id'=>$articleId,'headline'=>$page['h1'],'description'=>$page['description'],'url'=>$canonical,'author'=>['@id'=>$organizationId],'publisher'=>['@id'=>$organizationId],'about'=>array_map(static fn($topic)=>['@type'=>'Thing','name'=>$topic],$page['topics']??[]),'inLanguage'=>'en'];
    } elseif ($pageType === 'case_study_index') {
        $graph[] = ['@type'=>'CollectionPage','@id'=>$webPageId,'url'=>$canonical,'name'=>$page['h1'],'description'=>$page['description'],'isPartOf'=>['@id'=>$websiteId],'inLanguage'=>'en'];
    } else {
        $graph[] = ['@type'=>'WebPage','@id'=>$webPageId,'url'=>$canonical,'name'=>$page['h1'],'description'=>$page['description'],'isPartOf'=>['@id'=>$websiteId],'about'=>['@type'=>'Thing','name'=>$page['primary']],'mainEntity'=>['@id'=>$serviceId],'inLanguage'=>'en'];
        $graph[] = ['@type'=>'Service','@id'=>$serviceId,'name'=>$page['h1'],'description'=>$page['description'],'url'=>$canonical,'serviceType'=>$page['primary'],'provider'=>['@id'=>$organizationId],'audience'=>['@type'=>'EducationalAudience','educationalRole'=>'student']];
    }

    $breadcrumbItems = [
        ['@type'=>'ListItem','position'=>1,'name'=>'Home','item'=>SITE_URL . '/'],
    ];
    if (!$isHome) {
        if ($pageType === 'case_study') {
            $breadcrumbItems[] = ['@type'=>'ListItem','position'=>2,'name'=>'Case Studies','item'=>SITE_URL . '/case-studies'];
            $breadcrumbItems[] = ['@type'=>'ListItem','position'=>3,'name'=>$page['nav'] ?? $page['h1'],'item'=>$canonical];
        } else {
            $breadcrumbItems[] = ['@type'=>'ListItem','position'=>2,'name'=>$page['nav'] ?? $page['h1'],'item'=>$canonical];
        }
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

    $metaTitles = [
        'Cyber Security Assignment Help for Students' => 'Cyber Security Assignment Help | Cyber Assignment Pro',
        'Network Security Assignment Help' => 'Premium Network Security Assignment Help | Coursework & Labs',
        'Ethical Hacking Assignment Help' => 'Premium Ethical Hacking Assignment Help | Coursework & Labs',
        'Digital Forensics Assignment Help' => 'Premium Digital Forensics Assignment Help | Reports & Labs',
        'Penetration Testing Assignment Help' => 'Premium Penetration Testing Assignment Help | Coursework Support',
        'Cryptography Assignment Help' => 'Premium Cryptography Assignment Help | Homework & Coursework',
        'Malware Analysis Assignment Help' => 'Premium Malware Analysis Assignment Help | Reports & Labs',
        'Cloud Security Assignment Help' => 'Premium Cloud Security Assignment Help | AWS & Azure Coursework',
        'Web Application Security Assignment Help' => 'Premium Web Application Security Assignment Help | OWASP Coursework',
        'Incident Response Assignment Help' => 'Premium Incident Response Assignment Help | Reports & Playbooks',
        'Cyber Threat Intelligence Assignment Help' => 'Premium Cyber Threat Intelligence Assignment Help | CTI Coursework',
    ];
    $metaTitle = $page['meta_title'] ?? ($metaTitles[$page['h1']] ?? ('Premium ' . $page['title']));

    $schema = ['@context'=>'https://schema.org','@graph'=>$graph];
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($metaTitle) ?></title>
    <meta name="description" content="<?= e($page['description']) ?>">
    <meta name="robots" content="<?= e($robots) ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta name="theme-color" content="#07111f">
    <meta property="og:type" content="<?= $pageType === 'case_study' ? 'article' : 'website' ?>">
    <meta property="og:title" content="<?= e($metaTitle) ?>">
    <meta property="og:description" content="<?= e($page['description']) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= e($metaTitle) ?>">
    <meta name="twitter:description" content="<?= e($page['description']) ?>">
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
    <link rel="stylesheet" href="/assets/styles.css?v=2.3.0">
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>
<?php
}
