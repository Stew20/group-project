<?php
session_start();
$_SESSION["sidenav"] = "home";
?>
<!DOCTYPE html>
<html lang="en">
	<?php
		$path = "../";
		include $path.'header.php';
	?>
	<body>
		<div class = "background" style ="height: 10em;">
			<div style="text-align: center;" >
	 	      <img class="imgResp" src="assets/images/banner_words.png" alt="picture" style="top:39px;">
		   </div>
		</div>

	<?php
		include 'nav.php';
	?>

		<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>
        <!--<button id="gsbtn" class="button" type="submit" value="Get Started!" />-->
 	    <div id="page">
            <!--
            <form action="gs/index.php">
            </form>
            -->
				<div class="border1">
                    <div class="box1">
						<h1>The -tail- Command</h1>
                        <p>The tail command is used to print out the last 10 lines of a file. This command is very useful when monitoring a log file. By using this command, you can monitor your log file.</p>
                        <p>The default number of lines that are printed when no specific number is specified is 10 lines. To specify the number of lines, type "-#" with "#" being the number of desired lines.</p>
                        <p>If desired, you could also display the first few lines of multiple files. To do this, just list the file names in the command line without any commas. When doing this, the command will also provide a heading for each list so that you cn tell which is which.</p>
                        <p>If you want to start on a specific line number, simply include "+#" where # is the line number you want to start printing at.</p>
                    </div>
				</div>
        </div>

	<?php
		include $path.'footer.php';
	?>
	</body>
</html>
