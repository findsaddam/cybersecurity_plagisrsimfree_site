<?php
function renderHead(array $page, string $canonical, array $subjects): void {
    $faq = $page['faqs'] ?? [];
    $isHome = rtrim($canonical, '/') === rtrim(SITE_URL, '/');
    $isPreviewHost = str_ends_with(strtolower($_SERVER['HTTP_HOST'] ?? ''), '.vercel.app');
    $robots = $isPreviewHost
        ? 'noindex, nofollow, noarchive'
        : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';

    $seoPath = parse_url($canonical, PHP_URL_PATH) ?: '/';
    $seoMeta = [
        '/' => [
            'title' => 'Premium Cyber Security Assignment Help | CyberAssignment',
            'description' => 'Get cyber security assignment help for university coursework, labs, reports and projects covering ethical hacking, forensics, networks, cloud security and more.',
        ],
        '/network-security-assignment-help' => [
            'title' => 'Network Security Assignment Help | CyberAssignment',
            'description' => 'Network security assignment help for university students covering firewalls, VPNs, IDS/IPS, routing, segmentation, packet analysis, labs and technical reports.',
        ],
        '/ethical-hacking-assignment-help' => [
            'title' => 'Ethical Hacking Assignment Help | CyberAssignment',
            'description' => 'Ethical hacking assignment help for authorised university labs, reconnaissance, vulnerability analysis, evidence, remediation and professional report writing.',
        ],
        '/digital-forensics-assignment-help' => [
            'title' => 'Digital Forensics Assignment Help | CyberAssignment',
            'description' => 'Digital forensics assignment help covering evidence handling, disk artefacts, timelines, chain of custody, Autopsy labs, forensic methods and academic reports.',
        ],
        '/penetration-testing-assignment-help' => [
            'title' => 'Penetration Testing Assignment Help | CyberAssignment',
            'description' => 'Penetration testing assignment help for authorised labs, vulnerability validation, risk scoring, evidence, remediation, executive summaries and university reports.',
        ],
        '/cryptography-assignment-help' => [
            'title' => 'Cryptography Assignment Help | CyberAssignment',
            'description' => 'Cryptography assignment help for encryption, hashing, digital signatures, key exchange, PKI, authentication, protocols, calculations and security analysis.',
        ],
        '/malware-analysis-assignment-help' => [
            'title' => 'Malware Analysis Assignment Help | CyberAssignment',
            'description' => 'Malware analysis assignment help for safe university labs, static and behavioural analysis, indicators, evidence, defensive interpretation and structured reports.',
        ],
        '/cloud-computing-assignment-help' => [
            'title' => 'Cloud Computing Assignment Help | CyberAssignment',
            'description' => 'Cloud computing assignment help covering service models, architecture, virtualisation, deployment, storage, networking, scalability, AWS and Azure coursework.',
        ],
        '/information-security-assignment-help' => [
            'title' => 'Information Security Assignment Help | CyberAssignment',
            'description' => 'Information security assignment help covering the CIA triad, risk assessment, security policies, governance, access control, compliance and management reports.',
        ],
        '/cloud-security-assignment-help' => [
            'title' => 'Cloud Security Assignment Help | CyberAssignment',
            'description' => 'Cloud security assignment help covering IAM, shared responsibility, logging, storage security, cloud risk, AWS, Azure, practical work and academic reports.',
        ],
        '/web-application-security-assignment-help' => [
            'title' => 'Web Application Security Help | CyberAssignment',
            'description' => 'Web application security assignment help covering OWASP risks, authentication, access control, secure coding, authorised testing, evidence and remediation reports.',
        ],
        '/cyber-threat-intelligence-assignment-help' => [
            'title' => 'Cyber Threat Intelligence Help | CyberAssignment',
            'description' => 'Cyber threat intelligence assignment help covering threat actors, indicators, MITRE ATT&CK, intelligence lifecycle, source evaluation and structured CTI reports.',
        ],
        '/case-studies' => [
            'title' => 'Solved Cybersecurity Case Studies | CyberAssignment',
            'description' => 'Explore solved cybersecurity assignments and practical case studies covering security labs, cryptography, networks, forensics, vulnerabilities and technical analysis.',
        ],
        '/case-studies/red-team-capstone-incident-response-case-study' => [
            'title' => 'Red Team Capstone Incident Response | CyberAssignment',
            'description' => 'Solved Red Team Capstone case study covering reconnaissance, privilege escalation, lateral movement, Active Directory compromise and incident response analysis.',
        ],
        '/case-studies/squid-proxy-implementation-acl-lab' => [
            'title' => 'Squid Proxy ACL Lab Solution | CyberAssignment',
            'description' => 'Solved Squid proxy lab covering installation, http_port, localnet ACLs, Windows proxy settings, ordered access rules, business hours and domain blocking.',
        ],
        '/case-studies/windows-server-2022-active-directory-domain-lab' => [
            'title' => 'Windows Server AD Domain Lab | CyberAssignment',
            'description' => 'Solved Windows Server 2022 Active Directory lab covering AD DS, domain controller setup, OUs, users, domain joins, shared folders and permissions.',
        ],
        '/case-studies/buffer-overflow-attack-demo-getscore' => [
            'title' => 'Buffer Overflow getscore Lab | CyberAssignment',
            'description' => 'Solved buffer overflow case study covering getscore requirements, GDB crash analysis, EIP offset discovery, exploit results, defenses and command injection.',
        ],
        '/case-studies/double-ratchet-digital-signature-assignment' => [
            'title' => 'Double Ratchet & Digital Signatures | CyberAssignment',
            'description' => 'Solved encryption and digital signature analysis covering the Double Ratchet Algorithm, message keys, forward secrecy, authentication and GPG concepts.',
        ],
        '/case-studies/pfsense-openvpn-radius-vpn-lab' => [
            'title' => 'pfSense OpenVPN RADIUS Lab | CyberAssignment',
            'description' => 'Solved pfSense VPN lab covering OpenVPN, FreeRADIUS authentication, tunnel settings, radtest verification, routing, Telnet security and VPN logs.',
        ],
        '/case-studies/return-to-libc-attack-lab' => [
            'title' => 'Return-to-libc Attack Lab | CyberAssignment',
            'description' => 'Solved Return-to-libc Attack Lab using SEED Ubuntu 20.04, covering libc address discovery, payload construction, attack variations and dash countermeasures.',
        ],
    ];

    $metaTitle = $seoMeta[$seoPath]['title'] ?? ($page['meta_title'] ?? ('Premium ' . ($page['title'] ?? $page['h1'] ?? SITE_NAME)));
    $metaDescription = $seoMeta[$seoPath]['description'] ?? ($page['description'] ?? '');

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
        $graph[] = ['@type'=>'WebPage','@id'=>$webPageId,'url'=>$canonical,'name'=>$page['h1'],'description'=>$metaDescription,'isPartOf'=>['@id'=>$websiteId],'mainEntity'=>['@id'=>$articleId],'inLanguage'=>'en'];
        $graph[] = ['@type'=>'Article','@id'=>$articleId,'headline'=>$page['h1'],'description'=>$metaDescription,'url'=>$canonical,'author'=>['@id'=>$organizationId],'publisher'=>['@id'=>$organizationId],'about'=>array_map(static fn($topic)=>['@type'=>'Thing','name'=>$topic],$page['topics']??[]),'inLanguage'=>'en'];
    } elseif ($pageType === 'case_study_index') {
        $graph[] = ['@type'=>'CollectionPage','@id'=>$webPageId,'url'=>$canonical,'name'=>$page['h1'],'description'=>$metaDescription,'isPartOf'=>['@id'=>$websiteId],'inLanguage'=>'en'];
    } else {
        $graph[] = ['@type'=>'WebPage','@id'=>$webPageId,'url'=>$canonical,'name'=>$page['h1'],'description'=>$metaDescription,'isPartOf'=>['@id'=>$websiteId],'about'=>['@type'=>'Thing','name'=>$page['primary']],'mainEntity'=>['@id'=>$serviceId],'inLanguage'=>'en'];
        $graph[] = ['@type'=>'Service','@id'=>$serviceId,'name'=>$page['h1'],'description'=>$metaDescription,'url'=>$canonical,'serviceType'=>$page['primary'],'provider'=>['@id'=>$organizationId],'audience'=>['@type'=>'EducationalAudience','educationalRole'=>'student']];
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

    $schema = ['@context'=>'https://schema.org','@graph'=>$graph];
    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($metaTitle) ?></title>
    <meta name="description" content="<?= e($metaDescription) ?>">
    <meta name="robots" content="<?= e($robots) ?>">
    <link rel="canonical" href="<?= e($canonical) ?>">
    <meta name="theme-color" content="#07111f">
    <meta property="og:type" content="<?= $pageType === 'case_study' ? 'article' : 'website' ?>">
    <meta property="og:title" content="<?= e($metaTitle) ?>">
    <meta property="og:description" content="<?= e($metaDescription) ?>">
    <meta property="og:url" content="<?= e($canonical) ?>">
    <meta property="og:site_name" content="<?= e(SITE_NAME) ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= e($metaTitle) ?>">
    <meta name="twitter:description" content="<?= e($metaDescription) ?>">
    <link rel="icon" type="image/svg+xml" href="/assets/favicon.svg">
    <link rel="stylesheet" href="/assets/styles.css?v=3.2.0">
    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>
</head>
<body>
<?php
}
