<?php
header("Content-Type:application/json");
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "restapi";
$con = mysqli_connect($dbhost, $dbuser, $dbpass , $db) or die($con);


$query="SELECT cell_id,ROUND(COUNT(user_id),0) AS user_id2 FROM rest2"; 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$Data1['user_id2'] = $row['user_id2'];
$query1="  SELECT cell_id,ROUND((COUNT(user_id)/$Data1[user_id2] *100),2) AS user_id3 FROM rest2 
group by cell_id ";
//mesh episkepsimothta 
$result1 = mysqli_query($con, $query1);
$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);

$Data1 = array();

foreach ($result1  as $row1 )
 {
	$Data1[] = $row1;
 }
echo json_encode($Data1);
?>

