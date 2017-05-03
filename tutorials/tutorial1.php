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
	<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>
		
		
	<h1>Unix - OS navigation</h1>
	<div class="border1">
	<div class="box1">
	<h2>List</h2>
	<div class = "commBorder">
	<p>ls</p>
	</div>
	<p>
	The ls command is used for listing the contents of a directory, and can be used to show the properties and permissions of files and folders inside the parent. 
	</p>
	
	<p>
	Typing “ls” in the terminal will print out all files and folders in the parent folder.
	</p>
	<div class="textColor">
	<p>
	Following is Output Example:
	</p>
	</div>
	<div class="shadow">
	<?php echo('<img src="'.$path.'assets/images/ScreenShot.png" alt="picture" style="width:45vw;height:300px;">'); ?>
	</div>
	<p>
	For a more detailed description of folder contents, flags such as -l can be used. -l gives a “Long” listing of details, including permissions, ownership, creator, modification date, and name.
	</p>
	<div class="textColor">
	<p>
	Following is Output Example:
	</p>
	</div>
	<div class="shadow">
	<?php echo('<img src="'.$path.'assets/images/ScreenShot2.png" alt="picture" style="width:45vw;height:300px;">'); ?>
	</div>
	
	<hr>
	
	<h2>Change Directory</h2>
	<div class = "commBorder">
	<p>cd</p>
	</div>
	<p>
	cd is used to change the current working directory. A working directory is where the user 
	is currently working from the command line. 
	</p>
	<div class="textColor">
	<p>
	Following is Output Example:
	</p>
	</div>
	<div class="shadow">
	<?php echo('<img src="'.$path.'assets/images/ScreenShot3.png" alt="picture" style="width:45vw;height:300px;">'); ?>
	</div>
	
	<p>
	cd followed by two periods ( .. ) is used to navigate up one folder to the parent folder. 
	</p>
	<div class="textColor">
	<p>
	Following is Output Example:
	</p>
	</div>
	<div class="shadow">
	<?php echo('<img src="'.$path.'assets/images/ScreenShot4.png" alt="picture" style="width:45vw;height:300px;">'); ?>
	</div>
	
	<hr>
	
	
	<h2>Print Working Directory</h2>
	<div class = "commBorder">
	<p>pwd</p>
	</div>
	<p>
	pwd does exactly what it says. It will print out the current working directory of the user to the terminal. This is helpful when navigating through a deep directory structure with many similarly named folders.
	</p>
	<p>
	pwd is one of the few main Unix commands that is used by itself, without any options. 
	</p>
	<div class="textColor">
	<p>
	Following is Output Example:
	</p>
	</div>
	<div class="shadow">
	<?php echo('<img src="'.$path.'assets/images/ScreenShot5.png" alt="picture" style="width:45vw;height:300px;">'); ?>
	</div>
	
	
	
	<h2>Summary</h2>
	<div id="commTable">
	<table>
  		<tr>
    		<th>Command</th>
    		<th>Function</th>
  		</tr>
  
  		<tr>
    		<td>ls</td>
    		<td>List Directories and Files</td>
  		</tr>
  
  		<tr>
    		<td>cd </td>
    		<td>change to the Directory</td>
  		</tr>
		
		<tr>
			<td>pwd</td>
			<td>Display the current working Directory</td>
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
	
