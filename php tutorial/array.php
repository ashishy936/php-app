<?php
$arr = array("Apple", "Banana", "Cherry");
echo "Array: " . implode(", ", $arr) . "<br>";
$numbers = [1, 2, 3, 4, 5];
echo "Numbers: " . implode(", ", $numbers) . "<br>";
$associativeArray = array("name" => "John", "age" => 30, "city" => "New York");
echo "Associative Array: Name - " . $associativeArray["name"] . ", Age - " . $associativeArray["age"] . ", City - " . $associativeArray["city"] . "<br>";
$multiDimensionalArray = array(
    array("name" => "Alice", "age" => 25),
    array("name" => "Bob", "age" => 28),
    array("name" => "Charlie", "age" => 22)
);
echo "Multi-dimensional Array: <br>";
foreach ($multiDimensionalArray as $person) {
    echo "Name: " . $person["name"] . ", Age: " . $person["age"] . "<br>";
}
?>