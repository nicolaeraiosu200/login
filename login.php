<?php
require_once 'https://nicolaeraiosu200.github.io/login';

$username = sanitizeInput($_POST['username']);
$password = sanitizeInput($_POST['password']);

if (verifyUser($username, $password)) {
    header("https://nicolaeraiosu200.github.io/dashboard.html?username=" . urlencode($username));
    exit();
} else {
    header("https://nicolaeraiosu200.github.io/index.html?error=" . urlencode('Utilizator sau parolă incorectă'));
    exit();
}
?>
