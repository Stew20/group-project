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
                    <li> <a href="quiz1.php"> OS Navigation </a> </li>
                    <li> <a href="quiz2.php"> File Manipulation </a></li>
                    <li> <a href="quiz3.php"> File Permissions </a></li>
 					<li> <a href="quiz4.php"> Package Manager </a></li>
 					<li> <a href="quiz5.php"> Using Sudo </a></li>
 					<li> <a href="quiz6.php"> Services </a></li>
 					<li> <a href="quiz7.php"> Setting up a webserver </a></li>
                </ul>            
            </div>
        </div>
    </div>
    
    <?php
		include'../footer.php';
	?>
	</body>
</html>
