<?php
$greeting = "Hi everyone, I'm Ashish";
echo $greeting ;
// String concatenation
echo "<br> <h2>String Concatenation</h2>";
$firstName = "Ashish";
$lastName = "Yadav";
$fullName = $firstName . " " . $lastName;
echo '$firstName = "Ashish";<br>
$lastName = "Yadav"<br>
$fullName = $firstName . " " . $lastName;<br>
'."<br>"."Full Name: " . $fullName ;
// String interpolation
echo "<br> <h2>// String interpolation</h2>";
echo 'Hello, my name is $firstName $lastName<br>';
echo "Hello, my name is $firstName $lastName";
// String functions
echo "<br> <h2>// String functions</h2>";
$sentence = "PHP is a popular scripting language.";
echo 'Length of sentence: . strlen($sentence) . <br>';
echo "Length of sentence: " . strlen($sentence) . "<br>";
echo "<br>"."Uppercase: " . strtoupper($sentence) . "<br>";
echo "Lowercase: " . strtolower($sentence) . "<br>";
echo "Replace 'PHP' with 'JavaScript': " . str_replace("PHP", "JavaScript", $sentence) . "<br>";
echo "Substring (0-10): " . substr($sentence, 0, 10) . "<br>";
?>