<?php
/**
 * Primus Catering & Camp Management
 * Global Configuration & Database Initialization
 */

// Start session securely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Global timezone
date_default_timezone_set('America/Chicago');

// Database configuration (SQLite setup)
define('DB_DIR', __DIR__ . '/../database');
define('DB_FILE', DB_DIR . '/primus.db');

try {
    // Create database directory if not exists
    if (!is_dir(DB_DIR)) {
        mkdir(DB_DIR, 0755, true);
    }

    // Connect to SQLite Database
    $pdo = new PDO("sqlite:" . DB_FILE);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // Initialize Schema: Create inquiries table
    $schema = "CREATE TABLE IF NOT EXISTS inquiries (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        company TEXT,
        email TEXT NOT NULL,
        phone TEXT,
        service TEXT NOT NULL,
        message TEXT,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    );";
    $pdo->exec($schema);

} catch (PDOException $e) {
    die("Database initialization failed: " . $e->getMessage());
}

/**
 * Active Page Helper
 * Checks if the current request script matches the given page name.
 * Returns the CSS active class if matched.
 */
function getActivePageClass($pageName, $activeClass = 'active-nav-link') {
    $currentScript = basename($_SERVER['SCRIPT_NAME']);
    if ($currentScript === $pageName) {
        return $activeClass;
    }
    // Default home state if script name is empty or directory root
    if (($pageName === 'index.php') && ($currentScript === '' || $currentScript === 'index')) {
        return $activeClass;
    }
    return '';
}

/**
 * Clean data input sanitization
 */
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, 'UTF-8');
}
