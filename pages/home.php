<?php
include_once ('./model/car.php');

echo "<p>Welcome to the home page!</p>";
?>
<h1>Our cars</h1>

<div class="car-list">
<?php

for ($i = 0; $i < 10; $i++) {
    $car = new Car("Car $i", "$i.000$", "images/car$i.jpg");
    $car->display();
}
?>
</div>

<script src="js/script.js"></script>

<?php

