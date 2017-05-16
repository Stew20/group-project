<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
	$path = "../";
	include $path."header.php";
?>

	<title>Stew20 All Commands</title>
	</head>
	<body>
		<div class = "background" style ="height: 10em;">
			<div style="text-align: center;" >
	 	      <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" style="top:39px;">
		   </div>
		</div>

	<?php
		include $path.'nav.php';
		include $path.'sidenav.php';
	?>

	<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>

	<h1>Unix Commands</h1>



	<div class="border1">
	<div class="box1">
	<h2>All Commands</h2>
	<form>
		Search:<input type="text" oninput="search(this)"></input>
	</form>
	<table id="command_table">
  		<tr>
    			<th>Command</th>
    			<th>Description</th>
  		</tr>

  		<tr>
            <td><a href="ls.php" class="command">ls</a></td>
    			<td>"List" - To list the contents of a directory, along with the properties of the files and folders. If used with specific arguments, this command could provide the user many more details: the location, permissions, the date the file was created, and the dates the file was accessed.</td>
  		</tr>

  		<tr>
            <td><a href="cd.php" class="command">cd</a></td>
    			<td>"Change Directory" - Used to change the current working directory</td>
  		</tr>

  		<tr>
            <td><a href="pwd.php" class="command">pwd</a></td>
    			<td>"Print Working Directory" - Shows the current working directory.</td>
  		</tr>

  		<tr>
            <td><a href="vim.php" class="command">vim</a></td>
    			<td>"VIM Editor" - The built-in text editor in most operating systems based off of Unix. VIM is an evolution of VI, which was included in the earlier version of Unix-based operating systems. Doesn't offer any mouse support.</td>
  		</tr>

  		<tr>
            <td><a href="cat.php" class="command">cat</a></td>
    			<td>Prints out the content of a file to the command line without opening the file</td>
  		</tr>

  		<tr>
            <td><a href="touch.php" class="command">touch</a></td>
    			<td>Used to update both the access and the modification date of a directory or file. Allows you to edit the file on the command line without having to open the file.</td>
  		</tr>
        <tr>
            <td><a href="head.php" class="command">head</a></td>
    			<td>Outputs the first 10 lines of a file to the command line. Very useful to help save time by previewing a file without opening it.</td>
  		</tr>

  		<tr>
            <td><a href="tail.php" class="command">tail</a></td>
    			<td>Outputs the last 10 lines of a file to the command line. Very useful to keep track of your recent activity, or for monitoring a log file.</td>
  		</tr>

		<tr>
            <td><a href="chmod.php" class="command">chmod</a></td>
    			<td>"Change Mode" - Changes the permission of a file or directory.</td>
		</tr>

		<tr>
            <td><a href="groups.php" class="command">groups</a></td>
   		 	<td>Prints out the groups that the current user is a part of.</td>
		</tr>

		<tr>
            <td><a href="useradd.php" class="command">useradd</a></td>
    			<td>Creates a new user with the default permission set. Can also be used to reset the permissions of a user to the default set.</td>
    	</tr>

		<tr>
            <td><a href="su.php" class="command">su</a></td>
    			<td>"Switch User" - Changes the current user from the command line. Even though the user is chanegd, the current working directory will not.</td>
		</tr>

		<tr>
            <td><a href="sudo.php" class="command">sudo</a></td>
    			<td>Runs a program or command as another user, or as the super user. Very helpful when the current user doesn't have the right permissions to access a file or directory.</td>
    	</tr>
<!--
		<tr>
            <td><a href="yum.php" class="command">yum</a></td>
    			<td>Updates the existing software or installs new software from the command line.</td>
		</tr>

		<tr>
            <td><a href="ssh.php" class="command">ssh</a></td>
    			<td>Allows the user to access a remote computer to execute commands from the terminal.</td>
		</tr>
		<tr>
			<td><a href="sftp.php" class="command">sftp</a></td>
     			<td>"Secure File Transfer Protocol" - Used for transferring files over the internet through a secure connection</td>
		</tr>
		<tr>
            <td><a href="chown.php" class="command">chown</a></td>
    			<td>Allows the user to change the owner and the group of a file or directory.</td>
		</tr>
		<tr>
            <td><a href="find.php" class="command">find</a></td>
    			<td>Helps the user find a directory</td>
		</tr>
		<tr>
            <td><a href="mkdir.php" class="command">mkdir</a></td>
    			<td>MISSING</td>
		</tr>
		<tr>
            <td><a href="rm.php" class="command">rm</a></td>
    			<td>MISSING</td>
		</tr>
		<tr>
            <td><a href="users.php" class="command">users</a></td>
    			<td>MISSING</td>
		</tr>
		-->
    </table>
    </div>
    </div>
	<div id="push"> </div>
	<?php
		include $path."footer.php";
	?>
	<script>
		var table;
		window.onload = function(){
			table = Array.prototype.slice.call(window.document.getElementsByTagName("td"));
		}
		function search(input){
			console.log("running");
			console.log(input);
			var query = input.value;
			var filterd = table.filter(function(value){
				console.log(value);
				return value.innerHTML.indexOf(query) !== -1;
			});
			table.forEach(function(value){
				console.log("changing to none");
				value.parentElement.style.display="none";
			});
			filterd.forEach(function(value){
				console.log("changing to block");
				value.parentElement.style.display="";
			});
		}
	</script>
	</body>
</html>
