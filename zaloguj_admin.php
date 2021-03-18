<?php
  session_start();

  if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
  {
    header('Location: admin.php');
    exit();
  }

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
    $haslo = $_POST['haslo'];

    $sql = "SELECT * FROM Admin WHERE name='$login' AND password='$haslo'";

    if ($result = @$connection->query($sql))
    {
      $ilu_userow = $result->num_rows;
      if ($ilu_userow>0) {

        //flaga zalogowania
        $_SESSION['zalogowany'] = true;

        $row = $result->fetch_assoc();
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['privileges'] = $row['privileges'];

        $result->close();
        header('Location: admin_panel.php');

      }else {

        $_SESSION['error'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
        header('Location: admin.php');

      }

    }

    $sqlholidays = "SELECT * FROM Holidays_status";
    $holidays= @$connection->query($sqlholidays);
    $holidaysarray = $holidays->fetch_all();
    $_SESSION['htable'] = $holidaysarray;

    $connection->close();
  }



  ?>
