<?php
$host = 'localhost';
$db = 'school_db';
$user = 'username';
$password = 'password';

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
} 
?>
