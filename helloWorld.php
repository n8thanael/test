<?php

echo 'Hi there people<br>';

echo 'Let\'s comit this change<br>';

echo 'I think the file should be updating on the server<br>';

echo "<p>Does this even work?</p>";

function addition($foo){
	for ($i = 0 ; $i < 10 ; $i++){
	echo $foo + $foo + $i ."<br>";
	}
}

addition(5);
echo "<br>";
addition(5);