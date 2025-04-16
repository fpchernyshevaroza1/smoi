<?php
session_start();
include 'db.php';
if (!isset($_SESSION['user_id'])) exit("Unauthorized");

$amount = floatval($_POST['amount']);
$id = $_SESSION['user_id'];
$conn->query("UPDATE users SET balance = balance + $amount WHERE id = $id");
header("Location: dashboard.php");
?>