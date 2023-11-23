<?php
session_start();
array_pop($_SESSION['visitedPages']);
$_SESSION['visitedPages'][] = $_SERVER['PHP_SELF'];

$visitedPages = $_SESSION['visitedPages'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>TASK88</title>
</head>
<body>
<h2>Информация о пользователе:</h2>
<ul>
    <li>Имя: <?php echo $_SESSION['firstName']; ?></li>
    <li>Фамилия: <?php echo $_SESSION['lastName']; ?></li>
    <li>Возраст: <?php echo $_SESSION['age']; ?></li>
</ul>

<h2>История посещений:</h2>
<ul>
    <?php foreach ($visitedPages as $page) : ?>
        <li><?php echo $page; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
