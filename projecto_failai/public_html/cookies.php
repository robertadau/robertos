<?php

$sausainelio_vardas = 'vartotojas';
$sausainelio_reiksme = 'Roberta Daugelaite';
setcookie($sausainelio_vardas, $sausainelio_reiksme, time() + (86400 * 30), '/');
// 86400 = 1 diena


if(!isset($_COOKIE['vartotojas'])) {
    echo 'Sausainėlis pavadinimu "vartotojas" nera sukurtas!';
} else {
    echo 'Sausainėlis "vartotojas" yra sukurtas!<br>';
    echo 'Jo reikšmė yra: ' . $_COOKIE['vartotojas'];
}
?>
