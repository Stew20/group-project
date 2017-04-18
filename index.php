<?php
session_start();
$_SESSION["sidenav"] = "home";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
	<?php
		include'header.php';
		include'nav.php';
	?>
	<body>
	<body>
		<div class="tran">
 	      <img src="assets/images/code3.jpg" alt="picture" style="width:100vw;height:400px;">
	    </div>
	
        <div id="nav">
            <ul>
                <!-- <li><a class="active" href="#home">Home</a></li> -->
                <!-- <li><a class="home" href="#home"><img src = "HomeButton2.png" alt = "Home Button" style = "width: 35px; height: 35px;"> </li></a> -->
                <li><a href="#home">Home</a></li>
                <li><a href="#tutorials">Tutorials</a>
                    <ul>
                        <li><a href="#tutorial1">1. OS Navigation</a></li>
                        <li><a href="#tutorial2">2. File Manipulation</a></li>
                        <li><a href="#tutorial3">3. Filer Permissions</a></li>
                        <li><a href="#tutorial4">4. Overview</a></li>
                        <li><a href="#tutorial5">More Tutorials</a></li>	
                    </ul>
                </li>
                <li><a href="#commands">Commands</a>
                    <ul>
                        <li><a href="#command1">All Commands</a></li>
                        <li><a href="#command2">Common Commands</a></li>
                        <li><a href="#command3">Navigation Commands</a></li>	
                    </ul>
                </li>
                <li><a href="#quizzes">Quizzes</a>
                    <ul>
                        <li><a href="#quiz1">Q1. Navigation</a></li>
                        <li><a href="#quiz2">Q2. Files</a></li>
                        <li><a href="#quiz3">Q3. Overview</a></li>	
                    </ul>
                </li>
                <li><a href="resources.php">Resources</a>
                    <ul>
                        <li><a href="#Recource1">Books</a></li>
                        <li><a href="#Recource2">PDF's</a></li>
                        <li><a href="#Recource3">Links</a></li>
                        <li><a href="#Recource4">Contact Us</a></li>	
                    </ul>		
                </li>
                <!-- <li> <a class="search"> </li> -->
            </ul>
        </div> <!-- nav div ends here -->

	
	

 	    <div id="page">
			<div class="border1">
				<h1> Introduction </h1>
					<div class="box1">
						<p> Welcome! If you’re reading this, then you want to learn more about Unix and its applications. 
						Lucky for you, whether you’re a total beginner, a student wanting to “check yourself before you wreck yourself” (as the kids would say) 
						because of an exam coming up, or you’re rather comfortable with Unix and you forgot that one command so you need a quick refresher on it, we’ve got you covered! 
						We can’t turn you from a zero to a hero in Unix, but we are giving you the tools to do that yourself. </p>


						<p> Some of the tools provided on this site include, but is not limited to: </p>
						<ul>
							<li> * A large repository of every relevant Unix command </li>
							<li> * Step-by-step tutorials on several applications of Unix (including videos!) </li>
							<li> * Quizzes on the several applications of Unix </li>
						</ul>
					</div>
			</div>
            <div class="border1">
                <h1>What is Unix</h1>
                    <div class="box1">
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer in lectus sit aliquam, parturient eros, ut semper montes habitant, dolor nisl lorem leo, elit ipsum volutpat euismod lorem morbi mattis. Est temporibus vel gravida nulla pellentesque. Sit eleifend orci lacus nunc metus. Habitasse eget vel, nam risus tristique ac dolor. Luctus felis aenean proin et, dolor vestibulum habitasse aenean libero, neque mi mattis integer. Quisque placerat litora sit lectus, fames praesent et lobortis, nulla cras at rutrum neque risus, dui neque pellentesque accumsan. A accumsan vulputate maecenas sapien eros, laoreet quam nulla turpis, dolores ipsum arcu sodales dignissimos, sodales posuere luctus sed.
                        </p>
                    </div>
            </div>

            <div class="border1">
                <h1>History of Unix</h1>
                    <div class="box1">
                        <p>
                            Justo orci facilisi vehicula eget, nulla a rhoncus eu, erat morbi nec maecenas vitae morbi fermentum, vel fusce vestibulum, turpis aliquet vel dolor. Ullamcorper pretium eu in, vehicula fusce vitae ipsum blandit. Pulvinar in donec pellentesque sapien felis pulvinar, nec elit vitae ullamcorper dignissim, enim nam ornare orci sapien quisque risus, sit vel vestibulum pretium mauris. Metus sodales phasellus cras eu fusce, at maecenas id deserunt tempor eleifend justo. Tellus non, quis egestas velit, consequat justo et erat phasellus. Viverra sollicitudin ligula lectus faucibus, pellentesque tortor proin, lacus pretium vivamus platea a, porta lacus ipsum. Dictum sed est aliquet ut arcu fermentum, odio arcu per aptent, ac morbi vitae felis.	
                        </p>
                    </div>
            </div>
            <div id="push"> </div>
        </div> 

	


	<?php
		include'footer.php';
	?>
	</body>
</html>
