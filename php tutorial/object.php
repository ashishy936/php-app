<?php
class Student {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}
$student1 = new Student("Alice", 20);
$student2 = new Student("Bob", 22);
echo $student1->introduce() . "<br>";
echo $student2->introduce() . "<br>";
?>