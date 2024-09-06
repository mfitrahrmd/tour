<?php
require "../database-bootstrap.php";

// Set the content type to application/json
header('Content-Type: application/json');

// Set CORS headers (if needed for cross-origin requests)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Send a 405 Method Not Allowed response
    http_response_code(405);
    echo json_encode([
        "status" => "error",
        "message" => "Method not allowed. Please use POST."
    ]);
    exit;
}

// Get the raw POST data (assuming it's JSON)
$input = file_get_contents('php://input');

// Decode the JSON data
$data = json_decode($input, true); // true for associative array

// Check if the data was successfully decoded
if ($data === null) {
    // Send a 400 Bad Request response if JSON is invalid
    http_response_code(400);
    echo json_encode([
        "status" => "error",
        "message" => "Invalid JSON data"
    ]);
    exit;
}

try {
    $result = Booking::create([
        "orders_name" => $data["ordersName"],
        "number_of_visitor" => $data["numberOfVisitor"],
        "booking_date" => $data["bookingDate"],
        "duration" => $data["duration"],
        "user_id" => -1,
        "tour_id" => $data["tourId"]
    ]);
    foreach ($data["services"] as $s) {
        $result->services()->attach($s["id"]);
    }

    // Send a 200 OK response with the JSON response
    http_response_code(200);

    echo json_encode([
        "result" => $result
    ]);
} catch (\Throwable $th) {
    echo json_encode(([
        "message" => $th->getMessage()
    ]));
}
