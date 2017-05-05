<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
	<?php
		include'../header.php';
	?>
    
<body>
    <div class="tran">
 	      <?php echo('<img src="'.$path.'assets/images/code3.jpg" alt="picture" style="width:100vw;height:400px;">'); ?>
	</div>
	
	<?php
		include $path.'nav.php';
	?>
	<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>
    
	<?php
      include "../php_connection.php";
      $sql = "select nav_index from sidenav_tutorials";
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
    <?php
		include'../footer.php';
	?>
</body>
</html>
