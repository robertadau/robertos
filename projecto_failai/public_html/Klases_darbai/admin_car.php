<?php

session_start();

if (array_key_exists('username', $_SESSION)) {
    echo 'Tai ADMIN panele';
    echo '<br><a href="logout.php">Atsijungti</a>';

    include '../src/Entities/Car.php';

    $car = new Car( 'green', currentSpeed: '0 km/h', millage: 10);
    echo 'We are driving' . $car->getColor() . 'car<br>';
    echo 'Current speed is: ' . $car->getCurrentSpeed() . '<br>';
    echo 'Current millage is: ' . $car->getMillage() . '<br>';
    $newSpeed = '50km/h';
    $car->changeColor(color: 'red');
    echo 'Currently We are driving' . $car->getColor() . 'car at' . $newSpeed . '<br>';
    $car->setCurrentSpeed($newSpeed);
    $car->drive(distance: 75);
    // ...
    $car->drive(distance: 75);
    echo 'Current speed is: ' . $car->getCurrentSpeed() . '<br>';
    echo 'Current millage is: ' . $car->getMillage() . '<br>';

    $car2 = new Car(color: 'blue');
    $newSpeed2 = '70km/h';
    echo 'Currently We are driving' . $car2->getColor() . 'car at' . $newSpeed2 . '<br>';

}  else {
    header('location: login.html');
}

?>


