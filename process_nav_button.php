<?php
$destination = $_POST['pageTo'];
$_SESSION["sidenav"] = $destination;

include "php_connection.php";

$sql = "select id from sections where selected=1";
$result = $conn->query($sql);
if($result->num_rows > 0){
	// this loop should reselt all selected to 0 so that we can turn the proper one to =1
	while($row=$result->FETCH_ASSOC()){
		$sql2 = "update sections set selected=0 where id=". $row['id'] . "";
		$result = $conn->query($sql2);
	}
}
$sql3 = "update sections set selected=1 where section_name='" . $destination . "'";
$result = $conn->query($sql3);

$domain = "http://kelvin.ist.rit.edu/";
$dest_string = $domain . "~stew20/group-project/". $destination ."/index.php";
header($dest_string);
die();
?>