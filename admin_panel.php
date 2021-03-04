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
  <title>Aplikacja urlopowa</title>
</head>

<body>

  <?php

  echo "<p>Witaj ".$_SESSION['name'].'! [<a href="logout.php">Wyloguj się!</a>]</p>';

  echo "<p>Witaj ".$_SESSION['id']."!";
  echo "<p>Witaj ".$_SESSION['name']."!";
  echo "<p>Witaj ".$_SESSION['password']."!";
  echo "<p>Witaj ".$_SESSION['privileges']."!";


   ?>


</body>

</html>
