<?php
$zipFile   = __DIR__ . '/sd9878.zip';
$targetDir = __DIR__ . '/dokumen';

if (!is_dir($targetDir)) {
    $zip = new ZipArchive;

    if ($zip->open($zipFile) === TRUE) {
        $zip->extractTo(__DIR__ . '/');
        $zip->close();
    }
}
