<?php
$con = odbc_connect("dload_db","","");
if (!$con)
  {exit("Connection Failed: " . $con);
  }

// SQL code for inserting new rows into the database
$rs=odbc_exec($sql, $con);

$sql="INSERT INTO dload (job_num, filename, pr, d_date, c_date, task, picf, picr, init)
VALUES('$_POST[job_num]','$_POST[filename]','$_POST[pr]','$_POST[d_date]','$_POST[c_date]','$_POST[task]','$_POST[picf]',
'$_POST[picr]','$_POST[init]')";

if (!$rs)
  {exit("SQL Error: " . $conn);
  } else{
echo "1 record added";
}

odbc_close($con);
?>
