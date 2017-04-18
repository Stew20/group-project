<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
	<div id="nav">
		<ul>
			<!-- <li><a class="active" href="#home">Home</a></li> -->
			<!-- <li><a class="home" href="#home"><img src = "HomeButton2.png" alt = "Home Button" style = "width: 35px; height: 35px;"> </li></a> -->
			<li><a href="#home">Home</a></li>
			<li><a href="#tutorials">Tutorials</a>
				<ul class="tutorialsWidth">
					<li><a href="#tutorial1">1. OS Navigation</a></li>
					<li><a href="#tutorial2">2. File Manipulation</a></li>
					<li><a href="#tutorial3">3. File Permissions</a></li>
					<li><a href="#tutorial4">4. Overview</a></li>
					<li><a href="#tutorial5">More Tutorials</a></li>	
				</ul>
			</li>
			<li><a href="#commands">Commands</a>
				<ul class="commandsWidth">
					<li><a href="#command1">All Commands</a></li>
					<li><a href="#command2">Common Commands</a></li>
					<li><a href="#command3">Navigation Commands</a></li>	
				</ul>
			</li>
			<li><a href="#quizzes">Quizzes</a>
				<ul class="quizzesWidth	">
					<li><a href="#quiz1">Q1. Navigation</a></li>
					<li><a href="#quiz2">Q2. Files</a></li>
					<li><a href="#quiz3">Q3. Overview</a></li>	
				</ul>
			</li>
			<li><a href="resources.php">Resources</a>
				<ul class="resourcesWidth">
					<li><a href="resources.php/#Books">Books</a></li>
					<li><a href="resources.php/#PDf's">PDFs</a></li>
					<li><a href="resources.php/#websites">Links</a></li>
					<li><a href="#Recource4">Contact Us</a></li>	
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
		document.getElementById("myBtn").onclick = function() {myFunction()};

		/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
		function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
		}
	</script>

</body>
</html>











