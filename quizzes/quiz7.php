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
			<div class="border1">
			<h1>Quiz7: Setting up a Webserver</h1>
			<div>
				<h5>Question 1: What does LAMP stand for?</h5>
				<div class="textColor">
				<input type="radio" name="1" class="1" value="A">Linux, Apache, Minesweeper, Program</input><br/>
				<input type="radio" name="1" class="1" value="B">Lazers Are Making Pizzas</input><br/>
				<input type="radio" name="1" class="1" value="C">Linux, Apache, MySQL, PHP</input><br/>
				<input type="radio" name="1" class="1" value="D">LAMP is LAMP, it gives us light when we turn it on</input>
				</div>

			</div>
			<div>
				<h5>Question 2: How do you check if apache is working correctly?</h5>
				<div class="textColor">
				<input type="radio" name="2" class="2" value="A">sudo systemctl enable httpd.service</input><br/>
				<input type="radio" name="2" class="2" value="B">enter HttP://[your servers ip address] in the url bar of a web browser</input><br/>
				<input type="radio" name="2" class="2" value="C">sudo yum install httpd</input><br/>
				<input type="radio" name="2" class="2" value="D">sudo yum update</input>
				</div>

			</div>
			<div>

				<h5>Question 3: What command starts MariaDB/MySQL?</h5>
				<div class="textColor">
				<input type="radio" name="3" class="3" value="A">sudo mysql_secure_installation</input><br/>
				<input type="radio" name="3" class="3" value="B">sudo systemctl enable mariadb.service</input><br/>
				<input type="radio" name="3" class="3" value="C">sudo service mariadb start</input><br/>
				</div>
			</div>
			<div>
				<h5>Question 4: Which of these is not a step in writing the PHP test file?</h5>
				<div class="textColor">
				<input type="radio" name="4" class="4" value="A">sudo vim /var/www/html/info.php</input><br/>
				<input type="radio" name="4" class="4" value="B">sudo yum update</input><br/>
				<input type="radio" name="4" class="4" value="C">&#60;&#63;php phpinfo(); &#63;&#62;</input><br/>
				<input type="radio" name="4" class="4" value="D">:wq</input>
				</div>

			</div>
			<button class="button" onclick="checkAnswers()">Submit</button>
		</div>
	<div id="push"> </div>
	<?php
	include $path."footer.php";
	?>
	</body>
	<script>
		var answers = [];
		var answerKey = ["C","B","C","B"];
		var results = [];
		function verify(){
			for (var i = 0; i < answers.length; i++)
			{
				if (answers[i] != answerKey[i])
				{
					results[i] = "Incorrect, please retry this question";
				}
				else
				{
					results[i] = "Correct!";
				}
			}
		}


		function checkAnswers(){
			for (i = 1; i <= 10; i ++)
			{
				var x = document.getElementsByClassName(i.toString());
				var z;
				for (z = 0; z < x.length; z++) {
					if(x[z].checked)
					{
						answers[i - 1] = x[z].value;
					}
				}
			}
			if(answers.length != answerKey.length)
			{
				console.log("answers length = " + answers.length );
				console.log("you did not answer all of the questions");
				alert("you did not answer all of the questions");
				return;
			}
			verify();
			var strResults = "";
			for(var i = 0; i < results.length; i++)
			{
				strResults += ((i+1).toString() + ": " + results[i] + "\n");
			}
			alert(strResults);
			return false;
		}
	</script>
</html>
