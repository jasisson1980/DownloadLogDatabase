<?php
$con = odbc_connect("dload_db","","");
if (!$con)
  {exit("Connection Failed: " . $con);
  }

// SQL code for updating rows into the database
$sql="UPDATE dload SET job_num=$_POST[job_num], filename=$_POST[filename], pr=$_POST[pr], d_date=$$_POST[d_date], c_date=$_POST[c_date], 
task=$_POST[task], picf=$_POST[picf], picr=$_POST[picr], init=$_POST[init]
WHERE entry_num=$_POST[entry_num];";
$rs=odbc_exec($sql, $con);

if (!rs)
  {
  exit("SQL Error");
  } else{
echo "1 record updated";
}

odbc_close($con);
?>