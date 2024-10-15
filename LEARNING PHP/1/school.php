<?php

class personSchool 
{
    public string $name;
    public int $age;
    public string $gender;

    public function __construct($name, $age, $gender) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function run($type)
    {
        echo "The $type has run on the roan way";
    }
}

class students extends personSchool {}
class teacher extends personSchool {}
class employe extends personSchool {}

$students = new personschool("sole", 19, "laki-laki");
$teacher = new personschool("masha", 17, "perempuan");
$employe = new personschool("haha", 16, "laki-laki");

// $personclass = new personschool;
// $personclass->name = "sole";
// $personclass->age = 19;
// $personclass->gender = "laki-lak";


// $personClass = new personschool;
// $personClass->name = "Masha";
// $personClass->age = 17;
// $personClass->gender = "perempuan";


var_dump($students);
var_dump($teacher);
var_dump($employe);