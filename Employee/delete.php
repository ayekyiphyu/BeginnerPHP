<?php
session_start();
include( 'config.php' );
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

$id = $_GET[ 'id' ];
// sql to delete a record
$sql = "DELETE FROM employee WHERE id = $id";

if ( mysqli_query( $connection, $sql ) ) {
  mysqli_close( $connection );
  header( 'Location: dashboard.php' );//delete all records
  exit;
} else {
  echo "Error deleting record";

}
?>
>
</body>
</html>