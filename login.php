<?php
require_once '../includes/auth.php';

$username = sanitizeInput($_POST['username']);
$password = sanitizeInput($_POST['password']);

if (verifyUser($username, $password)) {
    header("Location: ../dashboard.html?username=" . urlencode($username));
    exit();
} else {
    header("Location: ../index.html?error=" . urlencode('Utilizator sau parolă incorectă'));
    exit();
}
?>
