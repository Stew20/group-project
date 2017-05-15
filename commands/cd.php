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
						<h1>The -cd- Command</h1>
						<p>Standing for "Change Directory", this command does as it name implies and changes your current working directory. A working directory is one where the user is currently working from the command line on.</p>
                        <p>The root directory in any Unix based operating system is "/", and it's shown when working on files in the root directory.</p>
                        <p>By itself, this command brings you back to the home directory. To change the directory to anything but home, you enter the path to the folder or file following cd. Unless what you want to navigate to the parent folder of the file you're in at the time. This requires only typing in "cd ../".</p>
                        <p>If the file you want to enter is in the same directory you're currently in, then you just type the file. If the file is in another directory, you'll need to give a definite path.</p>
                        <p>Example: let's say you're trying to enter a folder called "dogs". If you're in the same directoty, you enter "cd dogs" into the command line. If it was in a different directory, then you'd have to type "cd otherDirectory/photos/dogs"</p>
                        <p>This command does have two extensions that alters what you use to change the directory.</p>
                        <table>
  		<tr>
    			<th>Extension</th>
    			<th>Description</th>
  		</tr>

  		<tr>
            <td>-P</td>
    			<td>This extension instructs the cd to use a physical directory structure to navigate.</td>
  		</tr>
        <tr>
            <td>-L</td>
            <td>This extension instructs the cd to change with a symbolic link.</td>
        </tr>
                        </table>
                        
                    </div>
				</div>
        </div>

	<?php
		include $path.'footer.php';
	?>
	</body>
</html>
