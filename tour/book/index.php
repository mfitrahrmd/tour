<?
session_start();
$basepath = $_SERVER["DOCUMENT_ROOT"];
require $basepath . "/database-bootstrap.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/react/react.css">
    <link rel="stylesheet" href="/style/style.css">
    <title>Book</title>
</head>

<body>
    <? include $basepath . "/component/header.php" ?>
    <main id="react"></main>
    <script src="/react/react.js"></script>
</body>

</html>