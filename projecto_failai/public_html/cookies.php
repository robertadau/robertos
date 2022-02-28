<?php

$sausainelio_vardas = 'vartotojas';
$sausainelio_reiksme = 'Roberta Daugėlaitė';
setcookie($sausainelio_vardas, $sausainelio_reiksme, time() + 10, '/');
// 86400 = 1 diena

if(!isset($_COOKIE['vartotojas'])) {
    echo 'Sausainėlis pavadinimu "vartotojas" nera sukurtas! Mes jį ką tik sukūrėme';
} else {
    echo 'Sausainėlis "vartotojas" yra sukurtas!<br>';
    echo 'Jo reikšmė yra: ' . $_COOKIE['vartotojas'];
}
echo '<pre>';
var_dump($_GET);
