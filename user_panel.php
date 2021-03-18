<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <style>
  #users {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#users td, #users th {
  border: 1px solid #ddd;
  padding: 8px;
}

#users tr:nth-child(even){background-color: #f2f2f2;}

#users tr:hover {background-color: #ddd;}

#users th {
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
	<h1> Witaj </h1>


  <?php
  // echo '<table id="users">';
  // echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Position</th><th>Phone</th><th>Used dayes</th></tr>";

  // <tr><th>".$_SESSION['id_user']."</th><th>".$_SESSION['name']."</th><th>".$_SESSION['surname']."</th><th>".$_SESSION['position']."</th><th>".$_SESSION['phone']."</th><th>Used ".$_SESSION['days_used']."</th></tr>";


  // echo "<table><tr><th>".$_SESSION['id_user']."</th></tr></table><br>";
  // echo " ".$_SESSION['id_user'];
  // echo " ".$_SESSION['name'];
  // echo " ".$_SESSION['surname'];
  // echo " ".$_SESSION['position'];
  // echo " ".$_SESSION['phone'];
  // echo " ".$_SESSION['days_used'];

  // foreach(.$_SESSION['rows'] as $row){
  //   echo .$_SESSION[];
  // }
  // echo .$_SESSION['row'];

echo '<table id="users">';
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Position</th><th>Phone</th><th>Used dayes</th></tr>";

   foreach ($_SESSION['table'] as $value){
     echo "<tr>";

     foreach ($value as $row) {
        echo "<td>$row</td>";
     }

    echo "</tr>";
   }
   echo "</table>";

  ?>
</body>

</html>
