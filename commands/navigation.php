<!DOCTYPE html>
<html lang="en">
<?php
	$path = "../";
	include $path."header.php";
?>
	<body>
		<div class = "background">
			<div class="imgContainer" >
					<img class="imgResp" src="../assets/images/banner_words.png" alt="picture">
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
				<td>cd</td>
				<td>“Change Directory”. Changes the current working directory in the command line</td>
			</tr>
			<tr>
				<td>ls</td>
				<td>“List”. This is used for listing the contents of a directory as well as properties of files 
				and folder. It can be used with arguments to provide details such as location, permissions, and 
				creation and access dates.</td>
			</tr>
			<tr>
				<td>pwd</td>
				<td>“Print Working Directory”. Prints out the current working directory to the terminal.</td>

			</tr>
			<tr>
				<td>cat</td>
				<td>Prints out the content of a file to the command line without opening the file</td>
		  </tr>

		</table>
		</div>		
	</div>


	
  
	
	
         

	<?php
		include $path."footer.php";
	?>		
	</body>
</html>