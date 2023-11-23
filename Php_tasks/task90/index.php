<?php
include 'mysql.php';

// Добавление новой записи в базу данных
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $surname = $_POST['surname'];
    $class = $_POST['class'];
    $admissionYear = $_POST['admissionYear'];
    $assignment = $_POST['assignment'];
    
    $query = "INSERT INTO students (surname, class, admission_year, assignment) VALUES ('$surname', '$class', '$admissionYear', '$assignment')";
    $mysqli->query($query);
}

// Просмотр базы данных
$result = $mysqli->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>База данных учеников</title>
</head>
<body>
    <h1>Учетные сведения об учащихся</h1>
    
    <h2>Данные об учениках</h2>
    <table>
        <tr>
            <th>Фамилия</th>
            <th>Класс</th>
            <th>Год поступления</th>
            <th>Выполняемое поручение</th>
        </tr>
        
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['surname']; ?></td>
            <td><?php echo $row['class']; ?></td>
            <td><?php echo $row['admission_year']; ?></td>
            <td><?php echo $row['assignment']; ?></td>
        </tr>
        <?php } ?>
    </table>
    
    <h2>Добавить новую запись</h2>
    <form method="post">
        <p>Фамилия: <input type="text" name="surname"></p>
        <p>Класс: <input type="text" name="class"></p>
        <p>Год поступления: <input type="text" name="admissionYear"></p>
        <p>Выполняемое поручение: <input type="text" name="assignment"></p>
        <p><input type="submit" value="Добавить"></p>
    </form>
</body>
</html>
