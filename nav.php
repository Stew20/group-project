<div id="nav">
	<li id="getStarted" style="width: 175px; height: 39px; top: -10px;"><a style=" top: -15px; padding-top:7px; "sqlid="gs" id="gs/index.php" onclick="nav_button_clicked(this)" >Getting Started</a></li>
	<ul id="nav-inner">
	<!-- <li><a class="active" href="#home">Home</a></li> -->
	<!-- <li><a class="home" href="#home"><img src = "HomeButton2.png" alt = "Home Button" style = "width: 35px; height: 35px;"> </li></a> -->
	<li><a class="nav_bar_button" sqlid="home" id="index.php" onclick="nav_button_clicked(this)" >Home</a></li>
    <li><a class="nav_bar_button" sqlid="gs" id="gs/index.php" onclick="nav_button_clicked(this)" >Getting Started</a></li>
	<li><a class="nav_bar_button" sqlid="tutorials" id="tutorials/index.php" onclick="nav_button_clicked(this)" >Tutorials</a>
		<ul class="tutorialsWidth">
				<li><a class="nav_bar_button" sqlid="tutorials" id="tutorials/tutorial1.php" onclick="nav_button_clicked(this)" >1. OS Navigation</a></li>
				<li><a class="nav_bar_button" sqlid="tutorials" id="tutorials/tutorial2.php" onclick="nav_button_clicked(this)" >2. File Manipulation</a></li>
				<li><a class="nav_bar_button" sqlid="tutorials" id="tutorials/tutorial3.php" onclick="nav_button_clicked(this)" >3. File Permissions</a></li>
				<li><a class="nav_bar_button" sqlid="tutorials" id="tutorials/tutorial4.php" onclick="nav_button_clicked(this)" >4. Package Manager </a></li>
				<li><a class="nav_bar_button" sqlid="tutorials" id="tutorials/index.php"     onclick="nav_button_clicked(this)" >More Tutorials</a></li>
		</ul>
	</li>
	<li><a class="nav_bar_button" sqlid="commands" id="commands/index.php" onclick="nav_button_clicked(this)" >Commands</a><!--');-->
		<ul class="commandsWidth">
				<li><a class="nav_bar_button" sqlid="commands" id="commands/index.php"       onclick="nav_button_clicked(this)" >All Commands</a></li>
				<li><a class="nav_bar_button" sqlid="commands" id="commands/common.php"      onclick="nav_button_clicked(this)" >Common Commands</a></li>
				<li><a class="nav_bar_button" sqlid="commands" id="commands/navigation.php" onclick="nav_button_clicked(this)" >Navigation Commands</a></li>
		</ul>
	</li>
	<li><a class="nav_bar_button" sqlid="quizzes" id="quizzes/index.php" onclick="nav_button_clicked(this)" >Quizzes</a>
		<ul class="quizzesWidth	">
				<li><a class="nav_bar_button" sqlid="quizzes" id="quizzes/quiz1.php" onclick="nav_button_clicked(this)" >Q1. Navigation</a></li>
				<li><a class="nav_bar_button" sqlid="quizzes" id="quizzes/quiz2.php" onclick="nav_button_clicked(this)" >Q2. File Manipulation</a></li>
				<li><a class="nav_bar_button" sqlid="quizzes" id="quizzes/quiz3.php" onclick="nav_button_clicked(this)" >Q3. File Permissions</a></li>
				<li><a class="nav_bar_button" sqlid="quizzes" id="quizzes/quiz4.php" onclick="nav_button_clicked(this)" >Q4. Package Manager</a></li>
				<li><a class="nav_bar_button" sqlid="quizzes" id="quizzes/index.php" onclick="nav_button_clicked(this)" >More Quizzes</a></li>
		</ul>
	</li>
	<li><a class="nav_bar_button" sqlid="resources" id="resources/index.php" onclick="nav_button_clicked(this)" > Resources </a>
		<ul class="resourcesWidth">
				<li><a class="nav_bar_button" sqlid="resources" id="resources/index.php#books"    onclick="nav_button_clicked(this)" >Books</a></li>
				<li><a class="nav_bar_button" sqlid="resources" id="resources/index.php#pdfs"     onclick="nav_button_clicked(this)" >PDFs</a></li>
				<li><a class="nav_bar_button" sqlid="resources" id="resources/index.php#websites" onclick="nav_button_clicked(this)" >Links</a></li>
				<li><a class="nav_bar_button" sqlid="resources" id="resources/index.php#footer"   onclick="nav_button_clicked(this)" >Contact Us</a></li>
		</ul>
	</li>
	<!-- <li> -->
			<!-- <a href="#home"> -->
			<!-- <img id="search" src="searchButton.png" alt = "Search Button" style= "width: 46px; height: 46px; padding: 0 0;"> -->
		<!-- </a> -->

	<!-- </li> -->
	</ul>

	<div class="hamburger" onclick="mobileNav(this)">
		<div class="bar1"></div>
		<div class="bar2"></div>
		<div class="bar3"></div>
	</div>
</div> <!-- nav div ends here -->
<script>
	// Get the button, and when the user clicks on it, execute myFunction
	//document.getElementById("myBtn").onclick = function() {myFunction()};

	/* myFunction toggles between adding and removing the show class, which is used to hide and show the dropdown content */
	function myFunction(){
		document.getElementById("myDropdown").classList.toggle("show");
	}
</script>
