var questionNum = 1; //holds what question we are on for adding id/names to different questions

$(document).ready(function() {
	$('#javascript_message').hide(); //Since JavaScript is on, we can hide the message telling the user that javascript needs to be enabled. 
});

function create_multiple_choice()
{
	//create string for new div
	var currentQuestion;
	currentQuestion = "<div id = \'question" + questionNum + "\'>";
	currentQuestion += "Question #" + questionNum + ": Multiple Choice<br>";
	currentQuestion += "Question Title: <input type = \'text\' name = \'questionTitle" + questionNum + "\' /><br>";
	currentQuestion += "Question Text: <input type = \'text\' name = \'questionText" + questionNum + "\' /><br>";
	
	currentQuestion += "</div><br>";
	$("#questions-wrapper").append(currentQuestion); //append the new div with question fields within
	questionNum++; //increment the question we are on by 1
}

function create_true_false()
{

}

function create_short_answer()
{

}

function create_matching() {

}

function create_missing_word()
{

}

function create_numerical_question()
{

}

function create_essay()
{

}