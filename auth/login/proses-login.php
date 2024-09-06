<?
session_start();
$basepath = $_SERVER["DOCUMENT_ROOT"];
require $basepath . "/database-bootstrap.php";

$email = $_POST["email"];
$password = $_POST["password"];

try {
    $user = User::where("email", $email)->first();
    if ($user["password_hash"] == $password) {
        $_SESSION["user_id"] = $user["id"];
        header("Location: /");
    } else {
        header("Location: /login.php");
    }
} catch (\Throwable $th) {
    echo $th->getMessage();
}
