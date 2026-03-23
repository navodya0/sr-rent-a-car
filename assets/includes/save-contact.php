<?php
require_once dirname(__DIR__, 2) . '/config.core.php';
require_once MODX_CORE_PATH . 'model/modx/modx.class.php';

$modx = new modX();
$modx->initialize('web');

require_once __DIR__ . '/db_connect.php';

header('Content-Type: application/json');

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $subject === '' || $message === '') {
    echo json_encode([
        'success' => false,
        'message' => 'All fields are required.'
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid email address.'
    ]);
    exit;
}

$stmt = $modx->prepare("
    INSERT INTO contact_form (name, email, subject, message, submitted_at)
    VALUES (:name, :email, :subject, :message, NOW())
");

if (!$stmt) {
    echo json_encode([
        'success' => false,
        'message' => 'Could not prepare query.'
    ]);
    exit;
}

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':subject', $subject);
$stmt->bindValue(':message', $message);

if ($stmt->execute()) {
    echo json_encode([
        'success' => true,
        'message' => 'Message saved successfully.'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Database error.'
    ]);
}