<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <style>
  /* #users {
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
#container {
  width: 1000px;
  margin-left: auto;
  margin-right: auto;
}
#worker {
  background-color: #D4DADE;
  padding: 5px
}
#calendar {
  background-color: #EAE6E1;
  float: left;
  width: 480px;
  height: 300px;
  padding: 10px;
}
#formulage {
  background-color: #C1BBB7;
  width: 480px;
  height: 30px;
  float: left;
  padding: 10px;
}
#history {
  background-color: #FAFAF2;
  width: 980px;
  height: 30px;
  clear: both;
  padding: 10px;
}
 */
  </style>
  <title> Aplikacja urlopowa</title>
</head>
<body>
  <?php
    $nickname = $_SESSION['table'][0]['name'];
   ?>
  <div id= "container">
    Container

    <div id="worker">
      <?php
      echo  "<h1>Pracownik: ".$_SESSION['table'][0]['name']." ".$_SESSION['table'][0]['surname']. "</h1>";

      ?>
    </div>

    <div id="calendar">
      <h2>Kalendarz</h2>

      <div class="rangePicker" style="width: 400px">
        <form>


        <input type="text" id="picker" class="form-control" >
        <br>
        <input type="submit" value="Wyślij wniosek urlopowy" />
        </form>
      </div>

      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


      <script>


      $('#picker').daterangepicker({
        inline: true,
        alwaysShowCalendars: true,
        minDate: moment().millisecond(0).second(0).minute(0).hour(0),


    });


      </script>

      <!-- <input type="text" name="daterange" value="01/01/2018 - 01/15/2018" />

      <script>
      $(function() {
        $('input[name="daterange"]').daterangepicker({
          opens: 'left'
        }, function(start, end, label) {
          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
        });
      });
      </script> -->

    </div>

    <div id="formulage">
      <div onload="ustawionana()"></div>
      Formularz <br>
      Zasieg dat <br>
      <?php
        $dataRange = ['picker'];
        // foreach ($dataRange as  $value) {
        //   echo $value;
        // }

        ?>

    </div>

    <div id="history">
      Historia urlopowa
    </div>

  </div>




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
// echo $_SESSION['num'];


// $nickname = $_SESSION['table'][0]['name'];;
// echo $nickname[0]['name'];
// echo $nickname(0);
// echo $nickname('name');
 // $roww = $_SESSION['table'];
// echo $roww['surname'];
// $test = array_keys($nickname);
// foreach ($test as $x) {
//    echo "<td>$x</td>";
// }

// echo array_keys($_SESSION['table']);



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
