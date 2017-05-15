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
						<h1>The -sudo- Command</h1>
                        <p>The sudo command is used  to run a command or access a folder as another user. As a security feature, sudo prompts for a password to be entered before it will allow a command to be run as the specified user. This password will stay active for five minutes (or a manually specified time by the system administrator). After five unsuccessful attempts at logging in, a message will be sent to an administrator to let them know that someone is attempting to log in.</p>
                        <p>sudo should not be used to run commands that the current user already has access to. It is to be used in situations where the user knows what they need to be doing and have permission from the system administrator (if applicable). For example, most users have access to the -ls command by default. If they then wanted to run the “chmod” command, they would run it as a user that has permission to do so, then continue using the system as themselves. This prevents standard users from having access to commands that could potentially harm the system, but also to protect advanced users that may run a command by accident.</p>
                        <p>The extensions for this command are:</p>
                        <table>
  		<tr>
    			<th>Extension</th>
    			<th>Description</th>
  		</tr>

  		<tr>
            <td>-l</td>
    			<td>Used to print out a list of commands that are available to the selected user.</td>
  		</tr>
        <tr>
            <td>-b</td>
            <td>Allows you to run a command as another user, but in the background (hidden). If the command requires user interaction after being invoked, this will not be possible.</td>
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
