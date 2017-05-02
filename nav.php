<div id="nav">
	<ul>
	<!-- <li><a class="active" href="#home">Home</a></li> -->
	<!-- <li><a class="home" href="#home"><img src = "HomeButton2.png" alt = "Home Button" style = "width: 35px; height: 35px;"> </li></a> -->
	<?php
		echo('<li><a href="'.$path.'">Home</a></li>');
	?>
	<li><a href="#tutorials">Tutorials</a>
		<ul class="tutorialsWidth">
			<?php
				echo('<li><a class="nav_bar_button" href="'.$path.'tutorials/tutorial1.php">1. OS Navigation</a></li>');
				echo('<li><a class="nav_bar_button" href="'.$path.'tutorials/tutorial2.php">2. File Manipulation</a></li>');
				echo('<li><a class="nav_bar_button" href="'.$path.'tutorials/tutorial3.php">3. File Permissions</a></li>');
				echo('<li><a class="nav_bar_button" href="'.$path.'tutorials/tutorial4.php">4. Package Manager </a></li>');
				echo('<li><a class="nav_bar_button" href="'.$path.'tutorials/index.php">More Tutorials</a></li>');	
			?>
		</ul>
	</li>
	<li><a href="#commands">Commands</a>
		<ul class="commandsWidth">
			<?php
				echo('<li><a class="nav_bar_button" id="'.$path.'commands/all.php" onclick="nav_button_clicked()" >All Commands</a></li>');
				echo('<li><a class="nav_bar_button" id="'.$path.'commands/common.php" onclick="nav_button_clicked()" >Common Commands</a></li>');
				echo('<li><a class="nav_bar_button" id="'.$path.'commands/navCommands.php" onclick="nav_button_clicked()" >Navigation Commands</a></li>');
			?>
		</ul>
	</li>
	<li><a href="#quizzes">Quizzes</a>
		<ul class="quizzesWidth	">
			<?php
				echo('<li><a class="nav_bar_button" href="'.$path.'quizzes/index.php">Q1. Navigation</a></li>');
				echo('<li><a class="nav_bar_button" href="'.$path.'quizzes/index.php">Q2. Files</a></li>');
				echo('<li><a class="nav_bar_button" href="'.$path.'quizzes/index.php">Q3. Overview</a></li>');
			?>
		</ul>
	</li>
	<?php
		echo ('<li><a href="'.$path.'resources/index.php"> Resources </a>');
	?>
		<ul class="resourcesWidth">
			<?php
				echo('<li><a class="nav_bar_button" href="'.$path.'resources/index.php#books">Books</a></li> ');
				echo('<li><a class="nav_bar_button" href="'.$path.'resources/index.php#pdfs">PDFs</a></li>');	
				echo('<li><a class="nav_bar_button" href="'.$path.'resources/index.php#websites">Links</a></li>');
				echo('<li><a class="nav_bar_button" href="'.$path.'resources/index.php#footer">Contact Us</a></li>');
			?>
		</ul>		
	</li>
	<!-- <li> -->
			<!-- <a href="#home"> -->
			<!-- <img id="search" src="searchButton.png" alt = "Search Button" style= "width: 46px; height: 46px; padding: 0 0;"> -->
		<!-- </a> -->

	<!-- </li> -->
	</ul>
</div> <!-- nav div ends here -->
<script>
	// Get the button, and when the user clicks on it, execute myFunction
	//document.getElementById("myBtn").onclick = function() {myFunction()};

	/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}
</script>











