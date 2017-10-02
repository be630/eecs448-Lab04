<?php

//access the global array called $_POST to get the values from the text fields
$response1 = $_POST["a1"];
$response2 = $_POST["a2"];
$response3 = $_POST["a3"];
$response4 = $_POST["a4"];
$response5 = $_POST["a5"];

$score = 0;
$percentCorrect = 0;

//these if statements are to add up the correct answers
if($response1 == "22")
{
	$score = $score + 1;
	$percentCorrect = $percentCorrect + 20;
}
if($response2 == "Mars")
{
	$score = $score + 1;
	$percentCorrect = $percentCorrect + 20;
}
if($response3 == "None")
{
	$score = $score + 1;
	$percentCorrect = $percentCorrect + 20;
}
if($response4 == "10")
{
	$score = $score + 1;
	$percentCorrect = $percentCorrect + 20;
}
if($response5 == "NoteBook")
{
	$score = $score + 1;
	$percentCorrect = $percentCorrect + 20;
}

echo "Question 1: What is (5 x 5) + (-18 / 3)<br>";
echo "You Answered: " . $response1 . "<br>";
echo "Correct Answer: 22<br><br>";

echo "Question 2: What is the fourth planet from the sun in our solar system?<br>";
echo "You Answered: " . $response2 . "<br>";
echo "Correct Answer: Mars<br><br>";

echo "Question 3: Which Color is not a Primary Color<br>";
echo "You Answered: " . $response3 . "<br>";
echo "Correct Answer: None<br><br>";

echo "Question 4: How many feet are in 120 inches?<br>";
echo "You Answered: " . $response4 . "<br>";
echo "Correct Answer: 10<br><br>";

echo "Question 5: Which of the following does not belong?<br>";
echo "You Answered: " . $response5 . "<br>";
echo "Correct Answer: NoteBook<br><br><br>";

echo "You answered " . $score . " of the questions correctly!<br>";
echo "Your Score is: " . $percentCorrect . "%<br>";




?>