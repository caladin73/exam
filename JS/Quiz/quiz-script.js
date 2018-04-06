var currentQuestion = 0; //index of current question
var score = 0; //current score
var totQuestions = questions.length;


var container = document.getElementById('quizContainer'); //from div container
var questionEl = document.getElementById('question'); //question element
var opt1 = document.getElementById('opt1'); // 4 option in each question
var opt2 = document.getElementById('opt2');
var opt3 = document.getElementById('opt3');
var opt4 = document.getElementById('opt4');
var nextButton = document.getElementById('nextButton'); // next question, if clicked a question
var resultCont = document.getElementById('result'); //result container

function loadQuestion (questionIndex) { //method for loading question from array index
	var q = questions[questionIndex]; //if index = 0 first question is loaded
	questionEl.textContent = (questionIndex + 1) + '. ' + q.question; //send the text content to container
	opt1.textContent = q.option1; //4 options in each question
	opt2.textContent = q.option2;
	opt3.textContent = q.option3;
	opt4.textContent = q.option4;
};

function loadNextQuestion () {
	var selectedOption = document.querySelector('input[type=radio]:checked'); // method to check if an answer is selected
	if(!selectedOption){ //checks if no answer is selected
		alert('Please select your answer!'); //alert message
		return;
	}
	var answer = selectedOption.value; // value from answer
	if(questions[currentQuestion].answer == answer){ //if the answer is right (selected option = array.answer)
		score += 10; //add 10 point to score for right answer
	}
	selectedOption.checked = false; //uncheck radion optinn for next question
	currentQuestion++; //adds 1 to current quiestion index
	if(currentQuestion == totQuestions - 1){ //if this is the end, no more question
		nextButton.textContent = 'Finish';
	}
	if(currentQuestion == totQuestions){ //if the last question is completed
		container.style.display = 'none'; // hide the container, that shows the questions options
		resultCont.style.display = ''; //show result container
		resultCont.textContent = 'Your Score: ' + score; //show score
		return;
	}
	loadQuestion(currentQuestion); //load next question
}

loadQuestion(currentQuestion); //load first question