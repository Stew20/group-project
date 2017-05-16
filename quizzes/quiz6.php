<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>
	<?php
		include'../header.php';
	?>
	<body>
		<form>
			<h1>Quiz6: Using Sudo</h1>
			<div>
				<h2>Question 1: What command is used to list a directories contents?</h2>
				<input type="radio" name="1" class="1" value="A">ls</input>
				<input type="radio" name="1" class="1" value="B">cd</input>
				<input type="radio" name="1" class="1" value="C">pwd</input>
				<input type="radio" name="1" class="1" value="D">none of the above</input>
			</div>
			<div>
				<h2>Question 2: What command is used to change directories?</h2>
				<input type="radio" name="2" class="2" value="A">ls</input>
				<input type="radio" name="2" class="2" value="B">cd</input>
				<input type="radio" name="2" class="2" value="C">pwd</input>
				<input type="radio" name="2" class="2" value="D">none of the above</input>
			</div>
			<div>
				<h2>Question 3: What command displays the current location in the filesystem?</h2>
				<input type="radio" name="3" class="3" value="A">ls</input>
				<input type="radio" name="3" class="3" value="B">cd</input>
				<input type="radio" name="3" class="3" value="C">pwd</input>
				<input type="radio" name="3" class="3" value="D">none of the above</input>
			</div>
			<div>
				<h2>Question 4: Select none of the above</h2>
				<input type="radio" name="4" class="4" value="A">ls</input>
				<input type="radio" name="4" class="4" value="B">cd</input>
				<input type="radio" name="4" class="4" value="C">pwd</input>
				<input type="radio" name="4" class="4" value="D">none of the above</input>
			</div>
			<div>
				<h2>Question 5: How would change directory to my parent directory</h2>
				<input type="radio" name="5" class="5" value="A">cd ..</input>
				<input type="radio" name="5" class="5" value="B">cd ~ </input>
				<input type="radio" name="5" class="5" value="C">the full file path is needed</input>
				<input type="radio" name="5" class="5" value="D">cant be done</input>
			</div>
		</form>
		<button onClick="checkAnswers()">Submit</button>
	</body>
	<script>
		var answers = [];
		var answerKey = ["A","B","C","D","A"];
		var results = {};
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
				console.log("answers length = " + answers.length )
				console.log("you did not answer all of the questions");
				alert("you did not answer all of the questions");
				return;
			}
			verify();
			console.log(results);
			alert(results);
		}
	</script>
</html>
