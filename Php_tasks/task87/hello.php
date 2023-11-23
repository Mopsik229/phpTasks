<?php
if(isset($_POST['username'])) {
    $username = $_POST['username'];
    setcookie('username', $username, time() + (86400 * 30), "/");
} else {
    $username = isset($_COOKIE['username']) ? $_COOKIE['username'] : 'Гость';
}

echo "Привет, " . $username . "!";
?>
