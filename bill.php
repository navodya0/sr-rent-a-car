<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5861K2TN4V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5861K2TN4V');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>


    <title>SR Rent A Car - Invoice</title>


    <style> 
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        text-align: center; /* Center text for the whole body */
    }

    .container {
        width: 80%;
        margin: auto;
        background-color: #ffffff;
        padding: 20px;
        border: 1px solid #ddd;
        /* border-radius: 5px; */
        border: 1px solid #000; /* Added border */
        border-radius: 10px; /* Optional: rounded corners */
    }



    .terms-list{
        font-size: .9em;
    }
    header {
        display: block;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        border-bottom: 2px solid #d32f2f;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    header img {
        width: 90px;
        height: auto;
    }

    header h1 {
        font-size: 1.1em;
        margin: 5px 0;
        color: #d32f2f;
    }

    header p {
        font-size: 7em;
        color: #555;
    }

    table {
        width: 83%; /* Full width of the container */
        margin: auto;
        background-color: #ffffff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        border-collapse: collapse; /* Ensures borders merge correctly */
        text-align: center; /* Center text in the table */
    }

    table th, table td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left; /* Center text in table cells */
        width: 150px; /* Adjust the width as needed */
}

table th:nth-child(1), table td:nth-child(1) {
    width: 250px; /* Adjust the width for the first column */
}

table th:nth-child(2), table td:nth-child(2) {
    width: 300px; /* Adjust the width for the second column */
}

table th:nth-child(3), table td:nth-child(3) {
    width: 100px; /* Adjust the width for the third column */
}

    table th {
        background-color: #d32f2f;
        color: white;
        font-weight: bold;
    }

    table tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    table td {
        font-size: .8em;
    }

    .total {
        margin-top: 20px;
        text-align: right;
        font-size: .9em;
        font-weight: bold;
        color: #d32f2f;
        width: 90%;
    }

    footer {
        text-align: center;
        margin-top: 30px;
        font-size: 0.9em;
        color: #777;
    }

    .button-container {
            text-align: center;
            margin-top: 30px;
            font-size: 25px;
        }



        .btn {
  background: linear-gradient(to right, red, grey); /* Red to grey gradient */
  color: white; /* Change the text color */
  border: black; /* Remove the border */
  padding: 10px 20px; /* Adjust the padding */
  border-radius: 7px; /* Rounded corners */
  text-decoration: none; /* Remove underline */
  transition: background 0.3s ease; /* Optional: Smooth transition effect */
  width: 250px;
  height: 50px;
}


.btn:hover {
  background: linear-gradient(to right, darkred, darkgrey); /* Darker gradient on hover */
}

        @media print {
    body {
        font-size: 12px; /* Adjust font size for print */
        margin: 0;
        padding: 0;
    }

    .container {
        width: 100%;
        padding: 10px;
        border: none;
    }

    table {
        width: 100%;
        font-size: 12px; /* Reduce table font size for PDF */
    }

    .total {
        font-size: 14px; /* Adjust for better fit */
    }

    header h1 {
        font-size: 18px; /* Smaller font for PDF */
    }

    header p {
        font-size: 10px;
    }

    footer {
        font-size: 10px;
    }
}


.terms {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #333;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 900px;
    margin: 20px auto;
    text-align: left; /* Aligns text to the left */
}

.invoice-header{
    font-size: .8em;
}

.terms h3 {
    font-size: .8em;
    color: #007BFF;
    margin-bottom: 15px;
    text-align: left; /* Ensures the heading is also aligned to the left */
}

.terms p {
    font-size: .6em;
    margin: 10px 0;
    padding-left: 20px;
    position: relative;
    text-align: left; /* Ensures paragraphs are aligned to the left */
}

.terms p::before {
    content: "•";
    position: absolute;
    left: 0;
    top: 0;
    font-size: .6em;
    color: #007BFF;
    margin-top: 5px;
}



    </style>

</head>
<body>
<?php


// Establish database connection
$conn = new mysqli('localhost', 'slrcar_srimal87', 'Srimal@456', 'slrcar_sr'); // Replace with your database credentials

// Get the ID from the URL (e.g., invoice.php?id=123)
$encrypted_id = isset($_GET['token']) ? $_GET['token'] : 0; 
$decrypted_id = base64_decode(urldecode($encrypted_id));

// Check if the ID is valid
if ($decrypted_id > 0) {
    // Create a SQL query to fetch the reservation based on the ID
    $sql = "SELECT * FROM reservations WHERE id = $decrypted_id";

    // Execute the query
    $result = $conn->query($sql);
}


// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the record ID from the query string (URL parameter)
$record_id = isset($_GET['id']) ? (int)$_GET['id'] : $decrypted_id;

// If record ID is valid, fetch data
if ($record_id > 0) {
    // Adjust SQL query to fetch the specific record based on record_id
    $sql = "SELECT * FROM reservations WHERE id = $record_id"; // Replace 'id' with the actual column name in your database
    $result = $conn->query($sql);

    $car_names = [
        'car_001' => 'Perudua Axia',
        'car_002' => 'Suzuki Alto (Japan)',
        'car_003' => 'Suzuki Alto (Indian)',
        'car_004' => 'Toyota Aqua',
        'car_005' => 'Suzuki Swift',
        'car_006' => 'Suzuki Wagon R',
        'car_007' => 'Suzuki Hustler',
        'car_008' => 'Perudua Bezza',
        'car_009' => 'Honda Insight',
        'car_010' => 'Kia Rio',
        'car_011' => 'Nissan Sunny',
        'car_012' => 'Toyota Corolla 121',
        'car_013' => 'Toyota Belta',
        'car_014' => 'Honda Grace',
        'car_015' => 'Toyota Prius',
        'car_016' => 'Toyota Allion',
        'car_017' => 'Toyota Axio',
        'car_018' => 'Mercedes Benz',
        'car_019' => 'BMW 520D',
        'car_020' => 'Jaguar RXF',
        'car_021' => 'Kia Sorento',
        'car_022' => 'Hyundai Tucson',
        'car_023' => 'Nissan X - Trail',
        'car_024' => 'Toyota Land Cruiser V8',
        'car_025' => 'Toyota Land Cruiser V150',
        'car_026' => 'Mitsubishi Monteero',
        'car_027' => 'Nissan caravan ',
        'car_028' => 'Nissan Vanette',
        'car_029' => 'Nissan Hiace KDH',
        'car_030' => 'Micro Tourer',
        'car_031' => 'Toyota Coaster',
        'car_032' => 'Scania',
        // Add more car codes and names as needed
    ];


    $car_deposits = [
        'car_001' => 700,
        'car_002' => 700,
        'car_003' => 700,
        'car_004' => 700,
        'car_005' => 700,
        'car_006' => 700,
        'car_007' => 700,
        'car_008' => 700,
        'car_009' => 700,
        'car_010' => 700,
        'car_011' => 700,
        'car_012' => 700,
        'car_013' => 700,
        'car_014' => 700,
        'car_015' => 800,
        'car_016' => 800,
        'car_017' => 800,
        'car_018' => 1200,
        'car_019' => 1200,
        'car_020' => 1200,
        'car_021' => 1000,
        'car_022' => 1000,
        'car_023' => 1000,
        'car_024' => 1200,
        'car_025' => 1200,
        'car_026' => 1200,
        'car_027' => 1000,
        'car_028' => 1000,
        'car_029' => 1000,
        'car_030' => 1500,
        'car_031' => 1500,
        'car_032' => 1500
    ];


    $chauffeur_charges = [
        'car_001' => 30,
        'car_002' => 30,
        'car_003' => 30,
        'car_004' => 30,
        'car_005' => 30,
        'car_006' => 30,
        'car_007' => 30,
        'car_008' => 35,
        'car_009' => 35,
        'car_010' => 35,
        'car_011' => 35,
        'car_012' => 35,
        'car_013' => 35,
        'car_014' => 50,
        'car_015' => 50,
        'car_016' => 50,
        'car_017' => 50,
        'car_018' => 50,
        'car_019' => 50,
        'car_020' => 60,
        'car_021' => 45,
        'car_022' => 45,
        'car_023' => 45,
        'car_024' => 40,
        'car_025' => 40,
        'car_026' => 35,
        'car_027' => 35,
        'car_028' => 35,
        'car_029' => 35,
        'car_030' => 45,
        'car_031' => 45,
        'car_032' => 60

    ];




    // Check if the query returned results
    if ($result->num_rows > 0) {
        // Fetch data from the record
        $row = $result->fetch_assoc();
        $name = $row['name'] ?? 'Not Applicable';
        $email = $row['email'] ?? 'Not Applicable';
        $contact_number = $row['contact_number'] ?? 'Not Applicable';
        $pickup_location = $row['pickup_location'] ?? 'Not Applicable';
        $dropoff_location = $row['dropoff_location'] ?? 'Not Applicable';
        $service_type = $row['service_type'] ?? 'Not Applicable';
        $car_code = $row['car_code'] ?? 'Not Applicable';
        $extras_charge = $row['extras_charge'] ?? 0; // Use 0 for numerical values
        $total_rate = $row['total_rate'] ?? 0; // Use 0 for numerical values
        $total_charge = $row['total_charge'] ?? 0; // Use 0 for numerical values
        $pickup_datetime = $row['pickup_datetime'] ?? 'Not Applicable';
        $dropoff_datetime = $row['dropoff_datetime'] ?? 'Not Applicable';
        $extras = $row['extras'] ?? 'Not Applicable';
        $flight_number = $row['flight_number'] ?? 'Not Applicable';
        $chauffeur_needed = $row['chauffeur_needed'] ?? 'Not Applicable';
        $millage = $row['millage'] ?? 'Not Applicable';
        $passengers = $row['passengers'] ?? 'Not Applicable';
        $country_code = $row['country_code'] ?? '+94';
        $license_needed = $row['license_needed'] ?? 'Not Applicable';
        
        

        // Get the car name based on the car code, or use the default value
        if (isset($car_names[$car_code])) {
            $car_name = $car_names[$car_code] ?? 'Not Applicable';
            $car_deposit = isset($car_deposits[$car_code]) ? $car_deposits[$car_code] : 0;
            $chauffeur_charges = isset($chauffeur_charges[$car_code]) ? $chauffeur_charges[$car_code] : 0;
        }

        if (isset($car_names[$car_code])) {
            $car_name = $car_names[$car_code] ?? 'Not Applicable';
        }


    } else {
        echo "No data found for the specified ID.";
    }
} else {
    echo "Invalid or missing record ID.";
}



// Close the connection
$conn->close();
?>


    <div class="container">
        <header>
            <img src="assets/images/logo.png" alt="SR Rent A Car Ltd. Logo">
            <h1>Invoice</h1>
        </header>

        <div class="invoice-header">
            <h2>SR Rent A Car Ltd, Sri Lanka </h2>
            <p>No: 371/5, Negombo Road, Seeduwa, Sri Lanka</p>
            <p>Phone: +94 77 778 0729 | Email: booking@srilankarentacar.com</p>
               
            <p><?php
                // File to store the last invoice number
                $counterFile = 'invoice_counter.txt';

                // Check if the file exists
                if (!file_exists($counterFile)) {
                    // If the file doesn't exist, create it and initialize with 35000
                    file_put_contents($counterFile, '35000');
                }

                // Read the last used invoice number
                $lastNumber = (int)file_get_contents($counterFile);

                // Increment the number
                $newInvoiceNumber = $lastNumber + 1;

                // Save the new number back to the file
                file_put_contents($counterFile, $newInvoiceNumber);

                // Generate the invoice number with the current month
                echo '<p>Invoice Number: SR/RENT ' . date('m') . '-' . $newInvoiceNumber . '</p>';
            ?></p>
            
            </div>
            <hr>
       


        <table>
            <thead>
                <tr>
                    <th>Descriptions</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>

            <tr>
    <td>Date</td>
    <td> <?php echo date('d - m - Y'); ?>
    </td>
</tr>                
                <tr>
                    <td>Customer Name</td>
                    <td><?php echo $name; ?></td>
                </tr>
                <tr>
                    <td>Customer E - Mail</td>
                    <td><?php echo $email; ?></td>
                </tr>
                <tr>
    <td>Customer Phone No</td>
    <td><?php echo $country_code . ' ' . $contact_number; ?></td>
</tr>
                <tr>
                    <td>Service Type</td>
                    <td><?php echo $service_type; ?></td>
                </tr>
                <tr>
                    <td>Car Name</td>
                    <td><?php echo $car_name . ' * or Similar'; ?></td>
                </tr>

                <tr>
                    <td>Flight No</td>
                    <td><?php echo $flight_number; ?></td>
                </tr>

                
                <!-- <tr>
    <td>Millage Preferences</td>
    <td><?php echo $millage; ?> Per Day</td>
</tr> -->

<tr>
    <td>Millage Preferences</td>
    <td>We Offer Unlimited Millage to Same Price</td>
</tr>

<tr>
    <td>Number of Passengers</td>
    <td><?php echo $passengers; ?> Persons</td>
</tr>
              
                <tr>
                    <td>Pickup Location</td>
                    <td><?php echo $pickup_location; ?></td>
                </tr>
                <tr>
                    <td>Dropoff Location</td>
                    <td><?php echo $dropoff_location; ?></td>
                </tr>
                
                <tr>
    <td>Pickup Date & Time</td>
    <td><?php echo date('d-m-Y H:i', strtotime($pickup_datetime)); ?></td>
</tr>

<tr>
    <td>Dropoff Date & Time</td>
    <td><?php echo date('d-m-Y H:i', strtotime($dropoff_datetime)); ?></td>
</tr>
<tr>
    <td>Duration</td>
    <td>
        <?php
            $pickup = new DateTime($pickup_datetime);
            $dropoff = new DateTime($dropoff_datetime);
            $interval = $pickup->diff($dropoff);
            echo $interval->format('%d days');
            // echo $interval->format('%d days, %h hours, %i minutes');
        ?>
    </td>
</tr>

<tr>
    <td>Chauffeur Required</td>
    <td>
        <?php
            echo $chauffeur_needed;

            $chauffeur_cost = 0;
            $license_charge = 0;

            // Chauffeur logic
            if (strtolower($chauffeur_needed) === 'yes') {
                $pickup = new DateTime($pickup_datetime);
                $dropoff = new DateTime($dropoff_datetime);
                $interval = $pickup->diff($dropoff);
                $days = max((int)$interval->format('%a'), 1);

                $chauffeur_cost = $days * $chauffeur_charges;

                // License charge is disabled if chauffeur is required
                $license_charge = 0;
            } else {
                // No chauffeur, apply license charge
                $license_charge = 50;
            }
        ?>
    </td>
</tr>

<?php if ($chauffeur_cost > 0): ?>
<tr>
    <td>Chauffeur Charge</td>
    <td>€ <?php echo number_format($chauffeur_cost, 2); ?></td>
</tr>
<?php endif; ?>

<?php if ($license_charge > 0): ?>
<tr>
    <td>License Charge</td>
    <td>€ <?php echo number_format($license_charge, 2); ?></td>
</tr>
<?php endif; ?>


             
               
                
                <tr>
    <td>Rent Charges</td>
    <td><?php echo '€ ' . number_format($total_rate, 2); ?></td>
</tr>





<tr>
    <td>Extras Charge</td>
    <td>
        <?php 
            echo '€ ' . number_format($extras_charge, 2); 
            if (!empty($extras)) {
                echo "<br><small><em>($extras)</em></small>";
            }
        ?>
    </td>
</tr>

<?php if ($chauffeur_cost > 0): ?>

<?php endif; ?>


<tr>
    <td>Total Charge</td>
    <td><?php echo '€ ' . number_format($total_charge + $chauffeur_cost  + $license_charge, 2); ?></td>
</tr>
<tr>
    <td>Deposit Amount (Will be refunded on vehicle return.)</td>
    <td>€ <?php echo number_format($car_deposit, 2) ?> </td>
</tr>

</tbody>
</table>

<div class="total">
    <p>Total Charge: € <?php echo number_format($total_charge + $chauffeur_cost + $license_charge, 2); ?></p>
    <p style="color:seagreen">* Without Deposit Amount  *</p>
</div>

<div class="terms">
    <h3>Terms and Conditions:</h3>
    <ul class="terms-list">
        <!-- <li>All tourists must hold a temporary Sri Lankan driver's permit to self-drive, costing 50 Euros. Required documents must be sent before arrival.</li>
        <li>Chauffeur services incur an additional fee depending on the booking period and vehicle type.</li>
        <li>Unlimited mileage incurs an additional charge of 5 Euros per day.</li> -->
      
        <li style="color: green; font-size:medium">Please be informed that this will be regarded as a formal booking confirmation.</li>

    </ul>
</div>

</div>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> SR Rent A Car Ltd. All Rights Reserved.</p>
        </footer>
    </div>

    <div class="button-container">
        <!-- Print Button -->
        <button class="btn" onclick="window.print()">Print Invoice</button>

        <!-- Email Button -->
        <!-- <button class="btn" onclick="emailInvoice()">E - Mail Invoice</button> -->

        <button class="btn" onclick="generatePDF()">Download PDF</button>
    </div>
    <script>
    document.getElementById('makeReservationBtn').addEventListener('click', function(event) { 
        event.preventDefault(); // Prevent the form from submitting immediately
        
        // Get the selected car code
        var carCode = document.getElementById('selectedCarCode').value;

        // Check if a car code is selected
        if (carCode) {
            // Redirect to bill.php with the selected car code as a URL parameter
            window.location.href = 'bill.php?car_code=' + encodeURIComponent(carCode);
        } else {
            alert('Please select a car before making a reservation.');
        }
    });

    function emailInvoice() {
            // Invoice URL (assuming you have a dynamic URL or a static URL for each invoice)
            const invoiceUrl = 'https://yourwebsite.com/invoice?id=123'; // Replace with actual invoice URL

            // Send the invoice URL to the server
            sendEmail(invoiceUrl);
        }

        function sendEmail(invoiceUrl) {
            const formData = new FormData();
            formData.append('invoiceUrl', invoiceUrl);
            formData.append('email', '<?php echo $email; ?>'); // Customer's email

            // Send the email via AJAX
            fetch('send_invoice.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(result => {
                alert('Invoice sent successfully');
            })
            .catch(error => {
                alert('Error sending invoice');
            });
        }

        async function generatePDF() {
        const { jsPDF } = window.jspdf;

        // Select the container element
        const container = document.querySelector('.container');

        // Use html2canvas to capture the container as an image
        html2canvas(container, {
    scale: window.devicePixelRatio, // Use the device's pixel ratio for better quality
    useCORS: true, 
    scrollY: 0 // Prevents capturing scroll position
}).then(canvas => {
    const pdf = new jsPDF('p', 'mm', 'a5');
    const imgData = canvas.toDataURL('image/png');
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = (canvas.height * pdfWidth) / canvas.width;

    if (pdfHeight > pdf.internal.pageSize.getHeight()) {
        let heightLeft = pdfHeight;
        let position = 0;

        while (heightLeft > 0) {
            pdf.addImage(imgData, 'PNG', 0, position, pdfWidth, pdfHeight);
            heightLeft -= pdf.internal.pageSize.getHeight();
            if (heightLeft > 0) {
                pdf.addPage();
                position = -heightLeft;
            }
        }
    } else {
        pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
    }

    const invoiceNumber = '<?php echo "SR_RENT_" . date("m") . "-" . $newInvoiceNumber; ?>';
    pdf.save(`${invoiceNumber}.pdf`);
        }).catch(error => {
            console.error("PDF generation failed: ", error);
            alert("Failed to generate PDF. Please try again.");
        });
    }





</script>

</body>
</html>
