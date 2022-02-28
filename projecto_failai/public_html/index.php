<?php
$ceu = array("Italy" => "Rome", "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels", "Denmark" => "Copenhagen",
    "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana",
    "Germany" => "Berlin", "Greece" => "Athens",
    "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London",
    "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague", "Estonia" => "Tallin",
    "Hungary" => "Budapest", "Latvia" => "Riga",
    "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw") ;
asort($ceu) ;
foreach($ceu as $valstybė => $sostinė)
{
    echo "$valstybė sostinė yra $sostinė". "<br/>" ;
}
?>

/* 1 uzduotis, c */

<?php

phpinfo();

$masyvasA = [
[1,2,3,4,5,6,7,8,9],
['a', 's', 'd'],
[
[1,2,3,4,5,6,7,8,9],
[1,2,3,4,5,6,7,8,9],
[1,2,3,4,5,6,7,8,9],
[1,2,3,4,5,6,7,8, asdfasd],
]
];

$f = [9,8,7,6,5,4,5]

?>

/* kita uzduotis */




<?php

$masyvasA = [
    [1, 2, 3, 4, 5, 6, 7, 8, 9],
    [1, 2, 3, 4, 5, 6, 7, 8, 9],
    [1, 2, 3, 4, 5, 6, 7, 8, 9],
    [1, 2, 3, 4, 5, 6, 7, 8, 9],
    ];

foreach ($masyvas as $key => $value) {
    echo "Pirmas lygis: ciklas $key \n";
    foreach ($value as $key2 => $value2) {
        echo "Antras lygis: indeksas $key2 reiksme $value2 \n";
    }
}

?>

