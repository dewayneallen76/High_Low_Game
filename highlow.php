<?php 
// INSTRUCTIONS
echo "----------------------------------------------------" .PHP_EOL;
echo "-------------WELCOME TO MY HIGH/LOW GAME------------" .PHP_EOL;
echo "----------------------------------------------------" .PHP_EOL;
echo "A random number will be generated between 1 and 100 " .PHP_EOL;
echo "You try to guess the number. Based on your response " .PHP_EOL;
echo "you will be told if the number is HIGHER or LOWER.  " .PHP_EOL;
echo "Keep entering a number until you get the right one! " .PHP_EOL;
echo "Enter 0 to exit game, if you are a quitter."		    .PHP_EOL;
echo "----------------------------------------------------" .PHP_EOL; 
// ASKS PLAYER FOR FIRST NAME 
fwrite(STDOUT, 'What is your first name? ');
$firstName = trim(fgets(STDIN));
fwrite(STDOUT, "Hello $firstName! Lets play! ".PHP_EOL);
fwrite(STDOUT, "Enter a minimum number: ".PHP_EOL);
$min = trim(fgets(STDIN));
fwrite(STDOUT, "Enter a maximum number: ".PHP_EOL);
$max = trim(fgets(STDIN));

// SETUP SO THAT ARGUMENTS CAN BE PASSED TO CHANGE THE MINIMUM AND MAXIMUM NUMBER. IF NO ARGUMENTS ARE PASSED IT WILL STILL CREATE A RANDOM NUMBER BETWEEN 1 AND 100. 
// VARIABLES FOR MINIMUM AND MAXIMUM NUMBER 
// $min = 1;
// $max = 100;

if(isset($argv[1])) {
	$min = $argv[1];
}
if(isset($argv[2])) {
	$max = $argv[2];
}
// VAR_DUMPS USED WHEN TESTING TO VERIFY INFORMATION IS PASSING
// var_dump($argc);
// var_dump($argv);

$randomNumber = mt_rand($min, $max); // RANDOM NUMBER GENERATOR BETWEEN 1 AND 100
$numberOfTries = 0; // COUNTER TO KEEP TRACK OF THE NUMBER OF TIMES USER GUESSED
fwrite(STDOUT, "Guess a number between $min and $max: ".PHP_EOL); // NUMBERS WILL CHANGE DEPENDING ON IF AN ARGUMENT IS PASSED OR NOT. 

do {
	$numberOfTries += 1;
	echo "Guess? ";
	$userGuess = trim(fgets(STDIN));
	if($userGuess == 0) {
		echo "Try again another time!" .PHP_EOL;
		exit(0);
	}
	if($userGuess > $randomNumber) {
		echo "Lower".PHP_EOL;
	} else if($userGuess < $randomNumber) {
		echo "Higher" .PHP_EOL;
	} else if($userGuess == $randomNumber) {
		echo "Good guess! The number is $randomNumber!" .PHP_EOL;
		echo "Way to go it only took you $numberOfTries guesses to get it!" .PHP_EOL;
	}
} 
while($userGuess != $randomNumber); 


		





 ?>