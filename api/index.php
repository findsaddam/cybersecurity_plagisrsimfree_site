<?php
/**
 * CyberAssignment.com
 * Plain PHP, no database. Clean routes are handled by Vercel or PHP's dev router.
 */
declare(strict_types=1);

if (PHP_SAPI === 'cli-server') {
    $requested = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $assetPath = dirname(__DIR__) . $requested;
    if ($requested !== '/' && is_file($assetPath)) return false;
}

const SITE_NAME = 'CyberAssignment';
const SITE_ALT_NAME = 'Cyber Security Assignment Help';
const SITE_URL = 'https://cyberassignment.com';
const WHATSAPP_NUMBER = '447949817583';
const WHATSAPP_LABEL = '+44 7949 817583';

$home = require dirname(__DIR__) . '/data/home.php';
$about = require dirname(__DIR__) . '/data/about.php';
$caseStudies = require dirname(__DIR__) . '/data/case-studies.php';
$windowsSecurityLab1Json = file_get_contents(dirname(__DIR__) . '/data/windows-security-compliance-lab1.json');
$windowsSecurityLab1 = json_decode($windowsSecurityLab1Json ?: '{}', true, 512, JSON_THROW_ON_ERROR);
if (is_array($windowsSecurityLab1)) {
    $caseStudies = array_merge($caseStudies, $windowsSecurityLab1);
}
$sit716CaseStudies = [];
foreach ([
    dirname(__DIR__) . '/data/sit716-week-2.json.gz',
    dirname(__DIR__) . '/data/sit716-week-4.json.gz',
    dirname(__DIR__) . '/data/sit716-week-5.json.gz',
    dirname(__DIR__) . '/data/sit716-week-6.json.gz',
] as $sit716CasePath) {
    $sit716CaseRaw = file_get_contents($sit716CasePath);
    $sit716CaseJson = $sit716CaseRaw !== false ? gzdecode($sit716CaseRaw) : false;
    if ($sit716CaseJson !== false) {
        $sit716CaseData = json_decode($sit716CaseJson, true, 512, JSON_THROW_ON_ERROR);
        if (is_array($sit716CaseData)) {
            $sit716CaseStudies = array_merge($sit716CaseStudies, $sit716CaseData);
        }
    }
}
$caseStudies = array_merge($caseStudies, $sit716CaseStudies);

$subjectJson = gzdecode(file_get_contents(dirname(__DIR__) . '/data/subjects.json.gz'));
$subjects = json_decode($subjectJson ?: '{}', true, 512, JSON_THROW_ON_ERROR);
$extraSubjectJson = file_get_contents(dirname(__DIR__) . '/data/subjects-extra.json');
$extraSubjects = json_decode($extraSubjectJson ?: '{}', true, 512, JSON_THROW_ON_ERROR);
$subjects = array_merge($subjects, $extraSubjects);
unset($subjects['incident-response-assignment-help']);
$expansionJson = file_get_contents(dirname(__DIR__) . '/data/content-expansion.json');
$contentExpansions = json_decode($expansionJson ?: '{}', true, 512, JSON_THROW_ON_ERROR);
foreach ($contentExpansions as $expansionSlug => $expansionData) {
    if (isset($subjects[$expansionSlug])) {
        $subjects[$expansionSlug] = array_merge($subjects[$expansionSlug], $expansionData);
    }
}
$architectureJson = file_get_contents(dirname(__DIR__) . '/data/subject-architecture.json');
$subjectArchitecture = json_decode($architectureJson ?: '{}', true, 512, JSON_THROW_ON_ERROR);
foreach ($subjectArchitecture as $architectureSlug => $architectureData) {
    if (isset($subjects[$architectureSlug])) {
        $subjects[$architectureSlug]['architecture'] = $architectureData;
    }
}

$aeoGeoJson = file_get_contents(dirname(__DIR__) . '/data/aeo-geo-content.json');
$aeoGeoContent = json_decode($aeoGeoJson ?: '{}', true, 512, JSON_THROW_ON_ERROR);
$mergeFaqs = static function(array $existing, array $additional): array {
    $seen = [];
    foreach ($existing as $faq) {
        if (!empty($faq[0])) $seen[strtolower(trim((string)$faq[0]))] = true;
    }
    foreach ($additional as $faq) {
        if (empty($faq[0]) || empty($faq[1])) continue;
        $key = strtolower(trim((string)$faq[0]));
        if (isset($seen[$key])) continue;
        $existing[] = $faq;
        $seen[$key] = true;
    }
    return $existing;
};
if (!empty($aeoGeoContent['home'])) {
    $home['aeo_geo'] = $aeoGeoContent['home'];
    $home['faqs'] = $mergeFaqs($home['faqs'] ?? [], $aeoGeoContent['home']['faqs'] ?? []);
}
foreach ($subjects as $aeoSlug => &$aeoSubject) {
    if (empty($aeoGeoContent[$aeoSlug])) continue;
    $aeoSubject['aeo_geo'] = $aeoGeoContent[$aeoSlug];
    $aeoSubject['faqs'] = $mergeFaqs($aeoSubject['faqs'] ?? [], $aeoGeoContent[$aeoSlug]['faqs'] ?? []);
}
unset($aeoSubject);

$authoritativeReferences = require dirname(__DIR__) . '/data/authoritative-references.php';
foreach ($authoritativeReferences as $referenceSlug => $references) {
    if (isset($subjects[$referenceSlug])) $subjects[$referenceSlug]['authoritative_references'] = $references;
}

$subjectOrder = [
    'network-security-assignment-help',
    'ethical-hacking-assignment-help',
    'digital-forensics-assignment-help',
    'penetration-testing-assignment-help',
    'cryptography-assignment-help',
    'malware-analysis-assignment-help',
    'cloud-computing-assignment-help',
    'information-security-assignment-help',
    'cloud-security-assignment-help',
    'web-application-security-assignment-help',
    'cyber-threat-intelligence-assignment-help',
];
$orderedSubjects = [];
foreach ($subjectOrder as $subjectSlug) {
    if (isset($subjects[$subjectSlug])) $orderedSubjects[$subjectSlug] = $subjects[$subjectSlug];
}
$subjects = $orderedSubjects + $subjects;

header_remove('X-Powered-By');
$host = strtolower($_SERVER['HTTP_HOST'] ?? '');
$isPreviewHost = str_ends_with($host, '.vercel.app');
header('Content-Language: en');
header('Vary: Host');
header('Cache-Control: public, s-maxage=86400, stale-while-revalidate=604800');
if ($isPreviewHost) header('X-Robots-Tag: noindex, nofollow, noarchive');

require dirname(__DIR__) . '/includes/helpers.php';
require dirname(__DIR__) . '/includes/head.php';
require dirname(__DIR__) . '/includes/header.php';
require dirname(__DIR__) . '/includes/footer.php';
require dirname(__DIR__) . '/includes/home.php';
require dirname(__DIR__) . '/includes/about.php';
require dirname(__DIR__) . '/includes/subject.php';
require dirname(__DIR__) . '/includes/case-studies.php';
require dirname(__DIR__) . '/includes/error.php';

$path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/');
$path = preg_replace('/\\.php$/', '', $path) ?? $path;
$path = $path === 'index' ? '' : $path;

if ($path === 'sitemap.xml') {
    header('Content-Type: application/xml; charset=UTF-8');
    $sitemapPaths = array_keys($subjects);
    $sitemapPaths[] = 'about';
    $sitemapPaths[] = 'case-studies';
    foreach (array_keys($caseStudies) as $caseSlug) $sitemapPaths[] = 'case-studies/' . $caseSlug;
    echo buildSitemap($sitemapPaths);
    exit;
}
if ($path === 'robots.txt') {
    header('Content-Type: text/plain; charset=UTF-8');
    if ($isPreviewHost) {
        echo "User-agent: *\nDisallow: /\n";
    } else {
        echo "User-agent: *\nAllow: /\nSitemap: " . SITE_URL . "/sitemap.xml\n";
    }
    exit;
}
if ($path === 'llms.txt') {
    header('Content-Type: text/plain; charset=UTF-8');
    echo "# " . SITE_NAME . "\n\n";
    echo "> Student-oriented cyber security coursework guidance covering theory, authorised labs, reports and practical assignments.\n\n";
    echo "## About & editorial standards\n- " . SITE_URL . "/about — About CyberAssignment.com, editorial standards, source policy and academic integrity\n\n";
    echo "## Main page\n- " . SITE_URL . "/\n\n## Subject pages\n";
    foreach ($subjects as $slug => $subject) {
        echo "- " . SITE_URL . "/" . $slug . " — " . $subject['h1'] . "\n";
    }
    echo "\n## Case studies\n- " . SITE_URL . "/case-studies — Cybersecurity Assignment Case Studies\n";
    foreach ($caseStudies as $slug => $case) {
        echo "- " . SITE_URL . "/case-studies/" . $slug . " — " . $case['h1'] . "\n";
    }
    exit;
}
if ($path === 'incident-response-assignment-help') {
    header('Location: ' . SITE_URL . '/information-security-assignment-help', true, 301);
    exit;
}
if ($path === 'about') {
    renderAbout($about, $subjects, $caseStudies);
    exit;
}
if ($path === 'case-studies') {
    renderCaseStudiesIndex($caseStudies, $subjects);
    exit;
}
if (str_starts_with($path, 'case-studies/')) {
    $caseSlug = substr($path, strlen('case-studies/'));
    if (isset($caseStudies[$caseSlug])) {
        renderCaseStudy($caseSlug, $caseStudies[$caseSlug], $caseStudies, $subjects);
        exit;
    }
}
if ($path !== '' && $path !== 'about' && !isset($subjects[$path])) {
    http_response_code(404);
    render404($subjects, $caseStudies);
    exit;
}

$page = $path === '' ? $home : $subjects[$path];
$isHome = $path === '';
if ($isHome) renderHome($home, $subjects, $caseStudies);
else renderSubject($path, $page, $subjects, $caseStudies);
