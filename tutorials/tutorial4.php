<!DOCTYPE html>
<html lang="en">
	<?php
		$path = "../";
		include''.$path.'header.php';
	?>
	<title>Stew20 Package Manager Tutorial </title>
	</head>
	<body>
		<div class = "background" style ="height: 10em;">
			<div style="text-align: center;" >
	 	      <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" style="top:39px;">
		   </div>
		</div>

	<?php
		include''.$path.'nav.php';
	?>


	<h1>Unix - Package Manager </h1>
	<div class="border1">
		<div class="box1">
			<h2>Yum</h2>
			<p>
				Yum is the package manager that is used on Centos and other RPM linux distros. The package manager is what is used to check for updates to programs and libraries
				as well as install new programs and libraries. This saves the user from needing to go and check the web for updates and potentially downloading malware that is claiming to be an upgrade
				to the current programs that are currently installed. The package manager will check and update everything for you.
			</p>
			<hr>

			<h2>Checking for updates</h2>
			<div class = "commBorder">
				<p>yum check-update</p>
			</div>
			<p>
				yum check-update will check for any updates for currently installed applications and libraries and list the packages that have updates that can be installed.
			</p>
			<hr>

			<h2>Checking for updates</h2>
			<div class = "commBorder">
				<p>yum update</p>
			</div>
			<p>
				yum update will update all available packages that have updates available. yum update [package name] will only update that specific package instead of all available.
			</p>
			<hr>

			<div class = "commBorder">
				<p>yum install [package name ...]</p>
			</div>
			<p>
				yum install will install a specified package or white space delimitered list of packages.
			</p>
			<hr>

			<h2>Summary</h2>
			<table>
			<tr>
				<th>Command</th>
				<th>Function</th>
			</tr>
			<tr>
				<td>yum check-update</td>
				<td>only checks for updates all available packages installed on the system without updating them</td>
			</tr>
			<tr>
				<td>yum update</td>
				<td>updates all available packages installed on the system</td>
			</tr>
			<tr>
				<td>yum install</td>
				<td>installs new packages on the system</td>
			</tr>
			</table>
		</div>
	</div>

	<?php
		include''.$path.'footer.php';
	?>

	</body>
</html>
