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
			<h1>Quiz2: File Manipulation</h1>
			<div>
				<h5>Question 1: What command is used to make a new directory?</h5>
				<div class="textColor">
				<input type="radio" name="1" class="1" value="A">rmdir</input><br/>
				<input type="radio" name="1" class="1" value="B">rm</input><br/>
				<input type="radio" name="1" class="1" value="C">mkdir</input><br/>
				<input type="radio" name="1" class="1" value="D">touch</input>
				</div>

			</div>
			<div>
				<h5>Question 2: What command is the difference between touch foo and vim foo?</h5>
				<div class="textColor">
				<input type="radio" name="2" class="2" value="A">There isnt a difference</input><br/>
				<input type="radio" name="2" class="2" value="B">touch will create the file, vim will create and open the file</input><br/>
				<input type="radio" name="2" class="2" value="C">touch will create and open the file, vim will only create the file</input><br/>
				<input type="radio" name="2" class="2" value="D">touch will delete the file, vim will create the file</input>
				</div>

			</div>
			<div>

				<h5>Question 3: It is possible to delete a directory with rm</h5>
				<div class="textColor">
				<input type="radio" name="3" class="3" value="A">True</input><br/>
				<input type="radio" name="3" class="3" value="B">False</input><br/>
				</div>
			</div>
			<div>
				<h5>Question 4: What is the difference between rm and rmdir</h5>
				<div class="textColor">
				<input type="radio" name="4" class="4" value="A">rm removes files and directories, rmdir only removes directories</input><br/>
				<input type="radio" name="4" class="4" value="B">rm only removes directories, rmdir removes files and directories</input><br/>
				<input type="radio" name="4" class="4" value="C">they are the same command</input><br/>
				</div>

			</div>
			<div>
				<h5>Question 5: What command moves a file, foo, to its parent directory</h5>
				<div class="textColor">
				<input type="radio" name="5" class="5" value="A">mv foo ../</input><br/>
				<input type="radio" name="5" class="5" value="B">mv foo ./</input><br/>
				<input type="radio" name="5" class="5" value="C">mv foo ~</input><br/>
				<input type="radio" name="5" class="5" value="D">mv foo parent</input>
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
		var answerKey = ["C","B","A","A","A"];
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
