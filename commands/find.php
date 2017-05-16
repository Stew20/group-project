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
						<h1>The -find- Command</h1>
						<p>As the name implies, this command helps you find a certain file. Now you don't just type in the name of the file, instead you choose the directory where you'll begin your search and criteria you're looking for. While one of the critera could be the name of the file, it's more likely you're looking for a file with certain characteristics, such as:</p>
                        <table>
  		<tr>
    			<th>Extension</th>
    			<th>Description</th>
  		</tr>

  		<tr>
            <td>-atime n</td>
    			<td>Gets a file that was accessed n days ago</td>
  		</tr>
        <tr>
            <td>-mtime n</td>
            <td>Gets a file that was modified n days ago </td>

  		<tr>
            <td>-size n</td>
    			<td>Gets a file that is n blocks big</td>
  		</tr>
        <tr>
            <td>-type c</td>
            <td>Gets a file that's a specific type. (f=plain text, d = directory.</td>
        </tr>
                            <tr>
            <td>-name nam</td>
    			<td>Gets a file with the specified name nam</td>
  		</tr>
        <tr>
            <td>-user usr</td>
            <td>Gets a file that has an owner that matches usr </td>

  		<tr>
            <td>-group grp</td>
    			<td>Gets a file that has the same group owner that you specified</td>
  		</tr>
        <tr>
            <td>-perm p</td>
            <td>Gets a file that has the same access you specified</td>
        </tr>
                        </table>
                        <p>You could also use a + (plus) and - (minus) sign with atime, mtime, and the size extensions.</p>
                        <p></p>
                        <p>After getting the file you wanted, you could display the file by adding '-print' to the end of the statement, or run the file on the command line with -exec fileName. Howeve, if you do want to run a command you must add '\;' to the end of the statement.</p>                        
                    </div>
				</div>
        </div>

	<?php
		include $path.'footer.php';
	?>
	</body>
</html>