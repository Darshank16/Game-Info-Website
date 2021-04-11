<?php
header("Content-Type: application/json; charset=UTF-8");
require_once 'connection.php';
$search=$_POST["search"];
$sql = "SELECT * FROM gameinfo WHERE gtitle LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $outp = $result->fetch_all(MYSQLI_ASSOC);
  $gameData=array();
  foreach ($outp as $key => $value) {
  	$gameData[$key]["gameid"]=$value["gameid"];
  	$gameData[$key]["gtitle"]=$value["gtitle"];
  	$gameData[$key]["thumbnail"]=$value["thumbnail"];

  }
  echo $jsonformat=json_encode($gameData);
 
} else {
  echo "0";
}
?>