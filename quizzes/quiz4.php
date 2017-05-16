<!DOCTYPE html>
<html lang="en">
<?php
	$path = "../";
	include $path."header.php";
?>
	<body>
		<div class = "background">
			<div class="imgContainer" >
					<img class="imgResp" src="../assets/images/banner_words.png" alt="picture">
			 </div>
		</div>

	<?php
		include $path.'nav.php';
	?>
			<div class="border1">
			<h1>Quiz4: Package Manager</h1>
			<div>
				<h5>Question 1: How would I only update the httpd package?</h5>
				<div class="textColor">
				<input type="radio" name="1" class="1" value="A">yum update</input><br/>
				<input type="radio" name="1" class="1" value="B">yum update httpd</input><br/>
				<input type="radio" name="1" class="1" value="C">yum install httpd</input><br/>
				<input type="radio" name="1" class="1" value="D">yum check-update httpd</input>
				</div>

			</div>
			<div>
				<h5>Question 2: What is the difference between yum update and yum check-update?</h5>
				<div class="textColor">
				<input type="radio" name="2" class="2" value="A">yum update updates all packages without asking about each, yum check-update asks about each before updating</input><br/>
				<input type="radio" name="2" class="2" value="B">yum update updates all packages, yum check-update only checks for updates but doesnt run them</input><br/>
				<input type="radio" name="2" class="2" value="C">yum update only updates on package, yum check-update updates all packages</input><br/>
				<input type="radio" name="2" class="2" value="D">They are the same</input>
				</div>

			</div>
			<div>

				<h5>Question 3: How many packages can be installed with yum install at one time?</h5>
				<div class="textColor">
				<input type="radio" name="3" class="3" value="A">One</input><br/>
				<input type="radio" name="3" class="3" value="B">Ten</input><br/>
				<input type="radio" name="3" class="3" value="C">There is no limit</input><br/>
				</div>
			</div>
			<div>
				<h5>Question 4: what does yum update do</h5>
				<div class="textColor">
				<input type="radio" name="4" class="4" value="A">nothing, you need to enter a package name after update to complete the command</input><br/>
				<input type="radio" name="4" class="4" value="B">checks for updateable packages</input><br/>
				<input type="radio" name="4" class="4" value="C">updates all packages</input><br/>
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
		var answerKey = ["B","B","C","C"];
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
