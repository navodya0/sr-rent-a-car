<?php
$servername = "localhost"; // Change as needed
$username = "slrcar_srimal87";        // Your database username
$password = "Srimal@456";            // Your database password
$dbname = "slrcar_sr"; // The database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . " (Error Code: " . $conn->connect_errno . ")");
}

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Helper function to handle file uploads
function handleFileUpload($name, $contactNumber, $field_name) {
    $fileName =  str_replace(' ', '_', $name).'_'.$contactNumber;
    if (isset($_FILES[$field_name]) && $_FILES[$field_name]['error'] == 0) {
        $file_name = basename($_FILES[$field_name]['name']);
        $upload_dir = "uploads/".$fileName.'/'.$field_name.'/'; // Define the directory to store uploaded files
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755, true); // Create directory if it doesn't exist
        }
       
        $file_path = $upload_dir . $file_name;

        // Validate file name and move file
        if (preg_match("/^[a-zA-Z0-9._-]+$/", $file_name)) {
            if (move_uploaded_file($_FILES[$field_name]['tmp_name'], $file_path)) {
                return $file_path; // Return the file path to store in the database
            }
        }
    }
    return ''; // Return an empty string if no file is uploaded or an error occurs
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $name = sanitizeInput($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $country_code = sanitizeInput($_POST['country_code']);
    $contact_number = sanitizeInput($_POST['contact_number']);
    $service_type = sanitizeInput($_POST['service_type']);
    $pickup_location = sanitizeInput($_POST['pickup_location'] ?? '');
    $pickup_datetime = sanitizeInput($_POST['pickup_datetime'] ?? '');
    $dropoff_location = sanitizeInput($_POST['dropoff_location'] ?? '');
    $dropoff_datetime = sanitizeInput($_POST['dropoff_datetime'] ?? '');
    $millage = sanitizeInput($_POST['millage'] ?? '');
    $chauffeur_needed = sanitizeInput($_POST['chauffeur_needed'] ?? '');
    $license_needed = sanitizeInput($_POST['license_needed'] ?? '');
    $requirements = sanitizeInput($_POST['requirements'] ?? '');
    $car_code = sanitizeInput($_POST['car_code'] ?? '');
    $carCode = sanitizeInput($_POST['car_code'] ?? '');
    $flight_number = sanitizeInput($_POST['flight_number'] ?? '');
    $passengers = sanitizeInput($_POST['passengers'] ?? '');
    

    // Handle file uploads for passport, IDP, and applicant photo
    $passport_copy = handleFileUpload($name, $contact_number, 'passport_copy');
    $idp_copy = handleFileUpload($name, $contact_number, 'idp_copy');
    $applicant_photo = handleFileUpload($name, $contact_number, 'applicant_photo');

    // Handle passenger details
    $passenger_adults = (int) ($_POST['passenger_adults'] ?? 0);
    $passenger_children = (int) ($_POST['passenger_children'] ?? 0);
    $passenger_infants = (int) ($_POST['passenger_infants'] ?? 0);

    // Handle return transfer
    $return_transfer = (int) ($_POST['return_transfer'] ?? 0);

    // Handle extra options (checkboxes)
    $extras = isset($_POST['extras']) ? implode(", ", array_map('sanitizeInput', $_POST['extras'])) : '';
    $extraFacilities = isset($_POST['extras_facilities']) ? $_POST['extras_facilities'] : '';
    $jsonExtras = json_encode($extraFacilities);
    $totalExtrasChargeToDuration = 0;

    // Convert strings to DateTime objects
    $pickup = new DateTime($pickup_datetime);
    $dropoff = new DateTime($dropoff_datetime);
    
    // Calculate the difference
    $interval = $pickup->diff($dropoff);
    $days = $interval->days; // Get the total number of days
    
    // Convert to DateTime objects without time (YYYY-MM-DD)
    $pickupWithoutTime = new DateTime(substr($pickup_datetime, 0, 10));
    $dropoffWithoutTime = new DateTime(substr($dropoff_datetime, 0, 10));
    $pickupDateFormatted = $pickupWithoutTime->format('Y-m-d');
    $dropoffDateFormatted = $dropoffWithoutTime->format('Y-m-d');

    // var_dump($name, $email, $contact_number, $service_type, $pickup_location, $pickup_datetime,
    //     $dropoff_location, $_POST['return_transfer'],
    //     $_POST['passenger_adults'], $_POST['passenger_children'], $_POST['passenger_infants'], 
    //     $_POST['extras_facilities'], $_POST['car_code'], $requirements, $car_code);exit();

    if (!isset($_POST['extras_facilities']) || empty($_POST['extras_facilities'])) { 
        $totalExtrasChargeToDuration = 0;
    } else {
        // Process the selected extras
        $selectedCount = count($extraFacilities);
        $totalExtrasCharge = $selectedCount*5;
        $totalExtrasChargeToDuration = $totalExtrasCharge*$days;
    }

    $selectSql = "
        SELECT SUM(rate) AS total_rate
        FROM car_rental
        WHERE car_code = ? 
        AND start_date <= ? 
        AND end_date >= ?
        AND duration <= ?
    ";

    // Prepare the SQL statement
    $selectStmt = $conn->prepare($selectSql);
    if ($selectStmt === false) {
        die("Error preparing the query: " . $conn->error);
    }

    // Bind the parameters to the SQL query
    $selectStmt->bind_param("ssss", $carCode, $pickupDateFormatted, $dropoffDateFormatted, $days);

    // Execute the query
    $selectStmt->execute();

    // Bind the result to a variable
    $selectStmt->bind_result($totalRate);

    // Fetch the result
    $selectStmt->fetch();

    if (isset($totalRate)) {
        // Calculate the total charge with the extras
        $totalCharge = $totalRate + $totalExtrasChargeToDuration;

        // Set cookies with the values
        $_SESSION['totalExtrasChargeToDuration'] = $totalExtrasChargeToDuration;
        $_SESSION['totalRate'] = $totalRate;
        $_SESSION['totalCharge'] = $totalCharge;

        setcookie("totalExtrasChargeToDuration", $totalExtrasChargeToDuration, time() + (30 * 24 * 60 * 60), "/");
        setcookie("totalRate", $totalRate, time() + (30 * 24 * 60 * 60), "/");
        setcookie("totalCharge", $totalCharge, time() + (30 * 24 * 60 * 60), "/");

        // Optionally, echo the values for testing purposes
        // echo "Total rate for the selected duration: " . $totalRate;
        // echo "Total charge with extras for the selected duration: " . $totalCharge;
    } else {
        echo "No rate available for the selected duration.";
    }

    $selectStmt->close();

    // Get cookie values (ensure they exist)
    $totalExtra = isset($_SESSION['totalExtrasChargeToDuration']) ? (float)$_SESSION['totalExtrasChargeToDuration'] : 0;
    $totalRateAmount = isset($_SESSION['totalRate']) ? (float)$_SESSION['totalRate'] : 0;
    $totalChargeAmount = isset($_SESSION['totalCharge']) ? (float)$_SESSION['totalCharge'] : 0;

    // Prepare the SQL statement for inserting the reservation
    $stmt = $conn->prepare(
        "INSERT INTO reservations (
    name, email,country_code, contact_number, service_type, pickup_location, pickup_datetime,
    dropoff_location, dropoff_datetime, millage, chauffeur_needed, license_needed,
    passport_copy, idp_copy, applicant_photo, requirements, car_code,
    extras, passenger_adults, passenger_children, passenger_infants, return_transfer, 
    extras_charge, total_rate, total_charge, flight_number, passengers
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)


"
    );

    // Correct the type definition to match the number of parameters
    $stmt->bind_param(
        "sssssssssssssssssssiiisddss", 
        $name, $email, $country_code, $contact_number, $service_type, $pickup_location, $pickup_datetime,
        $dropoff_location, $dropoff_datetime, $millage, $chauffeur_needed, $license_needed,
        $passport_copy, $idp_copy, $applicant_photo, $requirements, $car_code,
        $jsonExtras, $passenger_adults, $passenger_children, $passenger_infants, $return_transfer, 
        $totalExtra, $totalRateAmount, $totalChargeAmount, $flight_number, $passengers
    );
    
    

    // Execute and handle errors
    if ($stmt->execute()) {
        
        $last_id = $conn->insert_id;
        $encrypted_id = urlencode(base64_encode($last_id));
        // echo "Reservation successfully submitted!";
        //header("Location: bill.php?token=$encrypted_id", true, 200);

        $updateSql = "UPDATE reservations SET pdf_code = ? WHERE id = ?";
        $stmtUpdate = $conn->prepare($updateSql);
        $stmtUpdate->bind_param("si", $encrypted_id, $last_id);

        if ($stmtUpdate->execute()) {
            header('Content-Type: application/json');
            echo json_encode([
                "success"=>true,
                "message" => "Reservation successfully submitted!",
                "encrypted_id" => $encrypted_id
            ]);
        }
        $stmtUpdate->close();
    } else {
        //error_log("SQL Error: " . $stmt->error);
        //echo "There was an issue submitting your reservation. Please try again.";
        echo json_encode(["success"=>false,"message" => "Error submitting reservation.", "error" => $stmt->error]);

    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

