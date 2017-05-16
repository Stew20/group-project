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
                
                <ul>
                    <li> <a href="quiz1.php"> Quiz 1 </a> </li>
                    <li> <a href="quiz2.php"> Quiz 2 </a></li>
                    <li> <a href="quiz3.php"> Quiz 3 </a></li>
					<li> <a href="quiz4.php"> Quiz 4 </a></li>
					<li> <a href="quiz5.php"> Quiz 5 </a></li>
					<li> <a href="quiz6.php"> Quiz 6 </a></li>
					<li> <a href="quiz7.php"> Quiz 7 </a></li>
					<li> <a href="quiz8.php"> Quiz 8 </a></li>
					<li> <a href="quiz9.php"> Quiz 9 </a></li>
                </ul>            
            </div>
        </div>
    </div>
    
    <?php
		include'../footer.php';
	?>
	</body>
</html>
