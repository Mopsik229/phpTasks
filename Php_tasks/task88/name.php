<?php
session_start();
$_SESSION['visitedPages'] = $_SESSION['visitedPages'] ?? [];
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['firstName']))
{
    $_SESSION['firstName'] = $_POST['firstName'];
    header('Location: lastname.php');
    exit;
}?>

<form method="POST" action="">
    <label for="firstName">Введите имя:</label>
    <input type="text" id="firstName" name="firstName" required>
    <button type="submit">Далее</button>
</form>
