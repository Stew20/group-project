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
	

	<h1>Unix - Setting up a webserver </h1>
	<div class="border1">
		<div class="box1">
			<h2>Introduction</h2>
		<p>
			This tutorial will guide you through the basic steps of setting up a webserver using a LAMP stack. LAMP stands for Linux, Apache, MySQL, PHP. This tutorial does build off of the previous tutorials on this site
			and it is recommended that those are read through before proceeding with this tutorial. In the LAMP stack, Apache is the service that runs the webserver itself, MySQL is a database used for storing information for 
			the webserver, and PHP is used as a backend language further extending the capabilities of the webserver. 
		</p>
		
		<hr>
			<h2>Install Apache</h2>
			<p>
				First we should install make sure the system is up to date and all currently install packages are at the most recent version. 
			</p>
			<div class = "commBorder">
				<p>sudo yum update</p>
			</div>
			<p>
				Next install Apache. 
			</p>
			<div class = "commBorder">
				<p>sudo yum install httpd</p>
			</div>
			<p>
				Start Apache
			</p>
			<div class = "commBorder">
				<p>sudo service httpd start</p>
			</div>
			<p>
				Make sure Apache is running. This command should display Active:Active. If it shows Active: Dead(inactive) then fix the error displayed in the status message or retry the previous step. 
			</p>
			<div class = "commBorder">
				<p>sudo systemctl enable httpd.service</p>
			</div>
			<p>
				Set Apache to start on server boot. 
			</p>
			<div class = "commBorder">
				<p>sudo systemctl enable httpd.service</p>
			</div>
			<p>
				verify that the webserver is working by entering the following in the URL bar of a webbrowser where [your servers ip address] is replaced with the ip address of your server. If a webpage loads then apache is working
			</p>
			<div class = "commBorder">
				<p>http://[your servers ip address]</p>
			</div>
			
		<hr>
					<h2>Install MySQL</h2>
			<p>
				Install MySQL/MariaDB database
			</p>
			<div class = "commBorder">
				<p>sudo yum install mariadb-server mariadb</p>
			</div>
			<p>
				Start the database service
			</p>
			<div class = "commBorder">
				<p>sudo service mariadb start</p>
			</div>
			<p>
				Set service to start on server boot
			</p>
			<div class = "commBorder">
				<p>sudo systemctl enable mariadb.service</p>
			</div>
			<p>
				run the secure installation command
			</p>
			<div class = "commBorder">
				<p>sudo mysql_secure_installation</p>
			</div>
			<p>
				You will be asked for the root password. Because it wasnt set earlierm press ENTER to set a password now
			</p>
			<p>
				Press Y to set the root password
			</p>
			<p>
				Enter and confirm the new root password
			</p>
			<p>
				For the remaining questions respond with Y for best practice. 
			</p>
		
		<hr>
		<h2>Install PHP</h2>
		<p>
			Install the PHP packages
		</p>
			<div class = "commBorder">
				<p>sudo yum install php php-mysql</p>
			</div>
		<hr>
		<h2>Test PHP</h2>
		<p>
			Create a new php file to test the php installation in the /var/www/html folder
		</p>
		<div class = "commBorder">
			<p>sudo vim /var/www/html/info.php</p>
		</div>
		<hr>
		<p>
			add the following code to the file
		</p>
		<div class = "commBorder">
			<p>&#60;&#63;php phpinfo(); &#63;&#62;</p>
		</div>
		<p>
			save and close the file
		</p>
		<div class = "commBorder">
			<p>:wq</p>
		</div>
		<p>
			verify that it worked by opening a web browser and entering the following into the URL bar where [your servers ip address] is replaced with the ip address of your server. a PHP page should display when the page loads. this verifies that PHP is working. 
		</p>
		<div class = "commBorder">
			<p>http://[your servers ip address]/info.php</p>
		</div>
		<hr>		
		</div>
	</div>
	
	<?php
		include''.$path.'footer.php';
	?>
        
	</body>
</html>
