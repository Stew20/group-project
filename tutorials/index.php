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
                    <li> <a href="tutorial1.php"> 1. OS Navigation </a> </li>
                    <li> <a href="tutorial2.php"> 2. File Manipulation </a></li>
                    <li> <a href="tutorial3.php"> 3. File Permissions </a></li>
                    <li> <a href="tutorial4.php"> 4. Package Manager </a></li>
                    <li> <a href="tutorial5.php"> 5. Users and User Variables</a></li>
                    <li> <a href="tutorial6.php"> 6. Using Sudo </a></li>
                    <li> <a href="tutorial7.php"> 7. The File System </a></li>
                    <li> <a href="tutorial8.php"> 8. Daemons </a></li>
                    <li> <a href="tutorial9.php"> 9. Manual Commands </a></li>
                </ul>            
            </div>
        </div>
    </div>

    <?php
		include'../footer.php';
	?>
</body>
</html>
