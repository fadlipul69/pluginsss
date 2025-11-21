<?php
/**
 * CRON Malware Scanner & Cleaner
 * ---------------------------------
 * - Scan folder untuk file mencurigakan
 * - Auto delete file berbahaya
 * - Auto create .htaccess jika hilang
 * - Bisa expand daftar file
 */

// === CONFIG ===

// Folder yang akan discan (misal root website)
$scanPath = __DIR__."/../public_html/"; 

// List file yang dianggap malware
$malwareFiles = [
    ".shopping.",
    ".profile.",
    ".news.",
    ".service.",
    ".career.",
    ".search.",
    ".contact.",
];

// List ekstensi berbahaya
$malwareExtensions = [
   "", ".txt"
];

// List folder berbahaya
$malwareFolders = [
    "news",
     "events",
];

// Default isi .htaccess jika hilang
$defaultHtaccess = <<<HTA
RewriteEngine On
RewriteBase /

# Block access to system & application folder
RewriteRule ^(system|application)(.*)$ - [F,L,NC]

# Remove index.php
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]

Options -Indexes

<FilesMatch "(^\.|composer\.(json|lock)|\.env|\.gitignore|.*\.(sql|bak|old|zip|tar|gz))">
    Require all denied
</FilesMatch>

# Security headers
<IfModule mod_headers.c>
    Header set X-Content-Type-Options "nosniff"
    Header set X-Frame-Options "SAMEORIGIN"
    Header set X-XSS-Protection "1; mode=block"
</IfModule>

# Prevent TRACE
RewriteCond %{REQUEST_METHOD} ^(TRACE|TRACK)
RewriteRule .* - [F]

HTA;

// === FUNCTION ===

// Hapus file
function deleteFile($file) {
    if (file_exists($file)) {
        unlink($file);
        logMessage("DELETED FILE: $file");
    }
}

// Hapus folder lengkap
function deleteFolder($folder) {
    if (!is_dir($folder)) return;
    $files = array_diff(scandir($folder), ['.', '..']);
    foreach ($files as $file) {
        $path = "$folder/$file";
        is_dir($path) ? deleteFolder($path) : unlink($path);
    }
    rmdir($folder);
    logMessage("DELETED FOLDER: $folder");
}

// Logger
function logMessage($msg) {
    $logFile = __DIR__ . "/cron_security.log";
    file_put_contents($logFile, "[" . date("Y-m-d H:i:s") . "] $msg\n", FILE_APPEND);
}

// === SCAN PROCESS ===

logMessage("=== SCAN STARTED ===");

// 1. Check .htaccess
$htaccessPath = $scanPath . "/.htaccess";
file_put_contents($htaccessPath, $GLOBALS['defaultHtaccess']);
logMessage("AUTO CREATED: .htaccess");

// 2. Scan semua file
$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($scanPath, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    $filePath = $file->getPathname();
    $fileName = $file->getFilename();

    // Check file pada list malware
    if (in_array($fileName, $malwareFiles)) {
        deleteFile($filePath);
        continue;
    }

   
}

// 3. Scan folder mencurigakan
foreach ($malwareFolders as $folder) {
    $fullPath = $scanPath . "/" . $folder;
    if (is_dir($fullPath)) {
         deleteFolder($fullPath);
    }
}

logMessage("=== SCAN FINISHED ===");

echo "SCAN COMPLETED.\n";
?>
