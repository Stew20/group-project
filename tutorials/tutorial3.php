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


	<h1>Unix - File Permissions</h1>
	<div class="border1">
	<div class="box1">

	<p style="color:#33334d;font-size:25px;">Permission are assigned to files in three categories:</p>
	• Owner- The username to which the file belong.<br>
	• Group - Who is a member of the group that a file belong to, can perform on the file.<br>
	• Others - Everyone else on the system.


	<p style="color:#33334d;font-size:25px;">Permissions for each of these categories:</p>
	• r(read)- Username can read the contents.<br>
	• w(write)- Username can add or delete contents.<br>
	• x(execute)- Can execute the file.


	<h2>Changing Permissions</h2>
	<div class = "commBorder">
	<p>Chmod</p>
	</div>
	<p>
	To alter the file of the directory permissions, use the chmod command. Permission changes specified numerically or symbolically.
	</p>

	<h2>Permissions Table</h2>
	<p style="color:#33334d;font-size:22px;">Symbolic Mode</p>
		<div id="commTable">
	<table>
  		<tr>
    		<th>Symbolic</th>
    		<th> Description</th>
  		</tr>

  		<tr>
    		<td>+</td>
    		<td>Adds the permission to a file or directory.</td>
  		</tr>

  		<tr>
    		<td>-</td>
    		<td>Delete the permission to a file or directory.</td>
  		</tr>

		<tr>
			<td>=</td>
			<td>Sets the permission.</td>
 	 	</tr>

	</table>
		</div>

	<p style="color:#33334d;font-size:22px;padding-top:35px;">Numerical Mode</p>
	<div id="commTable">
	<table>
  		<tr>
    		<th>Number</th>
    		<th>Description</th>
    		<th>Ref</th>
  		</tr>

  		<tr>
    		<td>0</td>
    		<td>No Permission</td>
    		<td>--</td>
  		</tr>

  		<tr>
    		<td>1 </td>
    		<td>Execute Permission</td>
    		<td>--x</td>
  		</tr>

		<tr>
			<td>2</td>
			<td>Write Permission</td>
			<td>-w-</td>
 	 	</tr>

 	 	<tr>
			<td>3</td>
			<td>Execute and write Permission</td>
			<td>-wx</td>
 	 	</tr>

 		<tr>
			<td>4</td>
			<td>Read Permission</td>
			<td>r--</td>
 	 	</tr>

 	 	<tr>
			<td>5</td>
			<td>Read and execute permission</td>
			<td>r-x</td>
 	 	</tr>

 	 	<tr>
			<td>6</td>
			<td>Read and write permission</td>
			<td>rw-</td>
 	 	</tr>


 	 	 <tr>
			<td>7</td>
			<td>All permissions</td>
			<td>rwx</td>
 	 	</tr>
	</table>
		 </div>

	<div class="textColor">
	<p>
	Following is Output Example:
	</p>
	</div>
	<div class="ridge">
	<?php echo('<img id="Img" src="'.$path.'assets/images/ScreenShot6.png" style="width:45vw;height:300px;">'); ?>
			    </div>

				<div id="backgrd" class="backColor">
				  	<span class="close">&times;</span>
				  	<img class="backColor-image" id="img1">
				  	<div id="caption"></div>
	</div>
	<hr>

	<h2>Group Owner</h2>
	<div class = "commBorder">
	<p>Chgrp</p>
	</div>
	<p>
	To alter the group of a file, use the chgrp command.
	</p>
	<div class="textColor">
	<p>
	Following is Output Example:
	</p>
	</div>
	<div class="ridge">
		<?php echo('<img id="Img2" src="'.$path.'assets/images/ScreenShot7.png" alt="picture" style="width:45vw;height:300px;">'); ?>
	</div>

	<div id="backgrd2" class="backColor">
	<span class="close">&times;</span>
	<img class="backColor-image" id="img22">
	<div id="caption2"></div>
	</div>
	<hr>


	<h2>Change User Ownership</h2>
	<div class = "commBorder">

	<p>Chown</p>
	</div>
	<p>
	The chown command changes the ownership of file.
	</p>
	<div class="textColor">
	<p>
	Following is Output Example:
	</p>
	</div>
	<div class="ridge">
		<?php echo('<img id="Img3" src="'.$path.'assets/images/ScreenShot8.png" alt="picture" style="width:45vw;height:300px;">'); ?>
	</div>

	<div id="backgrd3" class="backColor">
	<span class="close">&times;</span>
	<img class="backColor-image" id="img33">
	<div id="caption3"></div>
	</div>

				<script>
					// Get the background modal
					var modal = document.getElementById('backgrd');
					// Get the image and insert it inside the modal
					var img = document.getElementById('Img');
					var img1 = document.getElementById("img1");
					var captionText = document.getElementById("caption");
					img.onclick = function(){
					modal.style.display = "block";
					img1.src = this.src;
					captionText.innerHTML = this.alt;
					}
					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];
					//close the modal
					span.onclick = function() {
					modal.style.display = "none";
					}
					// Get the background modal
					var modal = document.getElementById('backgrd2');
					// Get the image and insert it inside the modal
					var img = document.getElementById('Img2');
					var img1 = document.getElementById("img22");
					var captionText = document.getElementById("caption2");
					img.onclick = function(){
					modal.style.display = "block";
					img1.src = this.src;
					captionText.innerHTML = this.alt;
					}
					//closes the modal
					var span = document.getElementsByClassName("close")[1];
					//close the modal
					span.onclick = function() {
					modal.style.display = "none";
					}
					// Get the background modal
					var modal = document.getElementById('backgrd3');
					// Get the image and insert it inside the modal
					var img = document.getElementById('Img3');
					var img1 = document.getElementById("img33");
					var captionText = document.getElementById("caption3");
					img.onclick = function(){
					modal.style.display = "block";
					img1.src = this.src;
					captionText.innerHTML = this.alt;
					}
					//closes the modal
					var span = document.getElementsByClassName("close")[2];
					//close the modal
					span.onclick = function() {
					modal.style.display = "none";
					}


			</script>
				<hr>
	<h2>Summary</h2>
	<div id="commTable">
	<table>
  		<tr>
    		<th>Command</th>
    		<th>Function</th>
  		</tr>

  		<tr>
    		<td>chmod</td>
    		<td>to change the permissions of a specified file or directory</td>
  		</tr>

  		<tr>
    		<td>chgrp</td>
    		<td>changes the group of the file or directory specified by the File or Directory </td>
  		</tr>

		<tr>
			<td>chown</td>
			<td>Change the owner and group of files</td>
 	 	</tr>

		</table>
		 </div>


		</div>

		</div>





		<div id="push"> </div>
		<?php
			include $path."footer.php";
		?>

	</body>
</html>
