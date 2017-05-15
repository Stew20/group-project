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
						<h1>The -vim- Command</h1>
                        <p>vim is a text editor and the vim command is used to create and modify text files from the command line.</p>
                        <p>vim has two modes that are both used for editing files. One is the command mode, which is used to delete sections of text, save or open files, and move the cursor around the screen. The second mode is the text insert mode. In this mode, the user can edit the text of the file.</p>
                        <p>The commands used in vim are visible in the editor, at the bottom of the screen. Only commands that are available to the user at that time are visible, and they will change based on what is occurring on the screen. For example, after choosing to save a file, the commands at the bottom of the screen will change to show options such as append or overwrite.</p>
                        <p>The extensions for this command are:</p>
                        <table>
  		<tr>
    			<th>Extension</th>
    			<th>Description</th>
  		</tr>

  		<tr>
            <td>-i</td>
    			<td>Inserts text before the current cursor position.</td>
  		</tr>
        <tr>
            <td>-l</td>
            <td>Inserts text after the cursor line.</td>
        </tr>
                            <tr>
            <td>-o</td>
            <td>Creates a new line and adds text on this line.</td>
        </tr>
                            <tr>
            <td>-h, -l, -k, -j</td>
    			<td>Moves the cursor left, right, up, and down respectively.</td>
  		</tr>
        <tr>
            <td>-w</td>
            <td>Move forward one word.</td>
        </tr>
                            <tr>
            <td>-b</td>
            <td>Move backward one word.</td>
        </tr>
                            <tr>
            <td>:wq</td>
    			<td>Write the edited file to the disk and quit vim.</td>
  		</tr>
        <tr>
            <td>:q!</td>
            <td>Quits without saving changes, does not warn the user about not saving changes.</td>
        </tr>
                            <tr>
            <td>-ZZ</td>
            <td>Similar to :wq, this writes the file to the disk and quits the editor</td>
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
