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
    
<p id="resourceBody"> Below is a list of many resources that were used or referenced to while creating this website. We also included many other Books, PDF's, and Links to other websites for your convenience in case you wanted to check out more works related to Unix. We at Stew20 appreciate and encourage your enthusiasm to learn more about this subject! </p>
    

<ul id="resourceList">
	<li>
		<div class="border1">
			<ul>
			<li> <h3> Books </h3></li>
				<li>
					<ul>
						<div class="floatLeft">
							<?php echo('<li> <img src="'.$path.'assets/images/unixInANutshell.jpg" alt="Unix in a Nutshell"> <br></li>'); ?>
							<?php echo('<li> <img src="'.$path.'assets/images/learningTheUnix.jpg" alt=" Learning the Unix Operating System"> <br> </li> ');?>
							<?php echo('<li> <img src="'.$path.'assets/images/unixForDummies.jpg" alt="Unix for Dummies"> <br> </li> ');?>
						</div>
						<li> Robbins, Arnold. UNIX in a Nutshell:. Beijing: O'Reilly, 2005. Print. </li>
						<li> Peek, Jerry D., Grace Todino, and John Strang. Learning the UNIX Operating System. Sebastopol, CA: O'Reilly, 2002. Print. </li>
						<li> Levine, John R., and Margaret Levine. Young. Unix for Dummies. Hoboken, NJ: John Wiley & Sons, 2013. Print.  </li>
					</ul>
				</li>
			</ul>
		</div>
	</li>
	
	<li>
		<div class="border1">
			<ul>
				<li> <h3> PDFs </h3></li>
				<li>
					<ul>
						<!-- <?php echo(' <li><a href="https://www.tutorialspoint.com/unix/unix_tutorial.pdf"> <img src="'.$path.'assets/images/firstRpdf.png" alt=" go to first PDF Recource" style="width=40px; height=50px;"> </a></li> ');?> -->
						<li><a href="https://www.tutorialspoint.com/unix/unix_tutorial.pdf"> Unix Tutorial </a></li>
						<!-- <?php echo(' <li><a href="http://downloads.tuxpuc.pucp.edu.pe/manuales/otros/UNIX.PDF"> <img src="'.$path.'assets/images/secondRpdf.png" alt=" go to second PDF Recource" style="width=40px; height=50px;"></a></li> ');?> -->
						<li><a href="http://downloads.tuxpuc.pucp.edu.pe/manuales/otros/UNIX.PDF"> Teach Yourself Unix </a></li>
						<li><a href="http://www.maths.manchester.ac.uk/~pjohnson/resources/unixShort/examples-commands.pdf"> Thirty Useful Unix Commands </a></li>
						<li><a href="https://www.univie.ac.at/cartography/lehre/kvaf/links_und_tutorials/tutorials/unix.pdf"> Basic Unix Tutorial </a></li>
					</ul>
				</li>
			</ul>
		</div>
	</li>
	
	<li>
		<div class="border1">
			<ul>
				<li> <h3> Websites </h3></li>
				<li>
					<ul>
						<li class="leftText"><a href="https://www.unixtutorial.org/basic-unix-commands/">Basic Unix Commands</a></li>
						<li class="leftText"><a href="https://www.unixtutorial.org/basic-unix-commands/">Advanced Unix Commands</a></li>
						<li class="leftText"><a href="https://www.tutorialspoint.com/unix/index.htm"> Unix for Beginners</a></li>
						<li class="leftText"><a href="https://www.tutorialspoint.com/unix/unix-regular-expressions.htm">Unix for Advanced</a></li>
					</ul>
				</li>	
			</ul>
		</div>
	</li>
	
</ul>
<?php
	include $path."footer.php";
?>

</body>
</html>
