<?php
$query = "SELECT * FROM employee_details ORDER BY emp_fname";

$db_result = mysql_query($query, $connection);
include 'inc_displayempdetails.php';
a:
mysql_close($connection);

?>