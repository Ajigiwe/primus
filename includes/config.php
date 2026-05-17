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

/* ==========================================================================
   Database Engine Toggle (SQLite for XAMPP / MySQL for InfinityFree)
   ========================================================================== */
// Choose 'sqlite' (local development) or 'mysql' (production deployment)
define('DB_ENGINE', 'sqlite');

// SQLite Setup Paths (ignored if DB_ENGINE is 'mysql')
define('DB_DIR', __DIR__ . '/../database');
define('DB_FILE', DB_DIR . '/primus.db');

// MySQL Credentials (ignored if DB_ENGINE is 'sqlite')
// Enter your InfinityFree or cPanel MySQL details here
define('DB_HOST', 'sqlxxx.infinityfree.com');
define('DB_NAME', 'if0_xxxxxxxx_primus');
define('DB_USER', 'if0_xxxxxxxx');
define('DB_PASS', 'your_infinityfree_password');

$pdo = null;
$db_error = null;

try {
    if (DB_ENGINE === 'sqlite') {
        // Create database directory if not exists
        if (!is_dir(DB_DIR)) {
            mkdir(DB_DIR, 0755, true);
        }

        // Connect to SQLite Database
        $pdo = new PDO("sqlite:" . DB_FILE);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Initialize Schema for SQLite
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
    } else {
        // Connect to MySQL Database
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        // Initialize Schema for MySQL
        $schema = "CREATE TABLE IF NOT EXISTS inquiries (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            company VARCHAR(255),
            email VARCHAR(255) NOT NULL,
            phone VARCHAR(50),
            service VARCHAR(255) NOT NULL,
            message TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
        $pdo->exec($schema);
    }
} catch (PDOException $e) {
    // Graceful degradation: Capture database error without crashing the static pages
    $db_error = $e->getMessage();
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
