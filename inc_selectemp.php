<?php 

$Fname=$_POST['Firstname'];
$Lname = $_POST['Lastname'];
$AvailDays=$_POST['AvailaibleWeek']; 		
$Jobtype=$_POST['Jobtype']; 


 

if(!empty($Fname))
{
	
$query = "SELECT * FROM employee_details WHERE emp_fname = '".$Fname."' ORDER BY emp_fname";
	
}

else if(!empty($AvailDays))
{
	
$query = "SELECT * FROM employee_details WHERE emp_availaibleweekday = '".$AvailDays."' ORDER BY emp_fname";
	
}

else if(!empty($Jobtype))
{
	
$query = "SELECT * FROM employee_details WHERE emp_jobtype = '".$Jobtype."' ORDER BY emp_fname";
	
}

else if(!empty($Lname ))
{
	
$query = "SELECT * FROM employee_details WHERE emp_lname = '".$Lname ."' ORDER BY emp_lname";
	
}

else {
goto x;
 
}

$db_result = mysql_query($query,$connection);

x:
if (mysql_num_rows($db_result) > 0) {
   
} else {
	echo "<h1>";
	echo "Nothing is selected OR Value does not exist. <br>Try again.<br>";
	 
    	echo "</h1>";
	goto a;
}
a:


?>