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
  USER<br/><br/><br/>
  Połóż kartę<br/><br/>

  <form action="zaloguj_user.php" method="post">

    Login: <br/> <input type="text" name="login" <br/><br/>

    <input type="submit" value="Zaloguj">

  </form>
  <!-- logowanie bez przycisku -->
  <!-- <form action="zaloguj_user.php" method="post">

    <input type="hidden" name="nazwa" value="wartość">

  </form> -->
  <?php
  // isset sprawdzi czy ta zmienna jest ustawiona i tylko jesli jest to ją wyświetli
  if (isset($_SESSION['error'])) echo $_SESSION['error'];
  ?>

</body>

</html>
