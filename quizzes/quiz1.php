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
			<h1>Quiz1</h1>
			<div>
				<h2>Question 1</h2>
				<input type="radio" name="1" class="1" value="A"></input>
				<input type="radio" name="1" class="1" value="B"></input>
				<input type="radio" name="1" class="1" value="C"></input>
				<input type="radio" name="1" class="1" value="D"></input>
			</div>
			<div>
				<h2>Question 2</h2>
				<input type="radio" name="2" class="2" value="A"></input>
				<input type="radio" name="2" class="2" value="B"></input>
				<input type="radio" name="2" class="2" value="C"></input>
				<input type="radio" name="2" class="2" value="D"></input>
			</div>
			<div>
				<h2>Question 3</h2>
				<input type="radio" name="3" class="3" value="A"></input>
				<input type="radio" name="3" class="3" value="B"></input>
				<input type="radio" name="3" class="3" value="C"></input>
				<input type="radio" name="3" class="3" value="D"></input>
			</div>
			<div>
				<h2>Question 4</h2>
				<input type="radio" name="4" class="4" value="A"></input>
				<input type="radio" name="4" class="4" value="B"></input>
				<input type="radio" name="4" class="4" value="C"></input>
				<input type="radio" name="4" class="4" value="D"></input>
			</div>
			<div>
				<h2>Question 5</h2>
				<input type="radio" name="5" class="5" value="A"></input>
				<input type="radio" name="5" class="5" value="B"></input>
				<input type="radio" name="5" class="5" value="C"></input>
				<input type="radio" name="5" class="5" value="D"></input>
			</div>
			<div>
				<h2>Question 6</h2>
				<input type="radio" name="6" class="6" value="A"></input>
				<input type="radio" name="6" class="6" value="B"></input>
				<input type="radio" name="6" class="6" value="C"></input>
				<input type="radio" name="6" class="6" value="D"></input>
			</div>
			<div>
				<h2>Question 7</h2>
				<input type="radio" name="7" class="7" value="A"></input>
				<input type="radio" name="7" class="7" value="B"></input>
				<input type="radio" name="7" class="7" value="C"></input>
				<input type="radio" name="7" class="7" value="D"></input>
			</div>
			<div>
				<h2>Question 8</h2>
				<input type="radio" name="8" class="8" value="A"></input>
				<input type="radio" name="8" class="8" value="B"></input>
				<input type="radio" name="8" class="8" value="C"></input>
				<input type="radio" name="8" class="8" value="D"></input>
			</div>
			<div>
				<h2>Question 9</h2>
				<input type="radio" name="9" class="9" value="A"></input>
				<input type="radio" name="9" class="9" value="B"></input>
				<input type="radio" name="9" class="9" value="C"></input>
				<input type="radio" name="9" class="9" value="D"></input>
			</div>
			<div>
				<h2>Question 10</h2>
				<input type="radio" name="10" class="10" value="A"></input>
				<input type="radio" name="10" class="10" value="B"></input>
				<input type="radio" name="10" class="10" value="C"></input>
				<input type="radio" name="10" class="10" value="D"></input>
			</div>
		</form>
		<button onClick="checkAnswers()">Submit</button>
	</body>
	<script>
		var answers = [];
		var answerKey = ["A","B","C","D","A","B","C","D","A","B"];
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
					if(x[z].chcked)
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
