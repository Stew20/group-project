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
			<h1>Quiz6: Services</h1>
			<div>
				<h5>Question 1: What does service foo stop do?</h5>
				<div class="textColor">
				<input type="radio" name="1" class="1" value="A">stops foo if it is running</input><br/>
				<input type="radio" name="1" class="1" value="B">stops foo if it is running, starts then stops foo if it is not running</input><br/>
				<input type="radio" name="1" class="1" value="C">tells you if foo is stopped</input><br/>
				<input type="radio" name="1" class="1" value="D">prevents foo from ever running again</input>
				</div>

			</div>
			<div>
				<h5>Question 2: What does service foo start do?</h5>
				<div class="textColor">
				<input type="radio" name="2" class="2" value="A">starts foo if it is not running</input><br/>
				<input type="radio" name="2" class="2" value="B">restarts foo if it is already running, otherwise it starts foo</input><br/>
				<input type="radio" name="2" class="2" value="C">enables foo so that it is always running</input><br/>
				<input type="radio" name="2" class="2" value="D">tells you if foo is running</input>
				</div>

			</div>
			<div>

				<h5>Question 3: What does service foo status do?</h5>
				<div class="textColor">
				<input type="radio" name="3" class="3" value="A">tells you if foo is running or not along with any possible errors foo might have encountered</input><br/>
				<input type="radio" name="3" class="3" value="B">nothing</input><br/>
				<input type="radio" name="3" class="3" value="C">if foo is running it stops foo, if foo is not running it starts foo</input><br/>
				</div>
			</div>
			<div>
				<h5>Question 4: What does service foo restart do?</h5>
				<div class="textColor">
				<input type="radio" name="4" class="4" value="A">if foo is not running it starts foo, otherwise it stops then starts foo</input><br/>
				<input type="radio" name="4" class="4" value="B">if foo is stopped, it starts then stops foo again otherwise it does nothing</input><br/>
				<input type="radio" name="4" class="4" value="C">restarts the computer</input><br/>
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
		var answerKey = ["A","A","A","A"];
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
