<?php
session_start();
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
  echo "witaj ".$_SESSION['id_user'];
  echo "witaj ".$_SESSION['name'];
  echo "witaj ".$_SESSION['surname'];
  echo "witaj ".$_SESSION['position'];
  echo "witaj ".$_SESSION['phone'];
  echo "witaj ".$_SESSION['days_used'];



  ?>


</body>

</html>
