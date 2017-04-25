<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
	<?php
		include'../header.php';
	?>
	<body>
	<?php
      include "../php_connection.php";
      $sql = "select nav_index from 'sidenav_quizzes'";
      $result = $conn->query($sql);
      if($result->num_rows > 0){
         while($row=$result->FETCH_ASSOC()){
            echo "<li>";
            echo $row['nav_index'];
            echo "</li>";
         }
      }
      else{
         echo "0 results, you did something bad";
      }
		include'../footer.php';
	?>
	</body>
</html>
