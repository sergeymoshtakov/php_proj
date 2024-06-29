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
}