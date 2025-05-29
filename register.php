<?php
require_once '../includes/auth.php';

$username = sanitizeInput($_POST['username']);
$password = sanitizeInput($_POST['password']);

if (strlen($password) < 6) {
    header("Location: ../index.html?error=" . urlencode('Parola trebuie să aibă minim 6 caractere'));
    exit();
}

saveUser($username, $password);
header("Location: ../dashboard.html?username=" . urlencode($username));
exit();
?>
