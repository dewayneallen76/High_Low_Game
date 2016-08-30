<?php 
// INSTRUCTIONS
echo "----------------------------------------------------" .PHP_EOL;
echo "-------------WELOME TO MY HIGH/LOW GAME-------------" .PHP_EOL;
echo "----------------------------------------------------" .PHP_EOL;
echo "A random number will be generated between 1 and 100 " .PHP_EOL;
echo "You try to guess the number. Based on your response " .PHP_EOL;
echo "you will be told if the number is HIGHER or LOWER.  " .PHP_EOL;
echo "Keep entering a number until you get the right one! " .PHP_EOL;
echo "Use CTRL-C to exit game, if you are a quitter."		.PHP_EOL;
echo "----------------------------------------------------" .PHP_EOL; 

$randomNumber = mt_rand(1,100); // RANDOM NUMBER GENERATOR BETWEEN 1 AND 100
$numberOfTries = 0; // COUNTER TO KEEP TRACK OF THE NUMBER OF TIMES USER GUESSED
fwrite(STDOUT, 'Guess a number between 1 and 100: ') .PHP_EOL;

do {
	$numberOfTries += 1;
	echo "Guess? ";
	$userGuess = trim(fgets(STDIN));
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