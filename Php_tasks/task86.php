<?php
if(isset($_COOKIE['visits'])) {
    $visits = $_COOKIE['visits'] + 1;
} else {
    $visits = 1;
}
setcookie('visits', $visits, time() + 3600*24*365);

if(isset($_COOKIE['lastVisit'])) {
    $lastVisit = htmlspecialchars($_COOKIE['lastVisit']);
} else {
    $lastVisit = 'Это ваш первый визит';
}
setcookie('lastVisit', date("d/m/Y H:i:s"), time() + 3600*24*365);

echo "Количество посещений: ".$visits."<br>";
echo "Дата последнего посещения: ".$lastVisit;
?>
