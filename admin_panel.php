<?php
session_start();

if (!isset($_SESSION['zalogowany'])) {

header('Location: admin.php');
exit();
}
 ?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <style>
  #holiday {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#holiday td, #holiday th {
  border: 1px solid #ddd;
  padding: 8px;
}

#holiday tr:nth-child(even){background-color: #f2f2f2;}

#holiday tr:hover {background-color: #ddd;}

#holiday th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

  </style>
  <title>Aplikacja urlopowa</title>
</head>

<body>

  <?php

  echo "<p>Witaj ".$_SESSION['name'].'! [<a href="logout.php">Wyloguj się!</a>]</p>';

  echo "<p>Witaj ".$_SESSION['id']."!";
  echo "<p>Witaj ".$_SESSION['name']."!";
  echo "<p>Witaj ".$_SESSION['password']."!";
  echo "<p>Witaj ".$_SESSION['privileges']."!";

  echo '<table id="holiday">';
  echo "<tr><th>Id</th><th>User</th><th>Creation</th><th>Modyfication</th><th>Beginning</th><th>Status</th><th>Finish</th><th>Type</th></tr>";

foreach ($_SESSION['htable'] as $row) {
  echo "<tr>";

  foreach ($row as $filds) {
    echo "<td>$filds</td>";
  }
  echo "</tr>";
}
 echo "</table>";

   ?>


</body>

</html>
