<?php
	session_start();
	$destination = $_POST['pageTo'];
	$_SESSION["sidenav"] = $destination;

	include "php_connection.php";

	$sql = "select id from sections where selected=1";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
	// this loop should reselt all selected to 0 so that we can turn the proper one to =1
		while($row=$result->FETCH_ASSOC()){
			$sql2 = "update sections set selected=0 where id=". $row['id'] . "";
			$result2 = $conn->query($sql2);
			if($result2->affected_rows > 0){
				$sql3 = "update sections set selected=1 where section_name='" . $destination . "'";
				$result3 = $conn->query($sql3);
				if($result3->num_rows > 0){
					header('Location: '.$destination);
				}
				else{
					echo("result3 failure");
					die();
				}
			}
			else{
				echo("result2 failure");
				die();
			}
		}
	}
	else
	{
		$sql4 = "update sections set selected=1 where section_name='" . $destination . "'";
		$result4 = $conn->query($sql4);
		if($result4->affected_rows > 0){
			header('Location: '.$destination);
		}
		else{
			echo("result4 failure");
			die();
		}
	}
?>