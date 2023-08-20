<?php
header("Content-Type:application/json");
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "restapi";
$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);



$query1="SELECT cell_id,ROUND(AVG(TIME_TO_SEC(time_cellout)),0) AS time FROM rest2
GROUP BY cell_id  ";
//mesos xronos episkepshs

$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

$Data1 = array();

foreach ($result1  as $row1 )
 {
	$Data1[] = $row1;
 }
echo json_encode($Data1);
?>

