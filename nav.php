<div id="nav">
	<ul>
	<!-- <li><a class="active" href="#home">Home</a></li> -->
	<!-- <li><a class="home" href="#home"><img src = "HomeButton2.png" alt = "Home Button" style = "width: 35px; height: 35px;"> </li></a> -->
	<?php
		echo('<li><a class="nav_bar_button" sqlid="home" id="'.$path.'index.php" onclick="nav_button_clicked(this)>Home</a></li>');
	?>
	<li><a href="#tutorials">Tutorials</a>
		<ul class="tutorialsWidth">
			<?php
				echo('<li><a class="nav_bar_button" sqlid="tutorials" id="'.$path.'tutorials/tutorial1.php" onclick="nav_button_clicked(this)>1. OS Navigation</a></li>');
				echo('<li><a class="nav_bar_button" sqlid="tutorials" id="'.$path.'tutorials/tutorial2.php" onclick="nav_button_clicked(this)>2. File Manipulation</a></li>');
				echo('<li><a class="nav_bar_button" sqlid="tutorials" id="'.$path.'tutorials/tutorial3.php" onclick="nav_button_clicked(this)>3. File Permissions</a></li>');
				echo('<li><a class="nav_bar_button" sqlid="tutorials" id="'.$path.'tutorials/tutorial4.php" onclick="nav_button_clicked(this)>4. Package Manager </a></li>');
				echo('<li><a class="nav_bar_button" sqlid="tutorials" id="'.$path.'tutorials/index.php"     onclick="nav_button_clicked(this)>More Tutorials</a></li>');	
			?>
		</ul>
	</li>
	<li><a href="#commands">Commands</a>
		<ul class="commandsWidth">
			<?php
				echo('<li><a class="nav_bar_button" sqlid="commands" id="'.$path.'commands/index.php"       onclick="nav_button_clicked(this)" >All Commands</a></li>');
				echo('<li><a class="nav_bar_button" sqlid="commands" id="'.$path.'commands/common.php"      onclick="nav_button_clicked(this)" >Common Commands</a></li>');
				echo('<li><a class="nav_bar_button" sqlid="commands" id="'.$path.'commands/navCommands.php" onclick="nav_button_clicked(this)" >Navigation Commands</a></li>');
			?>
		</ul>
	</li>
	<li><a href="#quizzes">Quizzes</a>
		<ul class="quizzesWidth	">
			<?php
				echo('<li><a class="nav_bar_button" sqlid="quizzes" id="'.$path.'quizzes/index.php" onclick="nav_button_clicked(this)>Q1. Navigation</a></li>');
				echo('<li><a class="nav_bar_button" sqlid="quizzes" id="'.$path.'quizzes/index.php" onclick="nav_button_clicked(this)>Q2. Files</a></li>');
				echo('<li><a class="nav_bar_button" sqlid="quizzes" id="'.$path.'quizzes/index.php" onclick="nav_button_clicked(this)>Q3. Overview</a></li>');
			?>
		</ul>
	</li>
	<?php
		echo ('<li><a href="'.$path.'resources/index.php"> Resources </a>');
	?>
		<ul class="resourcesWidth">
			<?php
				echo('<li><a class="nav_bar_button" sqlid="resources" id="'.$path.'resources/index.php#books"    onclick="nav_button_clicked(this)>Books</a></li> ');
				echo('<li><a class="nav_bar_button" sqlid="resources" id="'.$path.'resources/index.php#pdfs"     onclick="nav_button_clicked(this)>PDFs</a></li>');	
				echo('<li><a class="nav_bar_button" sqlid="resources" id="'.$path.'resources/index.php#websites" onclick="nav_button_clicked(this)>Links</a></li>');
				echo('<li><a class="nav_bar_button" sqlid="resources" id="'.$path.'resources/index.php#footer"   onclick="nav_button_clicked(this)>Contact Us</a></li>');
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











