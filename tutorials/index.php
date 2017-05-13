<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
	<?php
        $path = "../";
		include'../header.php';
	?>

<body>
    <div class = "background">
       <div class="imgContainer" >
          <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" >
       </div>
    </div>

	<?php
		include $path.'nav.php';
	?>

	<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>

    <div id="page">
        <div class="border1">
            <div class="box1">
                <h1> Other Tutorials </h1>
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
        ?>
            </div>
        </div>
    </div>

    <?php
		include'../footer.php';
	?>
</body>
</html>
