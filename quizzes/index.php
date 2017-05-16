<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <title> Stew20 - Quizzes </title>
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
                <h1> Quizzes </h1>
                
                <ul>
                    <li> <a href="quiz1.php"> Quiz 1 </a> </li>
                    <li> <a href="quiz2.php"> Quiz 2 </a></li>
                    <li> <a href="quiz3.php"> Quiz 3 </a></li>
                </ul>            
            </div>
        </div>
    </div>
    
    <?php
		include'../footer.php';
	?>
	</body>
</html>
