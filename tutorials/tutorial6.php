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
			<h2>Listing File</h2>
			<div class = "commBorder">
				<p>ls</p>
			</div>
		<p>
			(Describe what is 'ls' function)
			xxx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx
			xx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx 
			<div class="textColor">
				<p>
				Following is Output Example:
				<p>
			</div>
			
			<?php echo('<img src="'.$path.'assets/images/ScreenShot.png" alt="picture" style="width:45vw;height:300px;">'); ?>
		</p>
		
		<hr>

		<div class = "commBorder">
		<p>ls -a</p>
		</div>
		
		<p>
		(Describe what is 'ls -a' function)
		xxx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx xx xxx xx xxx xx xxxx 
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
			<td>ls</td>
			<td>simple description function</td>
		  </tr>
		  <tr>
			<td>ls -a</td>
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