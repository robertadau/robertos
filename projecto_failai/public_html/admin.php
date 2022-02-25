<?php

session_start();

if (array_key_exists('username', $_SESSION)) {
    echo 'Tai ADMIN panele';
    echo '<br><a href="logout.php">Atsijungti</a>';

    include '../src/Entities/Car.php';

    $car = new Car();
    $car->color = 'red';
    echo 'We are driving' . $car->getColor() . 'car<br>';
    echo 'Current speed is: ' . $car->getCurrentSpeed() . '<br>';
    echo 'Current milage is: ' . $car->getMilage() . '<br>';
    $newSpeed = '50km/h';
    echo 'Currently we are driving' . $car->getColor() . 'car at' . $newSpeed . '<br>';


}  else {
    header('location: login.html');
}

?>