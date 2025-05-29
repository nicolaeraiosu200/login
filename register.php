<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Verifică dacă fișierul există, altfel îl creează
if (!file_exists('../data/users.txt')) {
    file_put_contents('../data/users.txt', '');
}

// Verifică dacă userul există deja
$users = file('../data/users.txt', FILE_IGNORE_NEW_LINES);
foreach ($users as $user) {
    list($savedUser, $savedPass) = explode(':', $user);
    if ($savedUser === $username) {
        die('User already exists!');
    }
}

// Salvează user:pass în fișier
file_put_contents('../data/users.txt', "$username:$password" . PHP_EOL, FILE_APPEND);

// Redirecționează către dashboard cu numele utilizatorului
header('Location: ../dashboard.html');
exit();
?>
