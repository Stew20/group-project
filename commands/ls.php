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
						<h1>The -ls- Command</h1>
						<p>The ls command is used to list the contents of a directory,including the properties and permissions of the files and folders inside the parent folder you're in.</p>
                        <p>Depending on your need, you could very easily modify the command to output more specifically or in relation to a category. All you need to do is to add an extension after the main command.</p>
                        <p>Here's a detailed list:</p>
                        <table>
  		<tr>
    			<th>Extension</th>
    			<th>Description</th>
  		</tr>

  		<tr>
            <td>-l</td>
    			<td>This extensions gives out a longer listing of details that include: permissions, ownership, modification date, and name.</td>
  		</tr>
        <tr>
            <td>-s</td>
            <td>This will sort the results by their size.</td>
        </tr>
                            <tr>
            <td>-t</td>
            <td>This will sort the results by their modification date.</td>
        </tr>
                            <tr>
            <td>-lh</td>
            <td>This will sort the same results as the -l extension, but it will also add their file sizes to each result.</td>
        </tr>
                            <tr>
            <td>-a</td>
            <td>This will show all files and folders, including hidden ones.</td>
        </tr>
                            <tr>
            <td>-d</td>
            <td>This will display only the directories and not independent files.</td>
        </tr>
                            <tr>
            <td>-o</td>
            <td>This will display all of the content of the files and folders as the -l command would, except for the "group" column.</td>
        </tr>
                            <tr>
            <td>-R</td>
            <td>This will show subdirectories, or a recursive listing of all directories.</td>
        </tr>
                            <tr>
            <td>-1</td>
            <td>This will show each listing in a list format rather than the default grid format. Which means that each result will occupy an individual line each.</td>
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
