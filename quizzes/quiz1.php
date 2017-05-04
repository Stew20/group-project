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
		<form>
			<div class="border1">
			<h1>Quiz1: OS Navigation</h1>
			<div>
				<h5>Question 1: What command is used to list a directories contents?</h5>
				<div class="textColor">
				<input type="radio" name="1" class="1" value="A">ls</input><br/>
				<input type="radio" name="1" class="1" value="B">cd</input><br/>
				<input type="radio" name="1" class="1" value="C">pwd</input><br/>
				<input type="radio" name="1" class="1" value="D">none of the above</input>
				</div>

			</div>
			<div>
				<h5>Question 2: What command is used to change directories?</h5>
				<div class="textColor">
				<input type="radio" name="2" class="2" value="A">ls</input><br/>
				<input type="radio" name="2" class="2" value="B">cd</input><br/>
				<input type="radio" name="2" class="2" value="C">pwd</input><br/>
				<input type="radio" name="2" class="2" value="D">none of the above</input>
				</div>

			</div>
			<div>

				<h5>Question 3: What command displays the current location in the filesystem?</h5>
				<div class="textColor">
				<input type="radio" name="3" class="3" value="A">ls</input><br/>
				<input type="radio" name="3" class="3" value="B">cd</input><br/>
				<input type="radio" name="3" class="3" value="C">pwd</input><br/>
				<input type="radio" name="3" class="3" value="D">none of the above</input>
				</div>
			</div>
			<div>
				<h5>Question 4: Select none of the above</h5>
				<div class="textColor">
				<input type="radio" name="4" class="4" value="A">ls</input><br/>
				<input type="radio" name="4" class="4" value="B">cd</input><br/>
				<input type="radio" name="4" class="4" value="C">pwd</input><br/>
				<input type="radio" name="4" class="4" value="D">none of the above</input>
				</div>

			</div>
			<div>
				<h5>Question 5: How would change directory to my parent directory</h5>
				<div class="textColor">
				<input type="radio" name="5" class="5" value="A">cd ..</input><br/>
				<input type="radio" name="5" class="5" value="B">cd ~ </input><br/>
				<input type="radio" name="5" class="5" value="C">the full file path is needed</input><br/>
				<input type="radio" name="5" class="5" value="D">cant be done</input>
				</div>

			</div>

		</form>
		<button class="button" onClick="checkAnswers()">Submit</button>
		</div>
	<div id="push"> </div>
	<?php
	include $path."footer.php";
	?>
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
