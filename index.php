<?php
include 'session_index.php';
?>
<!doctype html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style1.css">

</head>

<body>
<div class="header">
<h1>Restaurant  Management System</h1>
 <?php echo date("j/m/y"); 
  ?>  

</div>

<center>
<div id="main">
<h1>Enter Login Details</h1>
<div id="login">
<form action="index1.php" method="post">
<table>
<tr>
<td><label>Username :</label></td>
<td><input id="name" name="username" placeholder="username" type="text"></td>

</tr>
<tr>
<td><label>Password :</label></td>
<td><input id="password" name="password" placeholder="**********" type="password"></td>

</tr>
<tr>
<td></td>
<td><input name="submit" type="submit" value=" Login ">&emsp;<input name="reset" type="reset" value=" Reset "></td>

</tr>

</table>


<br>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
<p><u>For testing purpose: </u><br> username: admin <br>password: admin123!</p>
 </center>
 
      


</body>
</html>
