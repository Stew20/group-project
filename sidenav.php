<?php
//pull session variable
$section = $_SESSION["sidenav"];

// use session variable sidenav to do stuff

if($section = "home")
{
/* Home */
//intentionally left blank
}
else
{
	echo "<ul>";
	/* tutorials, commands, quizzes, reources */
	$section_table = "sidenav_".$section;
	$sql = "select nav_index,selected from '". $section_table ."'";
	$result = $conn->query($sql);
	if($result->num_rows > 0){
		while($row=$result->FETCH_ASSOC()){
			if($row['selected'] == 1){
				echo '<li class="selected_sidenav">';
				echo $row['nav_index'];
				// need to add something here in the li for an href so that it auto links to the page it needs to go to, probably additional field in DB
			}
			else{
				echo "<li>";
				echo $row['nav_index'];
				// need to add something here in the li for an href so that it auto links to the page it needs to go to, probably additional field in DB
			}
			echo "</li>";
		}
	}
	else{
		echo "0 results, you did something bad";
	}
}
?>