<?php
/**
 * Primus Catering & Camp Management
 * Rebuilt Administrative Inquiries Portal - Premium Minimalist Layout
 */

// Load global configuration and database helper
require_once __DIR__ . '/includes/config.php';

$errorMsg = '';
$successMsg = '';

// Handle Admin Authentication Login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['auth_action']) && $_POST['auth_action'] === 'login') {
    $enteredPass = $_POST['admin_password'] ?? '';
    if ($enteredPass === ADMIN_PASSWORD) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin-inquiries.php");
        exit;
    } else {
        $errorMsg = 'Incorrect administrative access password. Please try again.';
    }
}

// Handle Admin Sign Out Action
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    $_SESSION['admin_logged_in'] = false;
    unset($_SESSION['admin_logged_in']);
    header("Location: admin-inquiries.php");
    exit;
}

// Check authorization state
$isAdminLoggedIn = $_SESSION['admin_logged_in'] ?? false;

// Handle Record Deletion Action Safely (Only if logged in!)
if ($isAdminLoggedIn && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'delete') {
    $deleteId = intval($_POST['id'] ?? 0);
    if ($deleteId > 0) {
        if ($pdo === null) {
            $errorMsg = 'Cannot delete record: Database connection is offline.';
        } else {
            try {
                $stmt = $pdo->prepare("DELETE FROM inquiries WHERE id = ?");
                $stmt->execute([$deleteId]);
                $successMsg = "Inquiry record #{$deleteId} has been successfully cleared.";
            } catch (PDOException $e) {
                $errorMsg = "Database error during deletion: " . $e->getMessage();
            }
        }
    }
}

// Fetch all inquiry submissions from the database (Only if logged in!)
$inquiries = [];
$totalCount = 0;
$cateringCount = 0;
$campsCount = 0;
$bothCount = 0;

if ($isAdminLoggedIn) {
    if ($pdo !== null) {
        try {
            $stmt = $pdo->query("SELECT * FROM inquiries ORDER BY created_at DESC");
            $inquiries = $stmt->fetchAll();
            
            // Compute stats for metrics widgets
            $totalCount = count($inquiries);
            foreach ($inquiries as $inq) {
                $srv = $inq['service'] ?? '';
                if ($srv === 'catering') {
                    $cateringCount++;
                } elseif ($srv === 'camps') {
                    $campsCount++;
                } else {
                    $bothCount++;
                }
            }
        } catch (PDOException $e) {
            $errorMsg = "Failed to retrieve inquiry database log: " . $e->getMessage();
        }
    } else {
        $errorMsg = "Database connection is currently unconfigured or offline. Please check includes/config.php settings.";
    }
}

$pageTitle = $isAdminLoggedIn ? 'Administration | Primus Inquiries Portal' : 'Secure Authorization | Primus';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Minimalist Administrative Canvas -->
<main class="section-padding" style="padding-top: 60px; min-height: calc(100vh - 400px);">
    <div class="container">
        
        <!-- Spaced Top Editorial Header -->
        <div class="reveal-fade-up" style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 48px; gap: 24px; flex-wrap: wrap;">
            <div style="max-width: 800px; text-align: left;">
                <span class="hero-subtitle-caps centered-caps" style="justify-content: flex-start; margin-bottom: 16px;">SECURE PORTAL // MANAGEMENT</span>
                <h1 class="hero-heading-serif" style="font-size: 3.2rem; color: var(--color-sapphire); line-height: 1.15; margin-bottom: 16px;">Inquiry Submissions</h1>
                <p style="font-size: 1.05rem; color: var(--color-text-body); line-height: 1.7; margin: 0;">
                    Review, filter, and coordinate michelin-class culinary requests and heavy canvas wilderness camp deployments submitted by corporate stakeholders.
                </p>
            </div>
            <?php if ($isAdminLoggedIn): ?>
                <a href="admin-inquiries.php?action=logout" class="btn-pill btn-pill-outline" style="padding: 12px 24px; font-size: 0.78rem; font-weight: 700; border-color: rgba(220, 38, 38, 0.25); color: var(--color-crimson); display: inline-flex; align-items: center; gap: 8px; border-radius: 99px; text-decoration: none; transition: all 0.3s ease;">
                    <span class="material-symbols-outlined" style="font-size: 18px; vertical-align: middle;">logout</span> Sign Out
                </a>
            <?php endif; ?>
        </div>

        <?php if (!$isAdminLoggedIn): ?>
            <!-- Ultra-Premium Minimalist Login Canvas -->
            <div class="reveal-fade-up" style="max-width: 480px; margin: 40px auto 100px;">
                
                <!-- Incorrect Password Error Dialog -->
                <?php if (!empty($errorMsg)): ?>
                    <div class="status-dialog-box status-dialog-error" style="margin-bottom: 24px; padding: 16px 20px; border-radius: 12px; font-weight: 600; text-align: center; background-color: rgba(239, 68, 68, 0.08); border: 1px solid rgba(239, 68, 68, 0.2); color: #ef4444;">
                        ✗ <?php echo htmlspecialchars($errorMsg); ?>
                    </div>
                <?php endif; ?>

                <div class="minimalist-form-card" style="padding: 48px 36px; border-radius: 28px; text-align: center;">
                    <div style="margin-bottom: 32px;">
                        <span class="hero-subtitle-caps centered-caps" style="margin-bottom: 12px;">AUTHORIZATION REQUIRED</span>
                        <h2 class="hero-heading-serif" style="font-size: 2.2rem; color: var(--color-sapphire); margin-bottom: 12px;">Secure Entry</h2>
                        <p style="font-size: 0.9rem; color: var(--color-text-body); line-height: 1.6; max-width: 320px; margin: 0 auto;">
                            Please enter the administrative credentials to access the inquiries database log.
                        </p>
                    </div>

                    <form method="POST" action="admin-inquiries.php" style="text-align: left;">
                        <input type="hidden" name="auth_action" value="login">
                        
                        <div class="form-field-group" style="margin-bottom: 24px;">
                            <label for="admin_password" style="font-size: 0.72rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-sapphire); margin-bottom: 8px; display: block;">Administrative Password *</label>
                            <input type="password" name="admin_password" id="admin_password" required placeholder="••••••••••••" class="form-field-input" style="letter-spacing: 0.15em; font-family: monospace;">
                        </div>

                        <button type="submit" class="form-submit-pill-btn" style="padding: 16px; border-radius: 99px;">
                            Authorize Access
                        </button>
                    </form>
                </div>
            </div>
        <?php else: ?>

        <!-- Database Status Warning Alerts -->
        <?php if ($pdo === null): ?>
            <div class="status-dialog-box status-dialog-error reveal-fade-up" style="margin-bottom: 40px; padding: 24px; border-radius: 16px; font-weight: 500; font-size: 0.95rem; text-align: left; background-color: rgba(239, 68, 68, 0.06); border: 1px solid rgba(239, 68, 68, 0.15); color: #ef4444;">
                <span class="material-symbols-outlined" style="vertical-align: middle; margin-right: 8px; font-size: 20px;">database_off</span>
                <strong>Database Connection Failure:</strong> 
                <?php if (DB_ENGINE === 'mysql'): ?>
                    Unable to connect to your hosted MySQL server.
                    <p style="margin-top: 8px; font-family: monospace; font-size: 0.82rem; color: #dc2626; background: rgba(220, 38, 38, 0.05); padding: 12px; border-radius: 8px; border: 1px dashed rgba(220, 38, 38, 0.15); word-break: break-all;">
                        ERROR LOG: <?php echo htmlspecialchars($db_error ?? 'No error reported.'); ?>
                    </p>
                    <p style="margin-top: 12px; font-size: 0.88rem; color: var(--color-text-body); line-height: 1.6;">
                        💡 <strong>Hosting Checklist:</strong><br>
                        1. Make sure you created the database <code><?php echo htmlspecialchars(DB_NAME); ?></code> in your InfinityFree control panel.<br>
                        2. Verify your database host <code><?php echo htmlspecialchars(DB_HOST); ?></code>, user <code><?php echo htmlspecialchars(DB_USER); ?></code>, and password are exactly correct.<br>
                        3. Make sure these files are uploaded inside the server's public <code>htdocs/</code> folder.
                    </p>
                <?php else: ?>
                    Local SQLite database could not initialize.
                    <p style="margin-top: 8px; font-size: 0.88rem; color: var(--color-text-body);">
                        To toggle to local SQLite database mode (perfect for instant zero-config testing), set <code>define('DB_ENGINE', 'sqlite');</code> inside your <a href="file:///c:/xampp/htdocs/primus/includes/config.php" style="color: var(--color-sapphire); font-weight: 700; text-decoration: underline;">includes/config.php</a> file!
                    </p>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($errorMsg) && $pdo !== null): ?>
            <div class="status-dialog-box status-dialog-error reveal-fade-up" style="margin-bottom: 32px; padding: 16px 20px; border-radius: 12px; font-weight: 600; text-align: center; background-color: rgba(239, 68, 68, 0.08); border: 1px solid rgba(239, 68, 68, 0.2); color: #ef4444;">
                ✗ <?php echo htmlspecialchars($errorMsg); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($successMsg)): ?>
            <div class="status-dialog-box status-dialog-success reveal-fade-up" style="margin-bottom: 32px; padding: 16px 20px; border-radius: 12px; font-weight: 600; text-align: center; background-color: rgba(16, 185, 129, 0.08); border: 1px solid rgba(16, 185, 129, 0.2); color: #10b981;">
                ✓ <?php echo htmlspecialchars($successMsg); ?>
            </div>
        <?php endif; ?>

        <!-- Stats Overview Widgets Grid -->
        <?php if ($pdo !== null): ?>
            <div class="admin-stats-grid reveal-fade-up">
                <!-- Card 1: Total -->
                <div class="stat-card-minimal">
                    <div class="stat-card-top-row">
                        <span class="stat-number-serif"><?php echo $totalCount; ?></span>
                        <div class="stat-icon-circle icon-total">
                            <span class="material-symbols-outlined">analytics</span>
                        </div>
                    </div>
                    <div class="stat-card-meta">
                        <span class="stat-label-modern">Total Inquiries</span>
                        <span class="stat-subtext">Active corporate records</span>
                    </div>
                </div>

                <!-- Card 2: Catering -->
                <div class="stat-card-minimal card-catering">
                    <div class="stat-card-top-row">
                        <span class="stat-number-serif"><?php echo $cateringCount; ?></span>
                        <div class="stat-icon-circle icon-catering">
                            <span class="material-symbols-outlined">restaurant</span>
                        </div>
                    </div>
                    <div class="stat-card-meta">
                        <span class="stat-label-modern">Culinary Focus</span>
                        <span class="stat-subtext">Michelin menu bookings</span>
                    </div>
                </div>

                <!-- Card 3: Camps -->
                <div class="stat-card-minimal card-camps">
                    <div class="stat-card-top-row">
                        <span class="stat-number-serif"><?php echo $campsCount; ?></span>
                        <div class="stat-icon-circle icon-camps">
                            <span class="material-symbols-outlined">cabin</span>
                        </div>
                    </div>
                    <div class="stat-card-meta">
                        <span class="stat-label-modern">Camp Retreats</span>
                        <span class="stat-subtext">Glamping site deployments</span>
                    </div>
                </div>

                <!-- Card 4: Both / Dual -->
                <div class="stat-card-minimal card-both">
                    <div class="stat-card-top-row">
                        <span class="stat-number-serif"><?php echo $bothCount; ?></span>
                        <div class="stat-icon-circle icon-both">
                            <span class="material-symbols-outlined">award_star</span>
                        </div>
                    </div>
                    <div class="stat-card-meta">
                        <span class="stat-label-modern">Dual Division</span>
                        <span class="stat-subtext">Integrated operations contracts</span>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Inquiry Record Submissions Area -->
        <div class="reveal-fade-up" style="margin-top: 56px;">
            <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid var(--color-border); padding-bottom: 16px;">
                <h2 style="font-family: var(--font-serif); font-size: 1.8rem; color: var(--color-sapphire);">Record Log</h2>
                <span class="inquiry-date-badge" style="font-weight: 700;"><?php echo count($inquiries); ?> ACTIVE REQUESTS</span>
            </div>

            <?php if (!empty($inquiries)): ?>
                <div class="admin-records-list">
                    <?php foreach ($inquiries as $inquiry): ?>
                        <div class="inquiry-record-card">
                            <!-- Card Header Info -->
                            <div class="inquiry-card-header">
                                <div class="client-info-block">
                                    <span class="client-company-caps"><?php echo htmlspecialchars($inquiry['company'] ?: 'INDIVIDUAL STEWARDSHIP'); ?></span>
                                    <h3 class="client-name-serif"><?php echo htmlspecialchars($inquiry['name']); ?></h3>
                                </div>
                                <div style="display: flex; align-items: center; gap: 16px;">
                                    <span class="inquiry-date-badge">
                                        <?php echo date('F d, Y - H:i', strtotime($inquiry['created_at'])); ?>
                                    </span>
                                    <!-- Delete Record Guard Form -->
                                    <form method="POST" action="admin-inquiries.php" onsubmit="return confirm('Are you absolutely certain you want to clear this inquiry record from the administrative archive?');" style="display: inline-block; margin: 0;">
                                        <input type="hidden" name="action" value="delete">
                                        <input type="hidden" name="id" value="<?php echo $inquiry['id']; ?>">
                                        <button type="submit" class="btn-delete-card" title="Delete Inquiry Record" aria-label="Delete Record">
                                            <span class="material-symbols-outlined" style="font-size: 18px;">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Card Contact Details Grid -->
                            <div class="inquiry-details-grid">
                                <!-- Contact Email -->
                                <div class="detail-item-box">
                                    <span class="detail-item-label">Correspondence Email</span>
                                    <span class="detail-item-value">
                                        <a href="mailto:<?php echo htmlspecialchars($inquiry['email']); ?>">
                                            <?php echo htmlspecialchars($inquiry['email']); ?>
                                        </a>
                                    </span>
                                </div>
                                <!-- Contact Phone -->
                                <div class="detail-item-box">
                                    <span class="detail-item-label">Telephone hotline</span>
                                    <span class="detail-item-value">
                                        <?php if (!empty($inquiry['phone'])): ?>
                                            <a href="tel:<?php echo htmlspecialchars($inquiry['phone']); ?>">
                                                <?php echo htmlspecialchars($inquiry['phone']); ?>
                                            </a>
                                        <?php else: ?>
                                            <span style="color: #94a3b8; font-style: italic;">Not provided</span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                                <!-- Requested Division -->
                                <div class="detail-item-box">
                                    <span class="detail-item-label">Service Focus</span>
                                    <span class="detail-item-value">
                                        <?php 
                                        $srv = $inquiry['service'] ?? '';
                                        if ($srv === 'catering') {
                                            echo '<span class="division-badge-pill division-catering">Culinary Catering</span>';
                                        } elseif ($srv === 'camps') {
                                            echo '<span class="division-badge-pill division-camps">Camp Operations</span>';
                                        } else {
                                            echo '<span class="division-badge-pill division-both">Dual Division</span>';
                                        }
                                        ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Specification message block -->
                            <?php if (!empty($inquiry['message'])): ?>
                                <div class="detail-item-label" style="margin-top: 16px;">Specifications &amp; Logistics Needs</div>
                                <div class="inquiry-message-container">
                                    <div class="inquiry-message-text"><?php echo htmlspecialchars($inquiry['message']); ?></div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <!-- Empty State Block -->
                <div class="reveal-fade-up" style="text-align: center; padding: 80px 24px; background-color: #ffffff; border-radius: 24px; border: 1px dashed rgba(10, 28, 51, 0.12); margin-top: 32px; box-shadow: 0 10px 30px rgba(10, 28, 51, 0.02);">
                    <span class="material-symbols-outlined" style="font-size: 64px; color: var(--color-pastel-blue); margin-bottom: 20px;">inbox</span>
                    <h3 style="font-family: var(--font-serif); font-size: 1.6rem; color: var(--color-sapphire); margin-bottom: 8px;">Inquiry log is currently empty</h3>
                    <p style="font-size: 0.95rem; color: var(--color-text-body); max-width: 480px; margin: 0 auto;">
                        Once prospective corporate clients submit their specifications via the front-facing landing page, their records will display here instantly!
                    </p>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
