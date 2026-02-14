<?php
echo "<h1>Data types in PHP:</h1>";
// String
echo "<h2>String</h2>";
$name = "John Doe";
echo "String: " . $name ;

// Integer
echo "<h2>Integer</h2>";
$age = 30;
echo "Integer: " . $age . "<br>";

// Float
echo "<h2>Float</h2>";
$price = 19.99;
echo "Float: " . $price . "<br>";

// Boolean
echo "<h2>Boolean</h2>";
$isStudent = true;
echo "Boolean: " . ($isStudent ? "true" : "false") . "<br>";
// Array
echo "<h2>Array</h2>";
$fruits = ["Apple", "Banana", "Orange"];
echo "Array: " . implode(", ", $fruits) . "<br>";
// Object
echo "<h2>Object</h2>";
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}
$person = new Person("Alice", 25);
echo "Object: Name - " . $person->name . ", Age - " . $person->age . "<br>";
// Null
echo "<h2>Null</h2>";
$address = null;
echo "Null: " . ($address === null ? "null" : $address) . "<br>";
?>