<?php
session_start();
include( 'config.php' );
?>
<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#">Logo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item"> <a class="nav-link" href="dashboard.php">View Employee</a> </li>
      
    </ul>
    <span class="navbar-text signout"> <a href="signout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a> </span> </div>
</nav>
<?php


if ( isset( $_POST[ 'save' ] ) ) {

   echo $assign_name = $_POST[ 'assign_name' ];
   echo $emp_name = $_POST[ 'emp_name' ];
   echo $assign_detail = $_POST[ 'assign_detail' ];
   echo $performance = $_POST[ 'performance' ];

 /* $sql = "SELECT * FROM assign inner JOIN employee ON  employee.id = assign.id";*/

  
  //$sql = "SELECT * FROM assign i LEFT JOIN employee u ON i.id = u.id ";
  /*$sql = "INSERT INTO  assign 
          SELECT employee.id,employee.name,assign.id,assign.assign_name
          FROM employee 
          LEFT JOIN assign ON employee.id=assign.id";*/
  
  $sql = "INSERT INTO assign (assign_name, emp_name, assign_detail, performance) VALUES ('$assign_name','$emp_name','$assign_detail','$performance')";

  $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);
  
  
  
  if(!$result || mysqli_num_rows($count) == 0)
     {
    
      
    header("location: employee-view-assign.php"); 
  }else {
    echo "error";
  }

}
?>
<div class="col-md-11 mx-auto mt-3 border p-0">
  <h2 class="common-subtit ">Add Assign </h2>
  <form action="" method="post" class="p-3" alert('hacked')&lt;/script&gt;>
  <form class="p-3">
    <div class="form-row">
      <div class="col-md-3">
        <label id="assign_name">Assign_Name:</label>
      </div>
      <div class="col-md-9">
        <input type="text" name="assign_name" class="form-control" required>
      </div>
    </div>

     <div class="form-row mt-4">
      <div class="col-md-3">
        <label id="emp_name">Employee Name</label>
      </div>
      <div class="col-md-9">
          <select class="form-control" name="emp_name">
                    <option value="0">Select Name</option>
                    <?php
                    $query="select id,name from employee";
                    $run=$connection->prepare($query);
                    $run->execute();
                    $rs=$run->get_result();
                    while ($res=$rs->fetch_assoc()) {
                    ?>
                    <option><?=$res['name'] ?></option>  
                    <?php }?>
                </select>
      </div>
    </div>
    
    <div class="form-row mt-4">
      <div class="col-md-3">
        <label id="assign_detail">Assign_detail</label>
      </div>
      <div class="col-md-9">
        <input type="text" name="assign_detail" class="form-control" required>
      </div>
    </div>
    
    <div class="form-row mt-4">
      <div class="col-md-3">
        <label id="assign_detail">Performance</label>
      </div>
      <div class="col-md-9">
    <input type="radio" name="performance"
      <?php if (isset($performance) && $performance=="good") echo "checked";?>
      value="good"> Good
      <input type="radio" name="performance"
      <?php if (isset($performance) && $performance=="fair") echo "checked";?>
      value="fair"> Fair
        
         <input type="radio" name="performance"
      <?php if (isset($performance) && $performance=="bad") echo "checked";?>
      value="bad"> Bad
       
      <input type="radio" name="performance"
      <?php if (isset($performance) && $performance=="other") echo "checked";?>
      value="other"> Other
      </div>
    </div>
    
    
    
    
    <div class="col-md-4 mx-auto mt-4">
      <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-save" aria-hidden="true"></i> Save</button>
    </div>
  </form>
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script><!----> 
<!--chart--> 
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script> 
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>