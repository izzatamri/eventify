<?php
/**
 * Router for the PHP development server to handle static assets
 * and route all other requests through index.php (front controller)
 */

$publicDir = __DIR__ . DIRECTORY_SEPARATOR . 'public';
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Normalize the path for Windows
$filePath = $publicDir . str_replace('/', DIRECTORY_SEPARATOR, $uri);

// Assets should be served directly from the public/assets directory
if (strpos($uri, '/assets/') === 0) {
    $filePath = $publicDir . str_replace('/', DIRECTORY_SEPARATOR, $uri);
    if (file_exists($filePath)) {
        return false; // Serve the file directly
    }
}

// If it's a static file (CSS, JS, images, fonts, etc.), serve it directly
if ($uri !== '/' && file_exists($filePath)) {
    return false;
}

// If it's a directory, check for index.html or index.php
if (is_dir($filePath)) {
    if (file_exists($filePath . DIRECTORY_SEPARATOR . 'index.html')) {
        include $filePath . DIRECTORY_SEPARATOR . 'index.html';
        return true;
    } elseif (file_exists($filePath . DIRECTORY_SEPARATOR . 'index.php')) {
        include $filePath . DIRECTORY_SEPARATOR . 'index.php';
        return true;
    }
}

// Otherwise, route all requests through index.php (Symfony routing)
require_once $publicDir . DIRECTORY_SEPARATOR . 'index.php';
