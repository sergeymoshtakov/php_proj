<?php

class Car
{ 
    public $name, $price, $image;
      
    function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    function display()
    {
        echo "<div class='car-item'>
                <p>$this->name</p>
                <p>$this->price</p>
                <button onclick='bookCar()'>Book</button>
            </div>";
    }

    public static function getAllCars($pdo) {
        $stmt = $pdo->query('SELECT * FROM cars');
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Car');
    }
}