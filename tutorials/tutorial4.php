<!DOCTYPE html>
<html lang="en">
	<?php
		$path = "../";
		include''.$path.'header.php';
	?>
	<head>
	<title>Command</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">	
	</head>
	
	<body>
		<div class="tran">
 	    <?php echo('<img src="'.$path.'assets/images/code3.jpg" alt="picture" style="width:100vw;height:400px;">'); ?>
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
				<div class="textColor">
					<p>
						Following is Output Example:
					<p>
				</div>
				<?php echo('<img src="'.$path.'assets/images/ScreenShot.png" alt="picture" style="width:45vw;height:300px;">'); ?>
			</p>
			<hr>
			
			<h2>Checking for updates</h2>
			<div class = "commBorder">
				<p>yum update</p>
			</div>
			<p>
				yum update will update all available packages that have updates available. yum update [package name] will only update that specific package instead of all available. 
			<div class="textColor">
				<p>
				Following is Output Example:
				<p>
			</div>
			
			<?php echo('<img src="'.$path.'assets/images/ScreenShot.png" alt="picture" style="width:45vw;height:300px;">'); ?>
			</p>
			<hr>
			
			<div class = "commBorder">
				<p>yum install [package name ...]</p>
			</div>
			<p>
				yum install will install a specified package or white space delimitered list of packages. 
				<div class="textColor">
					<p>
					Following is Output Example:
					<p>
				</div>
				<?php echo('<img src="'.$path.'assets/images/ScreenShot2.png" alt="picture" style="width:45vw;height:300px;">'); ?>
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
