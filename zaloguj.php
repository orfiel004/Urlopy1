<?php

  //załączenie pliku z informacjami o DB
  require_once "connect.php";

  //stworzenie obiektu reprezentującego połączenie w kodzie i za pomocą jego instancji ustanowienie połałczeia z bazą
  //przed new "@" wycisza wyświetlanie błędów
  $connection = @new mysqli($host, $db_user, $db_password, $db_name);

  if($connection->connect_errno!=0)
  {
    echo "Error".$connection->connect_errno." Opis ".$connectio->connect_error;
  }
  else
  {

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    echo "It works!";

    $connection->close();
  }



 ?>
