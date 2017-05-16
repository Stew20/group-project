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


		<h1>Unix - File Manipulation</h1>
		<div class="border1">
			<div class="box1">
				<h2>Change Permissions</h2>
				<div class = "commBorder">
					<p>mkdir</p>
				</div>
				<p>
					The mkdir command is used to create the directory(ies) if they don't already exist
				</p>

				<p>
					A name for the directory should follow the mkdir command
				</p>

				<div class="textColor">
					<p>
						Following is Output Example:
					</p>
				</div>

				<div class="ridge">
					<?php echo('<img id="Img" src="'.$path.'assets/images/ScreenShot.png" style="width:45vw;height:300px;">'); ?>
			    </div>

				<div id="backgrd" class="backColor">
				  	<span class="close">&times;</span>
				  	<img class="backColor-image" id="img1">
				  	<div id="caption"></div>
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

					// When the user clicks on <span> (x), close the modal
					span.onclick = function() {
				    	modal.style.display = "none";
					}
				</script>


				<p>
					For a more detailed description of folder contents, flags such as -l can be used. -l gives a “Long” listing of details, including permissions, ownership, creator, modification date, and name.
				</p>
				<div class="textColor">
					<p>
						Following is Output Example:
					</p>
				</div>

				<div class="ridge">
					<?php echo('<img id="Img" src="'.$path.'assets/images/ScreenShot2.png" alt="picture" style="width:45vw;height:300px;">'); ?>
				</div>

				<div id="backgrd" class="backColor">
				  	<span class="close">&times;</span>
				  	<img class="backColor-image" id="img1">
				  	<div id="caption"></div>
				</div>

				<hr>

				<h2>Change Delete</h2>
				<div class = "commBorder">
					<p>rm</p>
				</div>
				<p>
					rm is used to delete files or directoriesrrent working directory.
				</p>

				<p>
					A name for the file should follow the rm command 
				</p>

				<div class="textColor">
					<p>
						Following is Output Example:
					</p>
				</div>
				<div class="ridge">
					<?php echo('<img id="Img" src="'.$path.'assets/images/ScreenShot3.png" alt="picture" style="width:45vw;height:300px;">'); ?>
				</div>

				<div id="backgrd" class="backColor">
				  	<span class="close">&times;</span>
				  	<img class="backColor-image" id="img1">
				  	<div id="caption"></div>
				</div>

				<p>
					cd followed by two periods ( .. ) is used to navigate up one folder to the parent folder.
				</p>
				<div class="textColor">
					<p>
						Following is Output Example:
					</p>
				</div>
				<div class="ridge">
					<?php echo('<img id="Img" src="'.$path.'assets/images/ScreenShot4.png" alt="picture" style="width:45vw;height:300px;">'); ?>
				</div>

				<div id="backgrd" class="backColor">
				  	<span class="close">&times;</span>
				  	<img class="backColor-image" id="img1">
				  	<div id="caption"></div>
				</div>
				<hr>


				<h2>Change User Ownership</h2>
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

				<div class="ridge">
					<?php echo('<img id="Img" src="'.$path.'assets/images/ScreenShot5.png" alt="picture" style="width:45vw;height:300px;">'); ?>
				</div>
				<div id="backgrd" class="backColor">
				  	<span class="close">&times;</span>
				  	<img class="backColor-image" id="img1">
				  	<div id="caption"></div>
				</div>
				<hr>

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

		<div id="push"> </div>
		<?php
			include $path."footer.php";
		?>

	</body>
</html>
