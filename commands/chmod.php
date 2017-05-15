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
						<h1>The -chmod- Command</h1>
                        <p>The chmod command is used to  change the permissions of a specified file or directory. Unix permissions, for this example, will be expressed in octal (0 - 7).</p>
                        <p>The Unix permissions are:</p>
                        <ul>
                            <li>Read/Write/Execute - 7</li>
                            <li>Read/Write - 6</li>
                            <li>Read/Execute - 5</li>
                            <li>Read - 4</li>
                            <li>Write/Execute - 3</li>
                            <li>Write - 2</li>
                            <li>Execute - 1</li>
                            <li>None - 0</li>
                        </ul>
                        <p>Permissions using octal digits are set in the following way:</p>
                        <p>First number is permissions for the owner of the file, the second is for members of the group that owns the file, and the third is for everyone else. For example, the permission set “777” would give the owner, the group, and everyone else full read, write, and execute permissions for the specified file or folder.</p>
                        <p>A shared folder, for example, should have a 777 permission set. This allows everyone to access the folder, not just the person that created it, for example. From there, the file system can be locked down to prevent access to other files or folders within the share that should not be accessible to everyone.</p>
                    </div>
				</div>
        </div>

	<?php
		include $path.'footer.php';
	?>
	</body>
</html>
