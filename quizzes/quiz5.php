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
			<h1>Quiz5: Sudo</h1>
			<div>
				<h5>Question 1: Should sudo be used on all commands to make it easy?</h5>
				<div class="textColor">
				<input type="radio" name="1" class="1" value="A">Yes, this is fine</input><br/>
				<input type="radio" name="1" class="1" value="B">No, sudo should only be used when needed</input><br/>
				</div>

			</div>
			<div>
				<h5>Question 2: What does sudo do?</h5>
				<div class="textColor">
				<input type="radio" name="2" class="2" value="A">forces a command to work</input><br/>
				<input type="radio" name="2" class="2" value="B">executes a command as root, the highest level administrator</input><br/>
				<input type="radio" name="2" class="2" value="C">changes your account username</input><br/>
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
		var answerKey = ["B","B"];
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
