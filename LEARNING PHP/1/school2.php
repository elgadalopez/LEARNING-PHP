<?php

class PersonInSchool {
    public string $name;
    public int $age;
    public string $gender;
    public int $class;

    public function _construct($name, $age, $gender, $class)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->class = $class;
    }
}

$person =new PersonInSchool("Tupac", "23", "Man", "11");
$people =new PersonInSchool("Usher", "23", "Man", "15");

    
var_dump($person);
var_dump($people);
echo $people->name;
