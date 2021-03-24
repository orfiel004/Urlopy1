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


    // $sql = "SELECT * FROM Users";
    $sql = "SELECT * FROM Users ";

    if ($result = @$connection->query($sql))
    {
      $users = $result->num_rows;
      if ($users=1) {

        $row = $result->fetch_all(MYSQLI_ASSOC);
        // $_SESSION['id_user'] = $row['id_user'];
        // $_SESSION['name'] = $row[1];
        // $_SESSION['surname'] = $row['surname'];
        // $_SESSION['position'] = $row['position'];
        // $_SESSION['phone'] = $row['phone'];
        // $_SESSION['days_used'] = $row['days_used'];

        $_SESSION['num']= $users;
        // $table1 = array("Adam","Ewa","Pawel");
        $_SESSION['table'] = $row;



// jeśli udało się zalogować to dla porządku usuwamy zmienną błądebug
        unset($_SESSION['error']);

        $result->close();
        header('Location: user_panel.php');

      }else {

        $_SESSION['error'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';

      }

    }



    $connection->close();
  }


 ?>
