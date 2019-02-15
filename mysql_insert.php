<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$db = mysqli_connect("localhost","oleg","12345");
mysqli_select_db($db,"firstbd");


  if (isset($_POST["name"])) {
    $sql = mysqli_query($db, "INSERT INTO `users1` (`name`, `surname`, `sex`, `age`, `young`, `DateOfBirth`, `FamilyStatus`, `SocialStatus`, `Residence`, `sleep`, `walkingwithfriends`, `fishing`, `playinggames`, `site`, `Books`, `sometext`, `position`) VALUES ('{$_POST['name']}', '{$_POST['surname']}', '{$_POST['sex']}', '{$_POST['age']}', '{$_POST['young']}', '{$_POST['DateOfBirth']}', '{$_POST['FamilyStatus']}', '{$_POST['SocialStatus']}', '{$_POST['Residence']}', '{$_POST['sleep']}', '{$_POST['walkingwithfriends']}', '{$_POST['fishing']}', '{$_POST['playinggames']}', '{$_POST['site']}', '{$_POST['Books']}', '{$_POST['sometext']}', '{$_POST['position']}')");
    if ($sql) {
      echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
      echo '<p>Произошла ошибка: ' . mysqli_error($db) . '</p>';
    }
  }
?>

</body>
</html>