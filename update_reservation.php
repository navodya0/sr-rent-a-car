<?php
// Database credentials
$servername = "localhost";
$username = "slrcar_srimal87";
$password = "Srimal@689";
$dbname = "slrcar_sr";

header('Content-Type: application/json');

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode([
        "success" => false,
        "error" => "Database connection failed"
    ]);
    exit;
}

// Set charset
$conn->set_charset("utf8mb4");

// Sanitize user input
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Process only POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $encrypted_id = isset($_POST['encrypted_id']) ? sanitizeInput($_POST['encrypted_id']) : '';
    $pdf_code = isset($_POST['pdf_code']) ? sanitizeInput($_POST['pdf_code']) : '';
    $id = isset($_POST['id']) ? sanitizeInput($_POST['id']) : '';

    // Decode and sanitize ID
    $decoded = base64_decode(urldecode($encrypted_id));
    $decrypted_id = intval($decoded);

    // Validate inputs
    if (!$decrypted_id || empty($pdf_code)) {
        http_response_code(400);
        echo json_encode(["success" => false, "error" => "Invalid ID or PDF code."]);
        exit;
    }

    // Prepare SQL statement
    $updateSql = "UPDATE reservations SET pdf_code = ? WHERE id = ?";
    $stmt = $conn->prepare($updateSql);

    if (!$stmt) {
        http_response_code(500);
        echo json_encode(["success" => false, "error" => "Prepare failed: " . $conn->error]);
        exit;
    }

    // Bind parameters
    $stmt->bind_param("si", $pdf_code, $decrypted_id);

    // Execute statement
    if ($stmt->execute()) {
        http_response_code(200);
        echo json_encode(["success" => true, "message" => "PDF code updated successfully."]);
    } else {
        http_response_code(500);
        echo json_encode(["success" => false, "error" => "Execution failed: " . $stmt->error]);
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(["success" => false, "error" => "Only POST requests are allowed."]);
}
?>
