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

				<div class="ridge">
					<?php echo('<img id="Img" src="'.$path.'assets/images/ScreenShot.png" style="width:45vw;height:300px;">'); ?>
			    </div>

				<div id="backgrd" class="backColor">
				  	<span class="close">&times;</span>
				  	<img class="backColor-image" id="img1">
				  	<div id="caption"></div>
				</div>


				<p>
					For a more detailed description of folder contents, flags such as -l can be used. -l gives a “Long” listing of details, including permissions, ownership, creator, modification date, and name.
				</p>
				<div class="textColor">
					<p>
						Following is Output Example:
					</p>
				</div>

				<div class="ridge">
					<?php echo('<img id="Img2" src="'.$path.'assets/images/ScreenShot2.png" alt="picture" style="width:45vw;height:300px;">'); ?>
				</div>

				<div id="backgrd2" class="backColor">
				<span class="close">&times;</span>
				<img class="backColor-image" id="img22">
				<div id="caption2"></div>
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
				<div class="ridge">
					<?php echo('<img id="Img3" src="'.$path.'assets/images/ScreenShot3.png" alt="picture" style="width:45vw;height:300px;">'); ?>
				</div>

				<div id="backgrd3" class="backColor">
				<span class="close">&times;</span>
				<img class="backColor-image" id="img33">
				<div id="caption3"></div>
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
					<?php echo('<img id="Img4" src="'.$path.'assets/images/ScreenShot4.png" alt="picture" style="width:45vw;height:300px;">'); ?>
				</div>

				<div id="backgrd4" class="backColor">
				<span class="close">&times;</span>
				<img class="backColor-image" id="img44">
				<div id="caption4"></div>
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

				<div class="ridge">
					<?php echo('<img id="Img5" src="'.$path.'assets/images/ScreenShot5.png" alt="picture" style="width:45vw;height:300px;">'); ?>
				</div>
		 		<div id="backgrd5" class="backColor">
  				<span class="close">&times;</span>
  				<img class="backColor-image" id="img55">
  				<div id="caption5"></div>
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
					// Get the background modal
					var modal = document.getElementById('backgrd4');
					// Get the image and insert it inside the modal
					var img = document.getElementById('Img4');
					var img1 = document.getElementById("img44");
					var captionText = document.getElementById("caption4");
					img.onclick = function(){
					modal.style.display = "block";
					img1.src = this.src;
					captionText.innerHTML = this.alt;
					}
					// closes the modal
					var span = document.getElementsByClassName("close")[3];	
					//close the modal
					span.onclick = function() { 
					modal.style.display = "none";
					}	
					// Get the background modal
					var modal = document.getElementById('backgrd5');
					// Get the image and insert it inside the modal
					var img = document.getElementById('Img5');
					var img1 = document.getElementById("img55");
					var captionText = document.getElementById("caption5");
					img.onclick = function(){
					modal.style.display = "block";
					img1.src = this.src;
					captionText.innerHTML = this.alt;
					}
					// closes the modal
					var span = document.getElementsByClassName("close")[4];
					span.onclick = function() { 
					modal.style.display = "none";
					}
				</script>

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