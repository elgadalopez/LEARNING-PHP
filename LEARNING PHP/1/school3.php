<?php

class PersonInSchool {
    public string $name;
    public int $age;
    public string $gender;
    public int $class;

    public function __construct($name, $age, $gender, $class)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->class = $class;
    }

    public function run($school)
    {
        echo "The $school has 15km in my house";
    }
}

class Person extends PersonInSchool{}
class People extends PersonInSchool{}


$person =new PersonInSchool("Tupac", "23", "Man", "11");
$people =new PersonInSchool("Usher", "23", "Man", "15");

    
var_dump($person);
var_dump($people);
echo $people->name;
