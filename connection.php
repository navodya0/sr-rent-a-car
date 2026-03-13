<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentacar
";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode([
        "success" => false,
        "error" => "Connection failed"
    ]));
}

function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $encrypted_id = isset($_POST['encrypted_id']) ? sanitizeInput($_POST['encrypted_id']) : '';
    $decoded = base64_decode(urldecode($encrypted_id));
    $decrypted_id = intval($decoded);

    if (!$decrypted_id) {
        echo json_encode(["success" => false, "error" => "Invalid ID"]);
        exit;
    }

    $updateSql = "UPDATE reservations SET pdf_code = ? WHERE id = ?";
    $stmt = $conn->prepare($updateSql);

    if ($stmt === false) {
        echo json_encode(["success" => false, "error" => $conn->error]);
        exit;
    }

    $stmt->bind_param("si", $encrypted_id, $decrypted_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}


$encrypted_id = $_POST['encrypted_id'];
$pdf_code = $_POST['pdf_code']; // get the URL

if (!empty($encrypted_id) && !empty($pdf_code)) {
    $stmt = $conn->prepare("UPDATE reservations SET pdf_code = ? WHERE encrypted_id = ?");
    $stmt->bind_param("ss", $pdf_code, $encrypted_id);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Missing data']);
}

$conn->close();
?>


