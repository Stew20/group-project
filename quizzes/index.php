<!DOCTYPE html>
<html lang="en">
<?php
	$path = "../";
	include $path."header.php";
?>
	<title>Stew20 Quizzes</title>
	</head>
	<body>
		<div class = "background" style ="height: 10em;">
			<div style="text-align: center;" >
	 	      <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" style="top:39px;">
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
                    <li> <a href="quiz1.php"> Q1. OS Navigation </a> </li>
                    <li> <a href="quiz2.php"> Q2. File Manipulation </a></li>
                    <li> <a href="quiz3.php"> Q3. File Permissions </a></li>
 					<li> <a href="quiz4.php"> Q4. Package Manager </a></li>
 					<li> <a href="quiz5.php"> Q5. Using Sudo </a></li>
 					<li> <a href="quiz6.php"> Q6. Services </a></li>
 					<li> <a href="quiz7.php"> Q7. Setting up a webserver </a></li>
                </ul>
            </div>
        </div>
    </div>

    <?php
		include'../footer.php';
	?>
	</body>
</html>
