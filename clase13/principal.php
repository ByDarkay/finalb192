<?php
session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {
    header("Location: /index.html");
    exit;
} else {
    header("Location: /clase13/clase11/index.php");
    exit;
}
?>
