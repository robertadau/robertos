<?php

session_start();

if (array_key_exists('username', $_SESSION)) {
    echo 'Tai ADMIN panele';
    echo '<br><a href="logout.php">Atsijungti</a>';


}  else {
    header('location: login.html');
}

?>