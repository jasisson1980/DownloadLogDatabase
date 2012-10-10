<?php
$con=odbc_connect("dload_db","","");
if (!$con)
  {exit("Connection Failed: " . $con);
  }
  
if($_GET[job_num] != null){  
// SQL code for searching by job number

$sql="SELECT * FROM dload WHERE job_num LIKE $_GET[job_num];";
$rs=odbc_exec($sql, $con);

  echo "<table><tr>";
  echo "<th>"Job Number"</th>";
  echo "<th>"File Name"</th>";
  echo "<th>"Point Range"</th>";
  echo "<th>"Download Date"</th>";
  echo "<th>"Completion Date"</th>";
  echo "<th>"Task"</th>";
  echo "<th>"Pic File"</th>";
  echo "<th>"Pic Range"</th>";
  echo "<th>"Crew Chief Initials"</th></tr>";
  
while (odbc_fetch_row($rs))
  {
  /*$job_num=odbc_result($rs,"job_num");
  $filename=odbc_result($rs,"filename");
  $pr=odbc_result($rs,"pr");
  $d_date=odbc_result($rs,"d_date");
  $c_date=odbc_result($rs,"c_date");
  $task=odbc_result($rs,"task");
  $picf=odbc_result($rs,"picf");
  $picr=odbc_result($rs,"picr");
  $init=odbc_result($rs,"init");
  */
  $row1=odbc_result($rs, 1);
  $row2=odbc_result($rs, 2);
  
  
  echo "<tr><td>$row1</td></tr>";
  echo "<tr><td>$row2</td></tr>";
  
  
  echo "</table>";
  echo $job_num;
  
  }


} else if($_GET[d_date] != null){
// SQL code for searching by download date

$sql="SELECT * FROM dload WHERE d_date LIKE $_GET[d_date];";
$rs=odbc_exec($sql, $con);

while (odbc_fetch_row($rs))
  {
  /*$job_num=odbc_result($rs,"job_num");
  $filename=odbc_result($rs,"filename");
  $pr=odbc_result($rs,"pr");
  $d_date=odbc_result($rs,"d_date");
  $c_date=odbc_result($rs,"c_date");
  $task=odbc_result($rs,"task");
  $picf=odbc_result($rs,"picf");
  $picr=odbc_result($rs,"picr");
  $init=odbc_result($rs,"init");
 */ 
 echo <<< END <table>
  <tr><th>"Job Number"</th><th>"File Name"</th><th>"Point Range"</th><th>"Download Date"</th><th>"Completion Date"</th><th>"Task"</th><th>"Pic File"</th><th>"Pic Range"</th><th>"Crew Chief Initials"</th></tr>
  <tr><td>odbc_result($rs, 1)</td></tr>
  <tr><td>odbc_result($rs,2)</td></tr></table>
  END;
  
  }
}

if (!rs)
  {
  exit("SQL Error");
} else{
// SQL code for searching by crew chief initials

$sql="SELECT * FROM dload WHERE init LIKE $_GET[init];";
$rs=odbc_exec($sql, $con); 

while (odbc_fetch_row($rs))
  {
  /*$job_num=odbc_result($rs,"job_num");
  $filename=odbc_result($rs,"filename");
  $pr=odbc_result($rs,"pr");
  $d_date=odbc_result($rs,"d_date");
  $c_date=odbc_result($rs,"c_date");
  $task=odbc_result($rs,"task");
  $picf=odbc_result($rs,"picf");
  $picr=odbc_result($rs,"picr");
  $init=odbc_result($rs,"init");
  */
  echo <<< END <table>
  <tr><th>"Job Number"</th><th>"File Name"</th><th>"Point Range"</th><th>"Download Date"</th><th>"Completion Date"</th><th>"Task"</th><th>"Pic File"</th><th>"Pic Range"</th><th>"Crew Chief Initials"</th></tr>
  <tr><td>odbc_result($rs, 1)</td></tr>
  <tr><td>odbc_result($rs,2)</td></tr></table>
  END;
  
 }
}
odbc_close($con);
?>

 

