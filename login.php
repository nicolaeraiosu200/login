<?php
// includes/auth.php

function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function saveUser($username, $password) {
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $userRecord = "$username:$hashedPassword" . PHP_EOL;
    file_put_contents('../data/users.txt', $userRecord, FILE_APPEND);
}

function verifyUser($username, $password) {
    if (!file_exists('../data/users.txt')) return false;
    
    $users = file('../data/users.txt', FILE_IGNORE_NEW_LINES);
    foreach ($users as $user) {
        list($savedUser, $savedPass) = explode(':', $user);
        if ($savedUser === $username && password_verify($password, $savedPass)) {
            return true;
        }
    }
    return false;
}
?>
