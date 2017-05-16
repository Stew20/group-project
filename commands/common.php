<?php
session_start();
$_SESSION["sidenav"] = "home";
?>
<!DOCTYPE html>
<html lang="en">
	<?php
		$path = "../";
		include $path.'header.php';
	?>
	<title>Stew20 common commands</title>
	</head>
	<body>
		<div class = "background" style ="height: 10em;">
			<div style="text-align: center;" >
	 	      <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" style="top:39px;">
		   </div>
		</div>

	<?php
		include '../nav.php';
	?>

		<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>

		<h1> Common Commands </h1>
			<div class="border1">
					<div class="box1">

							<h2>Directory Commands</h2>
							<table>
  								<tr>
    								<th>Command</th>
    								<th>Description</th>
  								</tr>

  								<tr>
    								<td><a href="cd.php"> cd </a></td>
    								<td>"Change Directory". Changes the current working directory in the command line</td>
  								</tr>

  								<tr>
    								<td> <a href="ls.php"> ls </a></td>
    								<td>“List”. This is used for listing the contents of a directory as well as properties of files and folder. It can be used with arguments to provide details such as location, permissions, and creation and access dates.</td>

  								</tr>

  								<tr>
    								<td> <a href="pwd.php"> pwd </a></td>
    								<td>“Print Working Directory”. Prints out the current working directory to the terminal</td>
  								</tr>

  								<tr>
                                    <td><a href="mkdir.php"> mkdir</a> </td>
    								<td>"Make a Directory". Create a new, empty directory at the given point in the hierarchy</td>
  								</tr>

  								<tr>
  									<td><a href="rm.php"> rmdir </a></td>
  									<td>"Remove a Directory". Removes the empty directory</td>
  								</tr>
  							</table>
  							</div>
							</div>


							<div class="border1">
							<div class="box1">
							<h2>File Commands</h2>
							<table>
  								<tr>
    								<th>Command</th>
    								<th>Description</th>
  								</tr>

 								<tr>
  									<td><a href="touch.php"> touch </a></td>
  									<td>Create an empty file or updates modifican/access date.</td>
  								</tr>


 								<tr>
  									<td>mv</td>
  									<td>"Moves". Move or rename the file.</td>
  								</tr>

  								<tr>
  									<td><a href="rm.php"> rm </a></td>
  									<td>"Remove". Deletes the file.</td>
  								</tr>

    							<tr>
  									<td><a href="cp.php"> cp </a></td>
  									<td>"Copy". Copy the file to another file.</td>
  								</tr>

								<tr>
  									<td><a href="chmod"> chmod</a> </td>
  									<td>"Change Mode". Change File/Directory Permissions.</td>
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
