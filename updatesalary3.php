<?php
include 'session_files.php';
require('db_connect.php');

?>
 
<!doctype html>
<html>
<head>
<title> ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>


<body>

<div class="header">
<h1>Welcome Admin</h1>
<?php echo date("j/m/y"); 
  ?>
</div>
<a style="float:right;color:red;" value="LOG OUT" href="index.php">LOG OUT</a>
<div class="nav">
<center><h1>
<a href="homepage.php" class="a1">Homepage</a><br>
  <a href="insertemp.php" class="a1">Insert employee details</a><br>
  <a href="deleteemp1.php" class="a1">Delete employee details</a><br>
  <a href="selectempmain.php" class="a1">View employee details</a><br>
  <a href="updateemp.php" class="a1">Update employee details</a><br>
  <a href="insertsalary.php" class="a1">Insert Employee Salary</a><br>
  <a href="updatesalary.php"  class="a1active">Update Employee Salary</a><br>
     <a href="selectsalary.php"  class="a1">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1">Login Details</a><br>

</h1>
 </center>
</div>

<div class="section">

<BR>



     

		<center>





<?php

include 'inc_updatesalary3.php';
?>   

 
      
</div>
</center>

</body>
</html>



