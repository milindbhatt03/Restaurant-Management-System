<?php
{
$sql2 = mysql_query("SELECT * FROM employee_details");
$count   = mysql_num_fields($sql2);
$header = '';
$data = '';
for ($i = 0; $i < $count; $i++) {
  $header .= mysql_field_name($sql2, $i)."\t";
}
while($row = mysql_fetch_assoc($sql2)) {
  $line = '';
  foreach($row as $key => $value) {
    if ($key === 'date_of_reg') {
      $value  = '"' . date('d/m/Y', $value) . '"';
    } else {
      $value  = '"' . $value . '"';
    }
    if ($line === '') {
      $line  = $value;
    } else {
      $line .= "\t" . $value;
    }
  }
  $data .= $line . "\n";
}
if ($data == "") 
{
    $data = "There is no record inside the table.";
}
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=student_excel.xls");
header("Pragma: no-cache");
header("Expires: 0");
echo $header."\n".$data; 
}
?>