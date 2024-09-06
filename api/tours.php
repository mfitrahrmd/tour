<?php
require "../database-bootstrap.php";

// Set the content type to application/json
header('Content-Type: application/json');

// Set CORS headers (optional, if you're working with cross-origin requests)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

$tour_id = $_GET["tour_id"];

$tour = Tour::with(["location", "images"])->find($tour_id);

http_response_code(200);

echo $tour;
