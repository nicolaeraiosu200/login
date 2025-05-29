<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (!file_exists('../data/users.txt')) {
    die('No users registered yet!');
}

$users = file('../data/users.txt', FILE_IGNORE_NEW_LINES);
foreach ($users as $user) {
    list($savedUser, $savedPass) = explode(':', $user);
    if ($savedUser === $username && $savedPass === $password) {
        // Salvează userul în localStorage (prin JavaScript)
        echo "<script>
                localStorage.setItem('username', '$username');
                window.location.href = '../dashboard.html';
              </script>";
        exit();
    }
}

die('Invalid username or password!');
?>
