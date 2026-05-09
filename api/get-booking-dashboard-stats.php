<?php

header("Content-Type: application/json; charset=UTF-8");

require_once __DIR__ . "/../assets/includes/db_connect.php";

ini_set("display_errors", 0);
error_reporting(E_ALL);

/*
|--------------------------------------------------------------------------
| RESPONSE FUNCTION
|--------------------------------------------------------------------------
*/
function respond($success, $message, $data = null)
{
    echo json_encode([
        "success" => $success,
        "message" => $message,
        "data" => $data
    ]);

    exit;
}

try {

    /*
    |--------------------------------------------------------------------------
    | FILTERS
    |--------------------------------------------------------------------------
    |
    | Supported:
    |
    | ?filter=today
    | ?filter=this_week
    | ?filter=this_month
    | ?filter=this_year
    |
    | OR
    |
    | ?from_date=2026-05-01&to_date=2026-05-31
    |
    */

    $filter = trim($_GET['filter'] ?? 'this_month');

    $fromDate = trim($_GET['from_date'] ?? '');

    $toDate = trim($_GET['to_date'] ?? '');

    /*
    |--------------------------------------------------------------------------
    | CONTACT FORM FILTERS
    |--------------------------------------------------------------------------
    |
    | contact_form uses submitted_at
    |
    */

    $contactWhere = "";

    $contactParams = [];

    /*
    |--------------------------------------------------------------------------
    | BOOKING STATS FILTERS
    |--------------------------------------------------------------------------
    |
    | booking_dashboard_stats uses created_at
    |
    */

    $statsWhere = "";

    $statsParams = [];

    /*
    |--------------------------------------------------------------------------
    | CUSTOM DATE RANGE
    |--------------------------------------------------------------------------
    */
    if ($fromDate !== '' && $toDate !== '') {

        $contactWhere = "
            WHERE DATE(submitted_at)
            BETWEEN :from_date AND :to_date
        ";

        $statsWhere = "
            WHERE DATE(created_at)
            BETWEEN :from_date AND :to_date
        ";

        $contactParams = [
            ':from_date' => $fromDate,
            ':to_date' => $toDate
        ];

        $statsParams = [
            ':from_date' => $fromDate,
            ':to_date' => $toDate
        ];

    } else {

        /*
        |--------------------------------------------------------------------------
        | PREDEFINED FILTERS
        |--------------------------------------------------------------------------
        */
        switch ($filter) {

            case 'today':

                $contactWhere = "
                    WHERE DATE(submitted_at) = CURDATE()
                ";

                $statsWhere = "
                    WHERE DATE(created_at) = CURDATE()
                ";

                break;

            case 'this_week':

                $contactWhere = "
                    WHERE YEARWEEK(submitted_at, 1)
                    = YEARWEEK(CURDATE(), 1)
                ";

                $statsWhere = "
                    WHERE YEARWEEK(created_at, 1)
                    = YEARWEEK(CURDATE(), 1)
                ";

                break;

            case 'this_year':

                $contactWhere = "
                    WHERE YEAR(submitted_at)
                    = YEAR(CURDATE())
                ";

                $statsWhere = "
                    WHERE YEAR(created_at)
                    = YEAR(CURDATE())
                ";

                break;

            case 'this_month':
            default:

                $contactWhere = "
                    WHERE
                        MONTH(submitted_at) = MONTH(CURDATE())
                    AND
                        YEAR(submitted_at) = YEAR(CURDATE())
                ";

                $statsWhere = "
                    WHERE
                        MONTH(created_at) = MONTH(CURDATE())
                    AND
                        YEAR(created_at) = YEAR(CURDATE())
                ";

                break;
        }
    }

    /*
    |--------------------------------------------------------------------------
    | CONTACT FORM COUNT
    |--------------------------------------------------------------------------
    */
    $contactSql = "
        SELECT COUNT(*)
        FROM contact_form
        $contactWhere
    ";

    $contactStmt = $pdo->prepare($contactSql);

    $contactStmt->execute($contactParams);

    $contactCount = (int)$contactStmt->fetchColumn();

    /*
    |--------------------------------------------------------------------------
    | BOOKING TOTALS
    |--------------------------------------------------------------------------
    */
    $statsSql = "
        SELECT

            COALESCE(SUM(whatsapp_booking),0)
            AS whatsapp_bookings,

            COALESCE(SUM(direct_email_booking),0)
            AS direct_email_bookings,

            COALESCE(SUM(ongoing_conversation_booking),0)
            AS active_booking_enquiries

        FROM booking_dashboard_stats

        $statsWhere
    ";

    $statsStmt = $pdo->prepare($statsSql);

    $statsStmt->execute($statsParams);

    $totals = $statsStmt->fetch(PDO::FETCH_ASSOC);

    /*
    |--------------------------------------------------------------------------
    | RESPONSE
    |--------------------------------------------------------------------------
    */
    respond(true, "Dashboard statistics fetched successfully", [

        "filter" => [

            "type" => $filter,

            "from_date" => $fromDate,

            "to_date" => $toDate

        ],

        "contact_form_inquiries" => $contactCount,

        "whatsapp_bookings" =>
            (int)$totals['whatsapp_bookings'],

        "direct_email_bookings" =>
            (int)$totals['direct_email_bookings'],

        "active_booking_enquiries" =>
            (int)$totals['active_booking_enquiries']

    ]);

} catch (Throwable $e) {

    http_response_code(500);

    respond(false, "Server error", [

        "error" => $e->getMessage()

    ]);

}