<?php

chdir(__DIR__);
$filePath = realpath(ltrim($_SERVER["REQUEST_URI"], '/'));

if ($filePath && is_dir($filePath)) {
  // attempt to find an index file
  foreach (['index.php', 'index.html'] as $indexFile) {
    if ($filePath = realpath($filePath . DIRECTORY_SEPARATOR . $indexFile)) {
      break;
    }
  }
}

if ($filePath && is_file($filePath)) {
  // check that file is not outside of this directory for security
  $isNotOutside = strpos($filePath, __DIR__ . DIRECTORY_SEPARATOR) === 0;
  $isNotThisFile = $filePath !== __DIR__ . DIRECTORY_SEPARATOR . 'router.php';
  $isNotDotFile = substr(basename($filePath), 0, 1) !== '.';

  if ($isNotOutside && $isNotThisFile && $isNotDotFile) {
    $isPHPFile = strtolower(substr($filePath, -4)) === '.php';
    if ($isPHPFile) {
      // php file; serve through interpreter
      include $filePath;
    } else {
      // asset file; serve from filesystem
      return false;
    }
  } else {
    // disallowed file
    header("HTTP/1.1 404 Not Found");
    echo "404 Not Found";
  }
} else {
  // rewrite to index file
  $_GET['__url'] = ltrim($_SERVER["REQUEST_URI"], '/');
  include __DIR__ . DIRECTORY_SEPARATOR . 'index.php';
}
