<!DOCTYPE html>
<html lang="en">
<?php
	$path = "../";
	include $path."header.php";
?>
	<title>Stew20 File Permissions Quiz</title>
	</head>
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
			<h1>Quiz3: File Permissions</h1>
			<div>
				<h5>Question 1: How do you set the owner and group to read, write, and execute a file (foo) and others to only read and execute?</h5>
				<div class="textColor">
				<input type="radio" name="1" class="1" value="A">chmod 755 foo</input><br/>
				<input type="radio" name="1" class="1" value="B">chmod 644 foo</input><br/>
				<input type="radio" name="1" class="1" value="C">chmod 777 foo </input><br/>
				<input type="radio" name="1" class="1" value="D">chmod 123 foo</input>
				</div>

			</div>
			<div>
				<h5>Question 2: What command is used to change ownership?</h5>
				<div class="textColor">
				<input type="radio" name="2" class="2" value="A">chown</input><br/>
				<input type="radio" name="2" class="2" value="B">chgrp</input><br/>
				<input type="radio" name="2" class="2" value="C">chmod</input><br/>
				</div>

			</div>
			<div>

				<h5>Question 3: What command is used to change group?</h5>
				<div class="textColor">
				<input type="radio" name="3" class="3" value="A">chown</input><br/>
				<input type="radio" name="3" class="3" value="B">chmod</input><br/>
				<input type="radio" name="3" class="3" value="C">chgrp</input><br/>
				</div>
			</div>
			<div>
				<h5>Question 4: What permissions should be used for public facing directories?</h5>
				<div class="textColor">
				<input type="radio" name="4" class="4" value="A">chmod 755</input><br/>
				<input type="radio" name="4" class="4" value="B">chmod 777</input><br/>
				<input type="radio" name="4" class="4" value="C">chmod 666</input><br/>
				<input type="radio" name="4" class="4" value="D">chmod 644</input>
				</div>

			</div>
			<div>
				<h5>Question 5: what do rwx stand for in the permissions table?</h5>
				<div class="textColor">
				<input type="radio" name="5" class="5" value="A">red, white, enable</input><br/>
				<input type="radio" name="5" class="5" value="B">read, write, execute</input><br/>
				<input type="radio" name="5" class="5" value="C">right, write, enable</input><br/>
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
		var answerKey = ["A","A","C","D","B"];
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
