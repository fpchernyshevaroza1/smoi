<?php
session_start();
include 'db.php';
if (!isset($_SESSION['user_id'])) exit("Login first.");

$id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>

<h2>Welcome, <?= $user['email'] ?></h2>
<p>Your balance: $<?= $user['balance'] ?></p>

<form method="post" action="add_funds.php">
    Add funds: <input name="amount" type="number" required>
    <button type="submit">Add</button>
</form>
<a href="logout.php">Logout</a>