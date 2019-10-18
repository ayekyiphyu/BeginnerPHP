<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>


<?php
session_start();
unset($_SESSION['username']); //unset 
session_destroy(); //destory
header("Location: login.php");//login page
exit;
?>


</body>
</html>