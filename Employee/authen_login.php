
<?php 
session_start();
 require('config.php');
 $error = "username/password incorrect";

if (isset($_POST['admin_name']) and isset($_POST['admin_pass'])){
	
// Assigning POST values to variables.
$ad_name = $_POST['admin_name'];
$ad_pas = $_POST['admin_pass'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `admin` WHERE username='$ad_name' and Password='$ad_pas'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
 header("location: dashboard.php");

}else{
/*echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";*/
//echo "Invalid Login Credentials";

  $_SESSION["error"] = $error;
  header("location: login.php"); 
              
                
}
}
?>