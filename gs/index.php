<!DOCTYPE html>
<html lang="en">
	<?php
        session_start();
		$path = "../";
		include $path.'header.php';
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

 	    <div id="page">
				<div class="border1">
					<div class="box1">
                        <h1> New to Unix? No Problem! </h1>
                        <p>
                            If you're wondering where to start, or what you need, then you're in the right place! Being able to use Unix to work on the file hierarchy of your computer comes at no premium; In other words, so long as you don't have to pay for a computer, It's free! Now, let's delve into just how you use the Unix commands you'll learn later on. Please note, the steps in the setup and implementation process are different for Windows and Mac, so make sure you're reading the steps that correspond to the machine you will primarily be working on.
                        </p>
					</div>
				</div>
				<div class="border1">
                    <div class="box1">
						<h1> Windows </h1>
						<p>
                            There are two steps to use Unix on your Windows machine:
                            1) You'll need to login to an Unix server through a Secure Shell client (<a href="../commands/ssh.php">SSH</a>)
                            2) You'll have to use a ssh-enabled ftp client to transfer files onto and off of the server (<a href="../commands/sftp.php">SFTP</a>)</p>


                            <p>- Logging Into a Unix Server with a SSH client -</p>

                            <p>In order to complete the first step of logging into a Unix server, you will need to download a SSH client. A free client for windows is a program called PuTTY - You can download it <a href="http://www.putty.org/">here</a>.</p>

                        <p>There's no special installation instructions for this program.</p>

                            <p>Once you have it installed and running, you'll first be prompted to enter the hostname of the Unix/Linux server, then you'll need to enter your username and password to said server once you're prompted to do so. </p>

                            <p>After entering your credentials, if you don't see a line saying 'ACCESS DENIED', then congradulations! You've successfully started to use PuTTY.</p>

                            <p>*IMPORTANT NOTE - If you don't see your passowrd as you're typing it, that's perfectly ok. By design, you don't see the characters of your password for security reasons.*</p>

                            <p><img src="../assets/images/putty.JPG" alt="picture" style="width:45vw;height:676px;"></p>


                        <p>- Transferring Files with a SFTP client -</p>

                            <p>In order to transfer files on and off the server, you must download a SFTP client. There are two popular choices that are both free of cost. They're relatively similar, and you'll notice the slight differences later on. We recommend trying both one at a time and see what you prefer, as we'll provide instructions for downloading and using both clients. For both clients, there are no special instructions while installing, so please use the default settings.</p>

                            <p>The first client is FileZilla - which you can download <a href="https://filezilla-project.org/download.php?type=client">here.</a></p>

                            <p>One window will pop-up, and here you'll enter the host server name, along with your username and password to the server. Once you've successfully logged in, you'll be able to simply drag and drop files from the server (right) to your machine (left) and vice-versa.</p>

                            <p><img src="../assets/images/zilla.JPG" alt="picture" style="width:45vw;height:650px;"></p>

                            <p>The second client is WinSCP - which you can download <a href="https://winscp.net/eng/download.php">here.</a></p>

                            <p>When you open WinSCP, there will be two windows that pop-up. One the login window where you enter the server name along with your username and password. Once you've successfully logged in, you'll be able to access that second window where you transfer files from your machine (left) to the server (right) and vice-versa.</p>

                            <p><img src="../assets/images/winActual.JPG" alt="picture" style="width:45vw;height:650px;"></p>

                    </div>
                    </div>
				</div>
				<div class="border1">
                    <div class="box1">
						<h1> Mac </h1>
                        <p>
                            Using Unix commands on a Mac is actually much simplier than on a Windows computer. The reason why is because the Operating System on Mac devices are based on Unix, meaning that you don't need to download any extra software if you don't want to. So where do you use commands and transfer files? The answer is the Terminal.</p>

                        <p> - Using the Terminal -</p>

                            <p>Firstly, to access the Terminal you go to Applications -> Utilities -> Terminal.app</p>

                            <p>From there, to SSH into a server you simply type the command: ssh username@hostname - CY
                                Where username is your username, and hostname is the server name.</p>

                            <p>Simple, right?
                            If you ever need help, just type in the command: man ssh
                                (man being short for manual)</p>


                        <p>To transfer files, you can go about it one of two ways:</p>

                        <p>1) From the command line / Terminal</p>

                            <p>Here you use the command: scp: file_on_mac username@hostname: file_on_server
                                Where file_on_mac is the file you want to move the file_on_server to, or vice-versa.</p>

                            <p>If you ever need help or wantto learn more about the srp command, enter: man srp
                            into the command line.</p>

                        <p>2) From FileZilla</p>

                            <p>Just like with Windows, you can use FileZilla to transfer files in case you don't want to use the Terminal.</p>

                            <p>Again, you can download it <a href="https://filezilla-project.org/download.php?type=client">here.</a></p>
                    </div>
				</div>

	<?php
		include $path.'footer.php';
	?>
	</body>
</html>
