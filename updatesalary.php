<?php
include 'session_files.php';
require('db_connect.php');
?>
<!doctype html>
<html>
<head>
<title> UPDATE SALARY</title>
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
  <a href="updatesalary.php"  class="a1active ">Update Employee Salary</a><br>
     <a href="selectsalary.php"  class="a1">Search Employee Salary</a><br>
  <a href="updategeneralsalary.php" class="a1">Update General Salary Details</a><br>
  <a href="logindetails.php" class="a1">Login Details</a><br>

</h1>
 </center>
</div>

<div class="section">
<center><h1>LIST OF ALL SALARIES</h1><br><br><br>
 <form action="updatesalary2.php" method="post" onSubmit="return confirm('Are you sure to continue?')">
      Enter id to update salary details<input type="number" name="EmpId" required> 
      
      <button type="submit" >Update</button>
      </form></center>
 <table border="1" class="table1" >
      <thead>
        <tr>
          <th>Emp Id</th><br />
          <th>Salary for Month</th><br />
          <th>Salary for Year</th><br />
          <th>Salary</th><br />
          
        </tr>
      </thead>
      <tbody>
        <?php
       include 'inc_updatesalary.php';
        ?>
      </tbody>

    </table>


<BR>

<?php
a:
mysql_close($connection);
?>   
      
</div>
</body>
</html>
