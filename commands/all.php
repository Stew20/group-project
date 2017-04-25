<!DOCTYPE html>
<html lang="en">

	<head>
	<title>Command</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<style>
	table {
    border-collapse: collapse;
    width: 100%;
	}

	th, td {
    text-align: left;
    padding: 8px;
	}

	tr:nth-child(even){background-color: #e6e6e6}
	
	#nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #6C648B;
		}

		#nav li {
			float: left;
		}

		#nav li ul, li li ul {
			display: none;
			position: absolute;
			font-weight: normal;
		}
		
		#nav li li {
			display: block;
			float: none;
			background-color: #6C648B;
			border: 0;
		}

		#nav li a {
			display: block;
			color: #EDFFCA;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}
		
		#nav li a:hover:not(.active) {
			background-color: #EDFFCA;
			color: #6C648B;
		}

		#nav li:hover ul{
			display: block;
		}
		
		#nav li ul a{
			float: left;
		
		}
		
		.home{
			padding: 0 0;
			width: 46px;
			height: 46px;
			bottom: 50px;
		}
		
		.active {
			background-color: #EDFFCA;
			color: #6C648B;
		}
		/**
			need an @ media Query at 471px, or 540 if we add a search icon 
		**/
	/*
	body  {
    background-image: url("assets/images/10Unix05.jpg");
    width:100vw;
    height:500px;
    background-repeat:no-repeat;
    }
	*/
	</style>	
	</head>
	
	<body>
	<div class="tran">
 	   <img src="assets/images/code3.jpg" alt="picture" style="width:100vw;height:400px;">
	</div>
	
	
	<div id="nav">
            <ul>
                <!-- <li><a class="active" href="#home">Home</a></li> -->
                <!-- <li><a class="home" href="#home"><img src = "HomeButton2.png" alt = "Home Button" style = "width: 35px; height: 35px;"> </li></a> -->
                <li><a href="#home">Home</a></li>
                <li><a href="#tutorials">Tutorials</a>
                    <ul>
                        <li><a href="#tutorial1">1. OS Navigation</a></li>
                        <li><a href="#tutorial2">2. File Manipulation</a></li>
                        <li><a href="#tutorial3">3. Filer Permissions</a></li>
                        <li><a href="#tutorial4">4. Overview</a></li>
                        <li><a href="#tutorial5">More Tutorials</a></li>	
                    </ul>
                </li>
                <li><a href="#commands">Commands</a>
                    <ul>
                        <li><a href="#command1">All Commands</a></li>
                        <li><a href="#command2">Common Commands</a></li>
                        <li><a href="#command3">Navigation Commands</a></li>	
                    </ul>
                </li>
                <li><a href="#quizzes">Quizzes</a>
                    <ul>
                        <li><a href="#quiz1">Q1. Navigation</a></li>
                        <li><a href="#quiz2">Q2. Files</a></li>
                        <li><a href="#quiz3">Q3. Overview</a></li>	
                    </ul>
                </li>
                <li><a href="resources.php">Resources</a>
                    <ul>
                        <li><a href="#Recource1">Books</a></li>
                        <li><a href="#Recource2">PDF's</a></li>
                        <li><a href="#Recource3">Links</a></li>
                        <li><a href="#Recource4">Contact Us</a></li>	
                    </ul>		
                </li>
                <!-- <li> <a class="search"> </li> -->
            </ul>
        </div> <!-- nav div ends here -->

	<h1>Unix Commands: An Introduction to Common Commands</h1>
	<div class="border1">
	<div class="box1">
	</div>
	</div>
	
	
	
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
  <td>Chmod</td>
    <td>"Change Mode" - Changes the permission of a file or directory.</td>
  <td>Groups</td>
    <td>Prints out the groups that the current user is a part of.</td>
    <td>Useradd/adduser</td>
    <td>Creates a new user with the default permission set. Can also be used to reset the permissions of a user to the default set.</td>	
    <td>Su</td>
    <td>"Switch User" - Changes the current user from the command line. Even though the user is chanegd, the current working directory will not.</td>	
    <td>Sudo</td>
    <td>Runs a program or command as another user, or as the super user. Very helpful when the current user doesn't have the right permissions to access a file or directory.</td>
    <td>Apt-get/aptitude</td>
    <td>Updates the existing software or installs new software from the command line.</td>
    <td>SSH</td>
    <td>Allows the user to access a remote computer to execute commands from the terminal.</td>
    <td>SFTP</td>
    <td>"Secure File Transfer Protocol" - Used for transferring files over the internet through a secure connection</td>
    </table>
    </div>
    </div>
	</body>
</html>
