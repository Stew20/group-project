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
	

	<h1>Unix - Services </h1>
	<div class="border1">
		<div class="box1">
			<h2>Service</h2>
		<p>
			the service command will give you information about a system service that may or may not be running. The general format for the service command is 
			service [name] [command] where name is the name of the service and command is option being passed to the service command as the action it should preform. 
			<br/>
			For the rest of this tutorial we will be using httpd as the example service. 
		</p>
		
		<hr>

		<div class = "commBorder">
		<p>service httpd status</p>
		</div>
		
		<p>
		service httpd status will give you the status of the httpd daemon. If it is not running it will report that the service is dead(inactive). If it is running it will say active. It will also display
		any errors the service might have run into while it was running if any are present.
		</p>
		
		<hr>
		
		<div class = "commBorder">
		<p>service httpd start</p>
		</div>
		
		<p>
		service httpd start will start the httpd service if it is not already running. 
		</p>
		
		<hr>
		
		<div class = "commBorder">
		<p>service httpd stop</p>
		</div>
		
		<p>
		service http stop will stop the httpd service if it is currently running.
		</p>
		
		<hr>
		
		<div class = "commBorder">
		<p>service httpd restart</p>
		</div>
		
		<p>
		service httpd restart will stop and restart the httpd service if it is currently running.
		</p>
		
		<hr>
		
		<h2>Summary</h2>
		<table>
		  <tr>
			<th>Command</th>
			<th>Function</th>
		  </tr>
		  <tr>
			<td>status</td>
			<td>simple description function</td>
		  </tr>
		  <tr>
			<td>start</td>
			<td>simple description function</td>
		  </tr>
		  <tr>
			<td>stop</td>
			<td>simple description function</td>
		  </tr>
		  <tr>
			<td>restart</td>
			<td>simple description function</td>
		  </tr>
		</table>
		
		
		
		</div>
	</div>
	
	<?php
		include''.$path.'footer.php';
	?>
        
	</body>
</html>
