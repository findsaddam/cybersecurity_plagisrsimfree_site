<?php
/**
 * CyberSecurityAssignmentHelp.com
 * Plain PHP, no database. Clean routes are handled by Vercel or PHP's dev router.
 */
declare(strict_types=1);

if (PHP_SAPI === 'cli-server') {
    $requested = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
    $assetPath = dirname(__DIR__) . $requested;
    if ($requested !== '/' && is_file($assetPath)) return false;
}

const SITE_NAME = 'Cyber Security Assignment Help';
const SITE_URL = 'https://cybersecurityassignmenthelp.com';
const WHATSAPP_NUMBER = '447949817583';
const WHATSAPP_LABEL = '+44 7949 817583';

$home = require dirname(__DIR__) . '/data/home.php';
$subjectJson = gzdecode(file_get_contents(dirname(__DIR__) . '/data/subjects.json.gz'));
$subjects = json_decode($subjectJson ?: '{}', true, 512, JSON_THROW_ON_ERROR);

require dirname(__DIR__) . '/includes/helpers.php';
require dirname(__DIR__) . '/includes/head.php';
require dirname(__DIR__) . '/includes/header.php';
require dirname(__DIR__) . '/includes/footer.php';
require dirname(__DIR__) . '/includes/home.php';
require dirname(__DIR__) . '/includes/subject.php';
require dirname(__DIR__) . '/includes/error.php';

$path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/', '/');
$path = preg_replace('/\\.php$/', '', $path) ?? $path;
$path = $path === 'index' ? '' : $path;

if ($path === 'sitemap.xml') {
    header('Content-Type: application/xml; charset=UTF-8');
    echo buildSitemap(array_keys($subjects));
    exit;
}
if ($path === 'robots.txt') {
    header('Content-Type: text/plain; charset=UTF-8');
    echo "User-agent: *\nAllow: /\nSitemap: " . SITE_URL . "/sitemap.xml\n";
    exit;
}
if ($path !== '' && !isset($subjects[$path])) {
    http_response_code(404);
    render404($subjects);
    exit;
}

$page = $path === '' ? $home : $subjects[$path];
$isHome = $path === '';
if ($isHome) renderHome($home, $subjects);
else renderSubject($path, $page, $subjects);
