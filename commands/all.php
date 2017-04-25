<!DOCTYPE html>
<html lang="en">
<?php
	$path = "../";
	include $path."header.php";
?>
	
	
	<body>
	<div class="tran">
 	   <?php echo('<img src="'.$path.'assets/images/code3.jpg" alt="picture" style="width:100vw;height:400px;">'); ?>
	</div>
	
	<?php
		include $path.'nav.php';
	?>

	<h1>Unix Commands</h1>
	
	
	
	<div class="border1">
	<div class="box1">
	<table>
  		<tr>
    			<th>Command</th>
    			<th>Description</th>
  		</tr>
		
  		<tr>
    			<td>ls</td>
    			<td>"List" - To list the contents of a directory, along with the properties of the files and folders. If used with specific arguments, this command could provide the user many more details: the location, permissions, the date the file was created, and the dates the file was accessed.</td>
  		</tr>
		
  		<tr>
    			<td>cd </td>
    			<td>"Change Directory" - Used to change the current working directory</td>
  		</tr>
		
  		<tr>
    			<td>pwd</td>
    			<td>"Print Working Directory" - Shows the current working directory.</td>
  		</tr>
		
  		<tr>
    			<td>vim</td>
    			<td>"VIM Editor" - The built-in text editor in most operating systems based off of Unix. VIM is an evolution of VI, which was included in the earlier version of Unix-based operating systems. Doesn't offer any mouse support.</td>
  		</tr>
		
  		<tr>
    			<td>Cat</td>
    			<td>Prints out the content of a file to the command line without opening the file</td>
  		</tr>
		
  		<tr>
    			<td>Touch</td>
    			<td>Used to update both the access and the modification date of a directory or file. Allows you to edit the file on the command line without having to open the file.</td>
  		</tr>
		
  		<tr>
    			<td>Tail</td>
    			<td>Outputs the last 10 lines of a file to the command line. Very useful to keep track of your recent activity, or for monitoring a log file.</td>
  		</tr>
		
		<tr>
  			<td>Chmod</td>
    			<td>"Change Mode" - Changes the permission of a file or directory.</td>
		</tr>
		
		<tr>
  			<td>Groups</td>
   		 	<td>Prints out the groups that the current user is a part of.</td>
		</tr>
		
		<tr>
    			<td>Useradd/adduser</td>
    			<td>Creates a new user with the default permission set. Can also be used to reset the permissions of a user to the default set.</td>	
    		</tr>
		
		<tr>
			<td>Su</td>
    			<td>"Switch User" - Changes the current user from the command line. Even though the user is chanegd, the current working directory will not.</td>	
		</tr>
		
		<tr>
			<td>Sudo</td>
    			<td>Runs a program or command as another user, or as the super user. Very helpful when the current user doesn't have the right permissions to access a file or directory.</td>
    		</tr>
		
		<tr>
			<td>Apt-get/aptitude</td>
    			<td>Updates the existing software or installs new software from the command line.</td>
		</tr>
		
		<tr>
    			<td>SSH</td>
    			<td>Allows the user to access a remote computer to execute commands from the terminal.</td>
		</tr>
		
		<tr>
    			<td>SFTP</td>
    			<td>"Secure File Transfer Protocol" - Used for transferring files over the internet through a secure connection</td>
    
		</tr>	
    </table>
    </div>
    </div>
	<?php
		include $path."footer.php";
	?>		
	</body>
</html>
