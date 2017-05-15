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
						<h1>The -touch- Command</h1>
                        <p>The touch command is used to update the modification and access dates of a file to the time when the command itself was invoked. So when implementing this, just state the file name or the file path after the command.</p>
                        <p>The extensions for this command are:</p>
                        <table>
  		<tr>
    			<th>Extension</th>
    			<th>Description</th>
  		</tr>

  		<tr>
            <td>-a</td>
    			<td>This extension will only change the access time of the file, and not the modification date.</td>
  		</tr>
        <tr>
            <td>-m</td>
            <td>This extension will only change the modification date of the file, and not the access time.</td>
        </tr>
                            <tr>
            <td>-r</td>
            <td>This extension will allow you to pull the access time and the modification date from a specified file. This will replace the time and date that would've been used from the system.</td>
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
