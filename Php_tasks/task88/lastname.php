<?php
session_start();
array_pop($_SESSION['visitedPages']);
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['lastName']))
{
    $_SESSION['lastName'] = $_POST['lastName'];
    header('Location: age.php');
    exit;
}?>

<form method="POST" action="">
    <label for="lastName">Введите фамилию:</label>
    <input type="text" id="lastName" name="lastName" required>
    <button type="submit">Далее</button>
</form>

