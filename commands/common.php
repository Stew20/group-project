<!DOCTYPE html>
<html lang="en">
<?php
	$path = "../";
	include $path."header.php";
?>	
	<body>
		<div class="tran">
 	      	<?php echo('<img src="'.$path.'assets/images/code3.jpg" alt="picture" style="width:100vw;height:400px;">'); ?>
	    </div>

	<?php
		include $path.'nav.php';
	?>
		<h1> Common Commands </h1>
 	    <div id="page">
			<div class="border1">
					<div class="box1">
						
							<h2>Directory Commands</h2>
							<table>
  								<tr>
    								<th>Command</th>
    								<th>Description</th>
  								</tr>
  								
  								<tr>
    								<td>cd</td>
    								<td>"Change Directory". Changes the current working directory in the command line</td>
  								</tr>
  								
  								<tr>
    								<td>ls</td>
    								<td>“List”. This is used for listing the contents of a directory as well as properties of files and folder. It can be used with arguments to provide details such as location, permissions, and creation and access dates.</td>

  								</tr>
  								
  								<tr>
    								<td>pwd</td>
    								<td>“Print Working Directory”. Prints out the current working directory to the terminal</td>
  								</tr>
  								
  								<tr>
    								<td>mkdir</td>
    								<td>"Make a Directory". Create a new, empty directory at the given point in the hierarchy</td>
  								</tr>
  								
  								<tr>
  									<td>rmdir</td>
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
  									<td>touch</td>
  									<td>Create an empty file or updates modifican/access date.</td>
  								</tr>
  								
  								
 								<tr>
  									<td>mv</td>
  									<td>"Moves". Move or rename the file.</td>
  								</tr> 
  								
  								<tr>
  									<td>rm</td>
  									<td>"Remove". Deletes the file.</td>
  								</tr> 
  								
    							<tr>
  									<td>cp</td>
  									<td>"Copy". Copy the file to another file.</td>
  								</tr> 
  								
								<tr>
  									<td>chmod</td>
  									<td>"Change Mode". Change File/Directory Permissions.</td>
  								</tr> 								
  							</table>
  							
					</div>
			</div>
         </div>  
   
	<?php
		include $path."footer.php";
	?>
	</body>
</html>
