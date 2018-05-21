<?php 
header("Content-Type:application/json");
require "databaseconfig.php";

$sql = "SELECT * from photostory";
mysqli_set_charset($conn, "utf8");
$result = mysqli_query($conn, $sql);
if(!$result){
	$data["message"] = "Can't query data".mysqli_error($conn);
	$data["result"] = false;
} else {
	if (mysqli_num_rows($result) > 0) {
	    while($row = mysqli_fetch_assoc($result)) {
	       $json[] = $row;
	    }
	    $data["image"] = $json;
	    $data["result"] = true;  
	} else {
		$data["message"] = "0 image";
		$data["result"] = false;
	}
}
$data["image"] = $json;

mysqli_close($conn);
echo json_encode($data); 
?>