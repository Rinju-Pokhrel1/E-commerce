<!-- 10.write a PHP program to demonstrate working of classes and objects. -->
<?php
class Car {
    public $make;
    public $model;
    public $year;
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    public function displayInfo() {
        return "Car: $this->make $this->model ($this->year)";
    }
}
$car1 = new Car("Toyota", "Corolla", 2020);
$car2 = new Car("Honda", "Civic", 2019);


echo $car1->displayInfo() . "<br>";
echo $car2->displayInfo();
?>
