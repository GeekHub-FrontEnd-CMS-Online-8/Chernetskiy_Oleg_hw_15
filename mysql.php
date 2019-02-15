<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Соединение с БД</title>
</head>
<body>

<?php

$db = mysqli_connect("localhost","oleg","12345");
mysqli_select_db($db,"firstbd");

$select = "SELECT * FROM users1";
$result = mysqli_query($db,$select);
$myrow = mysqli_fetch_array($result);

do {
    echo "Пользователь номер - " .$myrow['id'], "<br>";
    echo "Имя - " .$myrow['name'] , "<br>";
    echo "Фамилия - " .$myrow['surname'] , "<br>";
    echo "Пол - " .$myrow['sex'] , "<br>";
    echo "Возраст - " .$myrow['age'] , "<br>";
    echo "" .$myrow['young'] , "<br>";
    echo "Дата рождения  - " .$myrow['DateOfBirth'] , "<br>";
    echo "Семейное положение - " .$myrow['FamilyStatus'] , "<br>";
    echo "Социальный статус  - " .$myrow['SocialStatus'] , "<br>";
    echo "Местожительство - " .$myrow['Residence'] , "<br>";
    echo "<strong>Что обычно делает на выходных:</strong><br>";
    echo "Спит - " .$myrow['sleep'] , "<br>";
    echo "Гуляет с друзьями - " .$myrow['walkingwithfriends'] , "<br>";
    echo "Ходит на рыбалку - " .$myrow['fishing'] , "<br>";
    echo "Играет в игры - " .$myrow['playinggames'] , "<br>";
    echo "Формы в книге, посвященной HTML - " .$myrow['site'] , "<br>";
    echo "Количество прочтенных книг - " .$myrow['Books'] , "<br>";
    echo "Комментарий - " .$myrow['sometext'] , "<br>";
    echo "Выбранная позиция - " .$myrow['position'] , "<br>", "<br>";
}
while ($myrow = mysqli_fetch_array($result));

?>

</body>
</html>