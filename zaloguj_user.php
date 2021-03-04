<?php
  session_start();

  //podłączmy plik  connection.php
  require_once "connection.php";

  //utworzenie obiektu reprezentującego połączenie w kodzie i za pomocą jego instancji ustanowienie połałczeia z bazą
  $connection = @new mysqli($mysql_server, $mysql_user, $mysql_pass, $mysql_db);

  if($connection->connect_errno!=0)
  {
    echo "Error".$connection->connect_errno;
  }
  else
  {

    $login = $_POST['login'];


    $sql = "SELECT * FROM Users WHERE name='$login'";

    if ($rezult = @$connection->query($sql))
    {
      $ilu_userow = $rezult->num_rows;
      if ($ilu_userow>0) {

        $row = $rezult->fetch_assoc();
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['position'] = $row['position'];
        $_SESSION['phone'] = $row['phone'];
        $_SESSION['days_used'] = $row['days_used'];

// jeśli udało się zalogować to dla porządku usuwamy zmienną błądebug
        unset($_SESSION['error']);

        $rezult->close();
        header('Location: user_panel.php');

      }else {

        $_SESSION['error'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';

      }

    }



    $connection->close();
  }


 ?>
