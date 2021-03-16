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
	<h1> Witaj </h1>


  <?php
  echo "<table style='border: solid 1px black;'>";
  echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Position</th><th>Phone</th><th>Used dayes</th></tr><tr><th>".$_SESSION['id_user']."</th><th>".$_SESSION['name']."</th><th>".$_SESSION['surname']."</th><th>".$_SESSION['position']."</th><th>".$_SESSION['phone']."</th><th>Used ".$_SESSION['days_used']."</th></tr>";

  // foreach(.$_SESSION['rows'] as $row){
  //   echo .$_SESSION[];
  // }
  // echo .$_SESSION['row'];

   foreach ($_SESSION['table'] as $value){
     echo "$value";
   }


  echo "<table><tr><th>".$_SESSION['id_user']."</th></tr></table><br>";
  echo " ".$_SESSION['id_user'];
  echo " ".$_SESSION['name'];
  echo " ".$_SESSION['surname'];
  echo " ".$_SESSION['position'];
  echo " ".$_SESSION['phone'];
  echo " ".$_SESSION['days_used'];




  ?>
</body>

</html>
