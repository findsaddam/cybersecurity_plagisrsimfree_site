<?php
declare(strict_types=1);

$loadWindowsSecurityLab = static function(string $file): array {
    $raw = file_get_contents(__DIR__ . '/' . $file);
    if ($raw === false) return [];
    $data = json_decode($raw, true, 512, JSON_THROW_ON_ERROR);
    return is_array($data) ? $data : [];
};

return array_merge(
    $loadWindowsSecurityLab('windows-security-lab-1.json'),
    $loadWindowsSecurityLab('windows-security-lab-2.json'),
    $loadWindowsSecurityLab('windows-security-lab-3.json'),
    $loadWindowsSecurityLab('windows-security-lab-4.json'),
);
