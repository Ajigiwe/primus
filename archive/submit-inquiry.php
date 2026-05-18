<?php
/**
 * Primus Catering & Event Management
 * Service Inquiry POST Submission Handler
 */

// Load global configuration and active DB connection
require_once __DIR__ . '/includes/config.php';

// Verify POST request method
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php');
    exit();
}

// Retrieve form values
$name = isset($_POST['name']) ? sanitizeInput($_POST['name']) : '';
$company = isset($_POST['company']) ? sanitizeInput($_POST['company']) : '';
$phone = isset($_POST['phone']) ? sanitizeInput($_POST['phone']) : '';
$email = isset($_POST['email']) ? sanitizeInput($_POST['email']) : '';
$service = isset($_POST['service']) ? sanitizeInput($_POST['service']) : '';
$message = isset($_POST['message']) ? sanitizeInput($_POST['message']) : '';

// Basic validations
if (empty($name) || empty($email) || empty($service)) {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Please complete all required fields (*).';
    header('Location: contact.php');
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Please enter a valid email address.';
    header('Location: contact.php');
    exit();
}

try {
    // Assert active database connection exists
    if ($pdo === null) {
        throw new PDOException("Database service is currently unconfigured or offline.");
    }

    // Prepare secure insertion query
    $stmt = $pdo->prepare("INSERT INTO inquiries (name, company, email, phone, service, message) 
                           VALUES (:name, :company, :email, :phone, :service, :message)");
    
    // Execute query securely
    $stmt->execute([
        ':name' => $name,
        ':company' => $company,
        ':email' => $email,
        ':phone' => $phone,
        ':service' => $service,
        ':message' => $message
    ]);

    // Success response redirect
    $_SESSION['status'] = 'success';
    $_SESSION['message'] = 'Thank you! Your event inquiry has been successfully received. Our event coordinators will contact you shortly.';
    header('Location: contact.php');
    exit();

} catch (PDOException $e) {
    // Database failure redirect
    $_SESSION['status'] = 'error';
    $_SESSION['message'] = 'Apologies, our submission system encountered an error. Please try again or contact us directly at primusdmn@gmail.com.';
    header('Location: contact.php');
    exit();
}
