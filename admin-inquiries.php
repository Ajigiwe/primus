<?php
/**
 * Primus Catering & Event Management
 * Admin Inquiries Dashboard - Harbor Street Redesign
 */

$pageTitle = 'Admin Dashboard | Primus Catering & Event Management';
require_once __DIR__ . '/includes/header.php';

// Fetch all inquiry submissions from SQLite database
try {
    $stmt = $pdo->query("SELECT * FROM inquiries ORDER BY created_at DESC");
    $inquiries = $stmt->fetchAll();
} catch (PDOException $e) {
    $inquiries = [];
    $errorMsg = "Failed to fetch inquiry submissions: " . $e->getMessage();
}
?>

<!-- Centered atmospheric luxury Hero section -->
<section class="hero-editorial">
    <div class="hero-centered-content reveal-fade-up">
        <span class="uppercase-label" style="color: var(--color-blue); letter-spacing: 0.3em; margin-bottom: 24px;">Administration</span>
        <h1 class="hero-title" style="font-size: 3.8rem; margin-bottom: 24px;">Inquiry Submissions</h1>
        <p class="hero-subtitle" style="margin-bottom: 40px;">Review active celebration catering inquiries, high-end corporate banquet specifications, and luxury camp event retreats requested by prospective clients.</p>
        <div class="hero-actions">
            <a href="#admin-grid" class="btn btn-primary">
                <span class="material-symbols-outlined" style="font-size: 18px;">database</span>
                View Database records
            </a>
        </div>
    </div>
    <!-- Animated scroll mouse down indicator -->
    <div class="scroll-mouse"></div>
</section>

<!-- Section Padding -->
<section class="section-padding container" id="admin-grid">
    <div class="editorial-title-block reveal-fade-up">
        <span>Inquiries Grid</span>
        <h2>Database Record Log</h2>
        <div class="editorial-divider" style="background-color: var(--color-red); height: 2px;"></div>
    </div>

    <!-- DB Retrieval Status -->
    <?php if (isset($errorMsg)): ?>
        <div class="form-status form-status-error reveal-fade-up">
            <?php echo htmlspecialchars($errorMsg); ?>
        </div>
    <?php endif; ?>

    <!-- Inquiries Table -->
    <div class="admin-table-wrapper reveal-fade-up animation-delay-1">
        <?php if (!empty($inquiries)): ?>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th style="width: 70px;">ID</th>
                        <th style="width: 140px;">Received</th>
                        <th style="width: 220px;">Client Detail</th>
                        <th style="width: 240px;">Contact Info</th>
                        <th style="width: 200px;">Service Requested</th>
                        <th>Project Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($inquiries as $inquiry): ?>
                        <tr>
                            <td style="font-weight: 700; color: var(--color-text-title);">
                                #<?php echo htmlspecialchars($inquiry['id']); ?>
                            </td>
                            <td style="font-size: 0.85rem; color: var(--color-text-body); opacity: 0.8;">
                                <?php echo date('Y-m-d H:i', strtotime($inquiry['created_at'])); ?>
                            </td>
                            <td>
                                <strong style="color: var(--color-text-title); display: block; font-family: var(--font-serif); font-size: 1.05rem;">
                                    <?php echo htmlspecialchars($inquiry['name']); ?>
                                </strong>
                                <?php if (!empty($inquiry['company'])): ?>
                                    <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--color-red); font-weight: 700; letter-spacing: 0.05em;">
                                        <?php echo htmlspecialchars($inquiry['company']); ?>
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <span style="display: block; font-size: 0.9rem; margin-bottom: 2px;">
                                    <strong>Email:</strong> <?php echo htmlspecialchars($inquiry['email']); ?>
                                </span>
                                <?php if (!empty($inquiry['phone'])): ?>
                                    <span style="display: block; font-size: 0.9rem;">
                                        <strong>Phone:</strong> <?php echo htmlspecialchars($inquiry['phone']); ?>
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td class="service-badge" style="font-size: 0.9rem; letter-spacing: 0.02em;">
                                <?php echo htmlspecialchars($inquiry['service']); ?>
                            </td>
                            <td style="font-size: 0.9rem; line-height: 1.6; color: var(--color-text-body); opacity: 0.9;">
                                <?php echo nl2br(htmlspecialchars($inquiry['message'])); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="empty-state">
                <span class="material-symbols-outlined empty-icon" style="color: var(--color-blue); opacity: 0.7;">inbox</span>
                <h3 style="font-size: 1.5rem; margin-bottom: 8px; font-family: var(--font-serif); color: var(--color-text-title);">No inquiries found</h3>
                <p class="text-muted">Once clients submit inquiries via the contact page, they will appear in this administrative database grid.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
