<!DOCTYPE html>
<html lang="en">
	<?php
		$path = "../";
		include''.$path.'header.php';
	?>
	<head>
	<title>Sudo</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">	
	</head>
	
	<body>
		<div class = "background" style ="height: 10em;">
			<div style="text-align: center;" >
	 	      <img class="imgResp" src="assets/images/banner_words.png" alt="picture" style="top:39px;">
		   </div>
		</div>
	<?php
		include''.$path.'nav.php';
	?>
	

	<h1>Unix - Sudo </h1>
	<div class="border1">
		<div class="box1">
			<h2>sudo</h2>
			<div class = "commBorder">
				<p>sudo</p>
			</div>
		<p>
			adding sudo before any command elevates that command to run as the root user which is the highest level admistrator on the linux system. Some commands cannot be run without being run as a root user so they
			need to have sudo added before the command to be able to run properly. If a command fails with an error that says permission denied, it probably needs to have sudo in front of it to be run. 
		<hr>
		
		<h2>Summary</h2>
		<table>
		  <tr>
			<th>Command</th>
			<th>Function</th>
		  </tr>
		  <tr>
			<td>sudo</td>
			<td>elevates the following command to be run as the root user (with administrator privileges)</td>
		  </tr>
		</table>
		
		
		
		</div>
	</div>
	
	<?php
		include''.$path.'footer.php';
	?>
        
	</body>
</html>
