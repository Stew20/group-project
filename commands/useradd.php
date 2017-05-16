<?php
session_start();
$_SESSION["sidenav"] = "home";
?>
<!DOCTYPE html>
<html lang="en">
	<?php
		$path = "../";
		include $path.'header.php';
	?>
	<title>Stew20 useradd command</title>
	</head>
	<body>
		<div class = "background" style ="height: 10em;">
			<div style="text-align: center;" >
	 	      <img class="imgResp" src="../assets/images/banner_words.png" alt="picture" style="top:39px;">
		   </div>
		</div>

	<?php
		include '../nav.php';
	?>

		<button onclick="topFunction()" id="myBtn" title="Go to top">⬆︎</button>
        <!--<button id="gsbtn" class="button" type="submit" value="Get Started!" />-->
 	    <div id="page">
            <!--
            <form action="gs/index.php">
            </form>
            -->
				<div class="border1">
                    <div class="box1">
						<h1>The -useradd- Command</h1>
                        <p>The useradd command is a simple utility to create a new user. This commands allows you to set their password and group permissions. It also makes a new home directory for that user along with the proper permissions and ownserships for said home directory.</p>
                        <p> In total, there are 7 fields that are filled in when creating the new user. They are:</p>
                        <ul>
                            <li>Username</li>
                            <li>Password</li>
                            <li>User ID</li>
                            <li>Group ID</li>
                            <li>User Info</li>
                            <li>Home directory</li>
                            <li>Shell</li>
                        </ul>
                    </div>
				</div>
        </div>

	<?php
		include $path.'footer.php';
	?>
	</body>
</html>
