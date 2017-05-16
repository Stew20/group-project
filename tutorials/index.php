<!DOCTYPE html>
<html lang="en">
	<?php
		$path = "../";
		include''.$path.'header.php';
	?>
	<head>
	<title>Command</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>

	<body>
		<div class = "background" style ="height: 10em;">
			<div style="text-align: center;" >
	 	      <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" style="top:39px;">
		   </div>
		</div>

	<?php
		include''.$path.'nav.php';
	?>

	<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>

    <div id="page">
        <div class="border1">
            <div class="box1">
                <h1> Tutorials </h1>

                <ul>
                    <li> <a href="tutorial1.php"> 1. OS Navigation </a> </li>
                    <li> <a href="tutorial2.php"> 2. File Manipulation </a></li>
                    <li> <a href="tutorial3.php"> 3. File Permissions </a></li>
                    <li> <a href="tutorial4.php"> 4. Package Manager </a></li>
                    <li> <a href="tutorial5.php"> 5. Using Sudo </a></li>
                    <li> <a href="tutorial6.php"> 6. Services </a></li>
					<li> <a href="tutorial7.php"> 7. Setting up a webserver</a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
		include'../footer.php';
	?>
</body>
</html>
