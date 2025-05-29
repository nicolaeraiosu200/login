<?php
require_once 'https://nicolaeraiosu200.github.io/regster.php';

$username = sanitizeInput($_POST['username']);
$password = sanitizeInput($_POST['password']);

if (strlen($password) < 6) {
    header("https://nicolaeraiosu200.github.io/index.html?error=" . urlencode('Parola trebuie să aibă minim 6 caractere'));
    exit();
}

saveUser($username, $password);
header("https://nicolaeraiosu200.github.io/dashboard.html?username=" . urlencode($username));
exit();
?>
