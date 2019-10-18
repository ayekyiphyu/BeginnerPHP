<?php
session_start();
include( 'config.php' );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<!--datetime-->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
<!--datatable-->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<!--datetime-->
</head>
<body>
<div class="dashboard">
<nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link text-info font-weight-bold" href="feedback.php">Employee Feedback</a> </li>
      <li class="nav-item active"> <a class="nav-link text-dark font-weight-bold" href="performance-review.php">| Performance Review</a> 
      </li>
    </ul>
   <span class="navbar-text signout"> <a href="signout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a> </span> </div>
</nav>
<div class="col-md-11 mx-auto">
  <div  class="mt-3 table-responsive">
    <?php

    if ( $connection->connect_error ) {
      die( "Connection failed: " . $connection->connect_error );
    }

    $sql = "SELECT * FROM assign";
    $result = $connection->query( $sql );

    if ( $result->num_rows > 0 ) {
      // output data of each row
      echo "<table class='table table-striped'>";
      echo "<thead class='thead-dark'>";
      echo "<tr>";
      echo "<th scope='col'>ID</th>";
      echo "<th scope='col'>Assign Name</th>";
      echo "<th scope='col'>Employee Name</th>";
      echo "<th scope='col'>Assign Detail</th>";
       echo "<th scope='col'>Performance</th>";
      echo "</tr>";
      echo "</thead>";

      while ( $row = $result->fetch_assoc() ) {
        //echo "No: " . $row["id"]. " - Name: " . $row["name"]. " " . "<br>";
        echo "<tr>";
        echo "<td>" . $row[ 'id' ] . "</td>";
        echo "<td>" . $row[ 'assign_name' ] . "</td>";
        echo "<td>" . $row[ 'emp_name' ] . "</td>";
        echo "<td>" . $row[ 'assign_detail' ] . "</td>";
        echo "<td>" . $row[ 'performance' ] . "</td>";
        echo "</tr>";

      }
      echo "</table>";

    }
    $connection->close();


    ?>
    </table>
  </div>
</div>
<!--dashboard-->
<footer class="bg-light footer mt-5">&copy;2019</footer>
<!--script--> 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><!----> 

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script> 
<script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    format: 'L'
                });
            });
 </script> 

<!--datatable--> 
<!--end script-->
</body>
</html>