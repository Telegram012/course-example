<?php
require_once 'config/connect.php';
$s = mysqli_query($connect, "SELECT * FROM `Time of work`");
$s = mysqli_fetch_all($s);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Budget</title>
</head>
<body>
<table>
    <tr>
      <th>id</th>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Отчество</th>
      <th>Дата рабочего дня</th>
      <th>Отработанные часы</th>
      <th>&#9998;</th>
    </tr>
    <?php
      foreach($s as $s) {
        ?>
          <tr>
            <td><?= $s[0] ?></td>
            <td><?= $s[1] ?></td>
            <td><?= $s[2] ?></td>
            <td><?= $s[3] ?></td> 
            <td><?= $s[4] ?></td>
            <td><?= $s[5] ?></td>
            <td><a href="update.php?id=<?= $s[0] ?>">Обновить</a></td>
          </tr>
        <?php
      }
    ?>
  </table>
  <h2>Добавить часы для сотрудника/h2>
  <form action="vendor/create.php" method="post">
    <p>Имя</p>
    <textarea name="name"></textarea>
    <p>Фамилия</p>
    <input type ="number" name= "videl">
    <p>Отчество</p>
    <input type="number" name="zatr">
    <p>Дата рабочего дня</p>
    <input type="number" name="ost">
    <p>Отработанные часы</p>
    <input type="number" name="dat">
    <button type="submit">Добавить</button>
  </form>
</body>
</html>