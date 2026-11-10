# CyberAssignmentPro.com

A lightweight, responsive PHP website for Cyber Assignment Pro, focused on cybersecurity academic support. It uses no database and keeps page content in a single PHP data structure so future human-written content can be replaced page by page without changing the design system.

## Pages

- `/` — Cyber Security Assignment Help
- `/network-security-assignment-help`
- `/ethical-hacking-assignment-help`
- `/digital-forensics-assignment-help`
- `/penetration-testing-assignment-help`
- `/cryptography-assignment-help`
- `/malware-analysis-assignment-help`

## Local development

```bash
php -S 127.0.0.1:8080 api/index.php
```

Open `http://127.0.0.1:8080`.

## Vercel

The project includes `vercel.json` configured for `vercel-php@0.9.0` with filesystem-first routing and a PHP fallback. The PHP runtime is a community runtime, so the site intentionally avoids runtime-specific application code and can be moved to another PHP host or container later.

## Content replacement

All page copy is stored near the top of `api/index.php` in `$home` and `$subjects`. When final human-written Word documents are ready, replace the corresponding page data/content while keeping the templates and design intact.
