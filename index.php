<!DOCTYPE html>
<html lang="en">
<head>
	<title>GIFT Creator</title>
	<meta charset="utf-8">
	<script src = "jquery-2.0.3.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<p id = "javascript_message">To avoid errors when using the GIFT Creator, please enable JavaScript and reload this page.</p>
	<div id = "page_wrapper">
		<h1>GIFT Format Creator</h1>
		<select id 'myselect'>
			<option id = "multiple_choice" value = "multiple_choice" onclick = 'create_multiple_choice()'>Multiple Choice</option>
			<option id = "true_false" value = "true_false" onclick = 'create_true_false()'>True/False</option>
			<option id = "short_answer" value = "short_answer" onclick = 'create_short_answer()'>Short Answer</option>
			<option id = "matching" value = "matching" onclick = 'create_matching()'>Matching</option>
			<option id = "missing_word" value = "missing_word" onclick = 'create_missing_word()'>Missing Word</option>
			<option id = "numerical_question" value = "numerical_question" onclick = 'create_numerical_question()'>Numerical Question</option>
			<option id = "essay" value = "essay" onclick = 'create_essay()'>Essay</option>
			<option id = "description" value = "description" onclick = 'create_description()'>Description</option>
		</select>
		<form>
			<div id = "questions-wrapper">
				
			</div>
			<input type = "submit" value = "Submit" />
		</form>
		
	</div>
</body>	
</html>