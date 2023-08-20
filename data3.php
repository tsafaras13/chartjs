<?php
header("Content-Type:application/json");
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "restapi";
$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);


	$query1="SELECT cell_id,(MAX(TIME_TO_SEC(time_cellout))) AS time FROM rest2
		GROUP BY cell_id  ";
		//megistos xronos paramonhs 

$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

$Data1 = array();

foreach ($result1  as $row1 )
 {
	$Data1[] = $row1;
 }
echo json_encode($Data1);
?>

