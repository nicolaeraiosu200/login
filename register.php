<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (!file_exists('../data/users.txt')) {
    file_put_contents('../data/users.txt', '');
}

$users = file('../data/users.txt', FILE_IGNORE_NEW_LINES);
foreach ($users as $user) {
    list($savedUser, $savedPass) = explode(':', $user);
    if ($savedUser === $username) {
        die('User already exists!');
    }
}

file_put_contents('../data/users.txt', "$username:$password" . PHP_EOL, FILE_APPEND);

header('Location: ../dashboard.html');
exit();
?>
