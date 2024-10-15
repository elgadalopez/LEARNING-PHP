<?php

class vehicle {
    public string $brand;
    public string $model;
    public int $year;
}

$car=new vehicle;
$car->brand = "Honda";
$car->model = "SUV";
$car->year = "1982";

   
    $motorcycle=new vehicle;
    $motorcycle->brand = "Yamaha R1M";
    $motorcycle->model = "Sport";
    $motorcycle->year = "2024";

var_dump($car);
var_dump($motorcycle);
echo $motorcycle->brand;