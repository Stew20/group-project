<!DOCTYPE html>
<html lang="en">
<?php
	include "header.php";
?>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>

    <div class="tran">
 	      <img src="assets/images/code3.jpg" alt="picture" style="width:100vw;height:400px;">
	</div>
	
	<?php
		include 'nav.php';
	?>
    
<p id="resourceBody"> Below is a list of many resources that were used or referenced to while creating this website. We also included many other Books, PDF's, and Links to other websites for your convenience in case you wanted to check out more works related to Unix. We at Stew20 appreciate and encourage your enthusiasm to learn more about this subject! </p>
    

<ul id="resourceList">
	<div id="books">
		<li> <h3> Books </h3></li>
		<li>
			<ul>
				<li> <img class="centerImage" src="assets/images/unixInANutshell.jpg" alt="Unix in a Nutshell"> <br></li>
				<li class="centerText"> Robbins, Arnold. UNIX in a Nutshell:. Beijing: O'Reilly, 2005. Print. </li>
				<li> <img class="centerImage" src="assets/images/learningTheUnix.jpg" alt=" Learning the Unix Operating System"> <br> </li>
				<li class="centerText"> Peek, Jerry D., Grace Todino, and John Strang. Learning the UNIX Operating System. Sebastopol, CA: O'Reilly, 2002. Print. </li>
				<li> <img class="centerImage" src="assets/images/unixForDummies.jpg" alt="Unix for Dummies"> <br> </li>
				<li class="centerText"> Levine, John R., and Margaret Levine. Young. Unix for Dummies. Hoboken, NJ: John Wiley & Sons, 2013. Print.  </li>
			</ul>
		</li>
	</div>
	
	<div id="pdfs">
		<li> <h3> PDFs </h3></li>
		<li>
			<ul>
				<li><a href="https://www.tutorialspoint.com/unix/unix_tutorial.pdf"> <img src="assets/images/firstRpdf.png" alt=" go to first PDF Recource" width="40px" height="50px"> </a></li>
				<li><a href="https://www.tutorialspoint.com/unix/unix_tutorial.pdf"> Unix Tutorail pdf </a></li>
				<li><a href="http://downloads.tuxpuc.pucp.edu.pe/manuales/otros/UNIX.PDF"> <img src="assets/images/secondRpdf.png" alt=" go to second PDF Recource" width="40px" height="50px"></a></li>
				<li><a href="http://downloads.tuxpuc.pucp.edu.pe/manuales/otros/UNIX.PDF"> Teach Yourself Unix pdf </a></li>
				<li><a href="http://www.maths.manchester.ac.uk/~pjohnson/resources/unixShort/examples-commands.pdf"> Thirty Useful Unix Commands </a></li>
				<li><a href="https://www.univie.ac.at/cartography/lehre/kvaf/links_und_tutorials/tutorials/unix.pdf"> Basic Unix Tutorail pdf </a></li>
			</ul>
		</li>
	</div>
	
	<div id="websites">
		<li> <h3> Websites </h3></li>
		<li>
			<ul>
				<li class="leftText"><a href="https://www.unixtutorial.org/basic-unix-commands/">Basic Unix Commands</a></li>
				<li class="leftText"><a href="https://www.unixtutorial.org/basic-unix-commands/">Advanced Unix Commands</a></li>
				<li class="leftText"><a href="https://www.tutorialspoint.com/unix/index.htm"> Unix for Beginners</a></li>
				<li class="leftText"><a href="https://www.tutorialspoint.com/unix/unix-regular-expressions.htm">Unix for Advanced</a></li>
			</ul>
		</li>	
	</div>
	
</ul>
    
<?php
	include "footer.php";
?>

</body>
</html>