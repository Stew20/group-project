<?php
	session_start();
	$destination = $_POST['pageTo'];
	$sql_dest = $_POST['sqlEntry'];
	$_SESSION["sidenav"] = $destination;
	
	include "php_connection.php";

	$sql = "select id from sections where selected=1";
	$result = $conn->query($sql);
	if($result->num_rows > 0)
	{
		while($row=$result->FETCH_ASSOC()){
			$sql2 = "update sections set selected=0 where id=". $row['id'] . "";
			$result2 = $conn->query($sql2);
			$sql3 = "update sections set selected=1 where section_name='" . $sql_dest . "'";
			$result3 = $conn->query($sql3);
			header('Location: '.$destination);
		}
	}
	else
	{
		$sql4 = "update sections set selected=1 where section_name='" . $sql_dest . "'";
		$result4 = $conn->query($sql4);
		header('Location: '.$destination);
	}
?>