<?php

class vehicle {
    public string $brand;
    public string $model;
    public int $year;

    public function _construct($brand, $model, $year)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
}

$car =new Vehicle("Honda", "SUV", "2024");
$motorcycle =new Vehicle("R1M", "Sport", "2024");

    
var_dump($car);
var_dump($motorcycle);
echo $motorcycle->brand;
