<!DOCTYPE html>
<html lang="en">
<?php
	$path = "../";
	include $path."header.php";
?>
	<title>Stew20 Navigation Commands</title>
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

	<h1>Unix commands </h1>

	<div class="border1">
		<div class="box1">

		<!--  Category command-->
		<h2>Navigation Commands</h2>
		<table>
			<tr>
				<th>Command</th>
				<th>Description</th>
			</tr>
			<tr>
				<td><a href="cd.php"> cd </a></td>
				<td>“Change Directory”. Changes the current working directory in the command line</td>
			</tr>
			<tr>
				<td> <a href="ls.php"> ls </a> </td>
				<td>“List”. This is used for listing the contents of a directory as well as properties of files
				and folder. It can be used with arguments to provide details such as location, permissions, and
				creation and access dates.</td>
			</tr>
			<tr>
				<td><a href="pwd.php"> pwd </a></td>
				<td>“Print Working Directory”. Prints out the current working directory to the terminal.</td>

			</tr>
			<tr>
				<td>cat</td>
				<td>Prints out the content of a file to the command line without opening the file</td>
		  </tr>

		</table>
		</div>
	</div>

	<div id="push"> </div>






	<?php
		include $path."footer.php";
	?>
	</body>
</html>
