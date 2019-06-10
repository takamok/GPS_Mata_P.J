<?php
header("Content-Type: text/html; charset=UTF-8");

$db_host="211.183.34.181";
$db_user="root";
$db_passwd="apmsetup";
$db_name="gpsdata";

$Latitude = $_POST["Latitude"];
$longitude = $_POST["longitude"];
$time = $_POST["time"];

$conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
mysqli_query($conn, "set session character_set_connection=utf8;");
mysqli_query($conn, "set session character_set_results=utf8;");
mysqli_query($conn, "set session character_set_client=utf8;");
$query = "INSERT INTO gpsshare (Latitude, longitude, time) VALUES ('$Latitude', '$longitude', '$time');";
$result = mysqli_query($conn, $query);

if($result)
      echo " Result: OK";
    else
      echo " Result: Error";

mysqli_close($conn);
?>
e