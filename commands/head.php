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
						<h1>The -head- Command</h1>
                        <p>The head command is used to print out the first 10 lines of a file. This command can save you time by allowing you to preview a file that you may not know the contents of without having to open the file</p>
                        <p>The default number of lines that are printed when no specific number is specified is 10 lines. To specify the number of lines, type "-#" with "#" being the number of desired lines.</p>
                        <p>If desired, you could also display the first few lines of multiple files. To do this, just list the file names in the command line without any commas. When doing this, the command will also provide a heading for each list so that you cn tell which is which.</p>
                        <p>The extensions for this command are:</p>
                        <table>
  		<tr>
    			<th>Extension</th>
    			<th>Description</th>
  		</tr>

  		<tr>
            <td>-c</td>
    			<td> Used to display characters, instead of lines. It can be used with a number, such as 30 to display 30 characters, or with a larger number, such as 10K or 10M which will print out the first 10,000 and 10 million characters, respectively.</td>
  		</tr>
        <tr>
            <td>-v</td>
            <td>When displaying multiple files at once, use this extension to show the name of the file before it's displayed.</td>
        </tr>
                            <tr>
            <td>-q</td>
            <td>This extension will be the opposite of the -v command. It will hide the file name headers when printing the contents to standard output.</td>
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
