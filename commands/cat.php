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
	 	      <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" style="top:39px;">
		   </div>
		</div>

	<?php
		include '../nav.php';
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
						<h1>The -cat- Command</h1>
                        <p>cat is commonly used to read the contents of a file. This commands also prints out the contents in a standard output that's easy to read.</p>
                        <p>Another functionality of the cat command is that it can be used to combine different files or create new ones.</p>
                        <p>An example of copying a file is by typing into the command line "cat file1.txt > file2.txt".</p>
                        <p>To append the content of one file to another is very simple, use ">>" instead of a single ">". </p>
                        <p>In case you ever need numbered lines for the content, use the extension -n with the cat command.</p>
                    </div>
				</div>
        </div>

	<?php
		include $path.'footer.php';
	?>
	</body>
</html>
