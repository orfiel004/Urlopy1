<?php
session_start();

if (isset($_SESSION['zalogowany']) && ($_SESSION['zalogowany']==true))
{
  header('Location: admin_panel.php');
  // zeby nie wykonywać niepotrzebnie całego kodu
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
  ADMIN<br/><br/><br/>


  <form action="zaloguj_admin.php" method="post">

    Login: <br/> <input type="text" name="login" <br/><br/>
    Hasło: <br/> <input type="password" name="haslo" <br/><br/>

    <input type="submit" value="Zaloguj">


  </form>
  <?php
  // isset sprawdzi czy ta zmienna jest ustawiona i tylko jesli jest to ją wyświetli
  if (isset($_SESSION['error'])) echo $_SESSION['error'];
  ?>

</body>

</html>
