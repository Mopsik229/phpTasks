<?php
session_start();
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['age']))
{
    $_SESSION['age'] = $_POST['age'];
    header('Location: final.php');
    exit;
}?>

<form method="POST" action="">
    <label for="age">Введите возвраст:</label>
    <input type="text" id="age" name="age" required>
    <button type="submit">Далее</button>
</form>

