<?php
declare(strict_types=1);

$loadWindowsSecurityLab = static function(string $file, bool $compressed=false): array {
    $path = __DIR__ . '/' . $file;
    $raw = file_get_contents($path);
    if ($raw === false) return [];
    if ($compressed) {
        $decoded = base64_decode(trim($raw), true);
        if ($decoded === false) return [];
        $json = gzdecode($decoded);
        if ($json === false) return [];
        $raw = $json;
    }
    $data = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
    return is_array($data) ? $data : [];
};

return array_merge(
    $loadWindowsSecurityLab('windows-security-lab-1.json'),
    $loadWindowsSecurityLab('windows-security-lab-2.json.gz.b64', true),
    $loadWindowsSecurityLab('windows-security-lab-3.json.gz.b64', true),
    $loadWindowsSecurityLab('windows-security-lab-4.json.gz.b64', true),
);
