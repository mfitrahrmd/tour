<?
session_start();
$basepath = $_SERVER["DOCUMENT_ROOT"];
require $basepath . "/database-bootstrap.php";

$booking_id = $_GET["booking_id"];

try {
    Booking::destroy($booking_id);
    header("Location: /cart");
} catch (\Throwable $th) {
    echo $th->getMessage();
}
