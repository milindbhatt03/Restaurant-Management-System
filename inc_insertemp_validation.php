<?php
  	
		 //Get data functionality starts
		 $Fname=$_POST['Firstname'];
		 $Lname = $_POST['Lastname'];
		 $Address = $_POST['Address'];
		 $City=$_POST['City'];
		 $Pincode=$_POST['Pincode']; 
		 $JoindateDay=$_POST['Day']; 
		 $JoindateMonth=$_POST['Month']; 
		 $JoindateYear=$_POST['Year']; 
		 $Gender = $_POST['Gender'];
		 $Contactnumber = $_POST['Contactnumber'];
		 $Emailid=$_POST['Email'];
		 $Jobtype=$_POST['Jobtype']; 
		 $AvailDays=$_POST['AvailaibleWeek']; 
		 $Docs=$_POST['Docs']; 
		 $valid = true;
       require('db_connect.php'); 
  
if(empty($_POST['Firstname']))
{
		 $valid=false;
		 goto a;
}
    
else if(empty($_POST['Lastname']))
{
       $valid=false;
       goto a;
}    
    
else if(empty($_POST['Address']))
{
        $valid=false;
        goto a;
}    
    
else if(empty($_POST['City']))
{
        $valid=false;      
        goto a;
}  
  
else if(empty($_POST['Pincode']))
{
        $valid=false;
        goto a;
}  
  
else if( strlen($_POST['Pincode']) != 5)
{
        $valid=false;
        goto a;
}

else if(empty($_POST['Contactnumber']))
{
        $valid=false;
        goto a;
}  
  
else if( strlen($_POST['Contactnumber']) != 10) 
{
        $valid=false;
        goto a;
}
   
else 
{
$query = mysql_query("INSERT INTO employee_details ( 
        emp_fname, 
        emp_lname, 
        emp_address, 
        emp_city, 
        emp_pincode, 
        emp_gender, 
        emp_contactno, 
        emp_jobtype, 
        emp_joinday,
        emp_joinmonth, 
        emp_joinyear, 
        emp_availaibleweekday, 
        emp_docs, 
        emp_emailid) 
        VALUES ( '$Fname', '$Lname', '$Address', '$City', '$Pincode', '$Gender', '$Contactnumber', '$Jobtype','$JoindateDay', '$JoindateMonth', '$JoindateYear', '$AvailDays','$Docs', '$Emailid')");
        $db_result = mysql_query($query,$connection);
}
        a:  
		 
if(empty($_POST['Firstname']))
{
        $valid=false;
        $nameError = "Name missing";
        echo "FIRST NAME NOT PROVIDED!<br>";
        goto b;
}
     //Get data functionality ends
   
   
    //Validation functionality starts
if(empty($_POST['Lastname']))
{
        $valid=false;
        $nameError = "Lastname not provided.";
        echo "LAST NAME NOT PROVIDED!<br>";
        goto b;
}    
if(empty($_POST['Address']))
{
        $valid=false;
        echo "ADDRESS NOT PROVIDED!<br>";
        goto b;
}    
    
if(empty($_POST['City']))
{
        $valid=false;
        echo "CITY NOT PROVIDED!<br>";
        goto b;
}    
    
if(empty($_POST['Pincode']))
{
        $valid=false;
        echo "PINCODE NOT PROVIDED!<br>";
        goto b;
}    
if( strlen($_POST['Pincode']) != 5) 
{
        $valid=false;
        echo "PIN CODE SHOULD BE 5 DIGITS ONLY!<br>";
        goto b;
}
if(empty($_POST['Contactnumber']))
{
        $valid=false;
        echo "CONTACT NUMBER NOT PROVIDED!<br>";
        goto b;
}    
if( strlen($_POST['Contactnumber']) != 10) 
{
        $valid=false;
        echo "CONTACT NUMBER SHOULD BE 10 DIGIT ONLY!<br>";
        goto b;
}

if($db_result)
{
        echo "<h1>Data Savedbb</H1>";
        echo "<br>";
}
else
{
        echo "<h1>Data Saved</H1>";
        echo "<br>";
}
        b:
        echo "<a href='insertemp.php'>Back to insert page</a>";
        echo "<br>";
        echo "<a href='homepage.php'>Back to home page</a>";
        mysql_close($connection);
//Validation functionality ends
?>