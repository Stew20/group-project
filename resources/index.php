<!DOCTYPE html>
<html lang="en">
<?php
	$path = "../";
	include $path."header.php";
?>
<body>
	<div class = "background" style ="height: 10em;">
		<div style="text-align: center;" >
		  <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" style="top:39px;">
	   </div>
	</div>

	<?php
		include $path.'nav.php';
	?>
	<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>

	<!--<p id="resourceBody"> Below is a list of many resources that were used or referenced to while creating this website. We also included many other Books, PDF's, and Links to other websites for your convenience in case you wanted to check out more works related to Unix. We at Stew20 appreciate and encourage your enthusiasm to learn more about this subject! </p> -->
    <div class="border1">
					<div class="box1">
                        <!--<h1> New to Unix? No Problem! </h1>-->
                        <p>
                            Below is a list of many resources that were used or referenced to while creating this website. We also included many other Books, PDF's, and Links to other websites for your convenience in case you wanted to check out more works related to Unix. We at Stew20 appreciate and encourage your enthusiasm to learn more about this subject!
                        </p>
					</div>
				</div>


	<div class="border1">
		<h3> <a name="books"> Books </a></h3>
		    <div class="resourceDisplay">
		        <?php echo('<a href="https://www.amazon.com/Unix-Nutshell-Fourth-Arnold-Robbins/dp/0596100299"> <img src="'.$path.'assets/images/unixInANutshell.jpg" alt="Unix in a Nutshell"> </a>'); ?>
		    </div>
		    <div class="resourceDisplayText">
		        <p class="italics"> "As an open operating system, Unix can be improved on by anyone and everyone: individuals, companies, universities, and more. As a result, the very nature of Unix has been altered over the years by numerous extensions formulated in an assortment of versions. Today, Unix encompasses everything from Sun's Solaris to Apple's Mac OS X and more varieties of Linux than you can easily name." </p>

		        <p class="italics"> "The latest edition of this bestselling reference brings Unix into the 21st century. It's been reworked to keep current with the broader state of Unix in today's world and highlight the strengths of this operating system in all its various flavors..." </p>

		        <p class="black"> Robbins, Arnold. UNIX in a Nutshell:. Beijing: O'Reilly, 2005. Print.  </p>

		    </div>
		    <div class="resourceDisplay">
		        <?php echo(' <a href="https://www.amazon.com/Learning-UNIX-Operating-System-Fifth/dp/0596002610"> <img src="'.$path.'assets/images/learningTheUnix.jpg" width="234px" height="346px" alt=" Learning the Unix Operating System"> </a>');?>
		    </div>
		    <div class="resourceDisplayText">
		        <p class="italics"> "If you are new to Unix, this concise book will tell you just what you need to get started and no more. Unix was one of the first operating systems written in C, a high-level programming language, and its natural portability and low price made it a popular choice among universities..."</p>

		        <p class="italics"> "...Learning the Unix Operating System is a handy book for someone just starting with Unix or Linux, and it's an ideal primer for Mac and PC users of the Internet who need to know a little about Unix on the systems they visit..."</p>

		        <p class="black"> Peek, Jerry D., Grace Todino, and John Strang. Learning the UNIX Operating System. Sebastopol, CA: O'Reilly, 2002. Print. </p>
		    </div>
		    <div class="resourceDisplay">
		        <?php echo('<a href="https://www.amazon.com/UNIX-Dummies-John-R-Levine/dp/0764541471"> <img src="'.$path.'assets/images/unixForDummies.jpg" width="234px" height="346px" alt="Unix for Dummies"> </a>');?>
		    </div>
		    <div class="resourceDisplayText">
		        <p class="italics"> "UNIX For Dummies has been the standard for beginning UNIX references for nearly ten years, and this latest edition continues that tradition of success"</p>

		        <p class="italics"> "This unparalled resource is updated to cover the latest applications of UNIX technology, including Linux and Mac desktops as well as how UNIX works with Microsoft server software" </p>

		        <p class="italics"> "Thorough coverage of how to handle UNIX installation, file management, software, utilities, networks, Internet access, and other basic tasks..." </p>

		        <p class="black"> Levine, John R., and Margaret Levine. Young. Unix for Dummies. Hoboken, NJ: John Wiley & Sons, 2013. Print. </p>
		    </div>
		</div>


		<div class="border1">
			<ul>
				<li> <a name="pdfs"> <h3> PDFs </a></h3></li>
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

		<div class="border1">
			<ul>
				<li> <h3> <a name = "websites"> Websites </a></h3></li>
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

		<div id="push"> </div>

<?php
	include $path."footer.php";
?>

</body>
</html>
