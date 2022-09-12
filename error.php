<!DOCTYPE html>
<html lang="en">
<?php
require('api/statuscode.php');
session_start();
if (isset($_SESSION['status']) && isset($_SESSION['reason'])) {
    unset($_SESSION['status'], $_SESSION['reason']);
}
if (isset($_GET['s'])) {
    $stat = $_GET['s'];
    if (is_numeric($stat)) {
        if ($stat == $statusCode[$stat]) {
            $_SESSION['status'] = $stat;
            $_SESSION['reason'] = $statusName[$stat];
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <h1><?php if (isset($_SESSION['status'])) { echo $_SESSION['status']; } ?></h1>
  <p><?php if (isset($_SESSION['reason'])) { echo $_SESSION['reason']; } ?></p>
</body>
