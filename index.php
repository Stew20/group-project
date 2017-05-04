<?php
session_start();
$_SESSION["sidenav"] = "home";
?>
<!DOCTYPE html>
<html lang="en">
	<?php
		$path = "./";
		include $path.'header.php';
	?>
	<body>
		<div class = "background">
			<div class="imgContainer" >
	 	      <img class="imgResp" src="assets/images/banner_words.png" alt="picture">
		   </div>
		</div>

	<?php
		include 'nav.php';
	?>

		<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>

 	    <div id="page">
				<div class="border1">
					<div class="box1">
                        <h1>What is Unix</h1>
                        <p>
                            The story of Unix began in 1969 when Bell Laboratories resigned themselves from working on a time-sharing operating system called Multics with MIT and General Electric. The head researchers of Bell Laboratories, Ken Thompson and Dennis Ritchie, loved the idea of Multics but hated the execution of creating it, so they took the task of developing it into their own hands. The result was a hierarchical file system with a command-line interpreter that came to be known as Unix. From then on, Unix kept growing. By the 1980’s Unix was seen as a viable all-purpose operating system since in total it was less than 20,000 lines of code and it could run on almost every machine available. In the 1980’s Dennis Ritchie said the vision he and Ken Thompson had for Unix:

                            “What we wanted to preserve was not just a good environment in which to do programming, but a system around which a fellowship could form. We knew from experience that the essence of communal computing, as supplied by remote-access, time-shared machines, is not just to type programs into a terminal instead of a keypunch, but to encourage close communication.”
                        </p>
					</div>
				</div>
				<div class="border1">
                    <div class="box1">
						<h1> Introduction </h1>
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
                    <div class="box1">
						<h1>Where is Unix Today?</h1>
                        <p>
                            Aside from Microsoft’s operating system “Windows”, almost every other system can trace its origin to Unix. Do you own any Apple products or an Android devices? Almost all of them were developed with some parts of Unix. In fact, it’s because the operating system is Unix-based that Apple laptops are popular with many coders. And Linux is essentially a clone of Unix, and Linux-based operating systems are highly popular for their ease of use and the easy accessibility of files. Unix commands are still used today, though the uses are mainly for server operation.
                        </p>
                    </div>
				</div>

        </div>

	<?php
		include $path.'footer.php';
	?>
	</body>
</html>
