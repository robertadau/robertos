<?php

$myfile = fopen("duomenys.html", "r") or die("Unable to open file!");
echo fread($myfile, filesize("duomenys.html"));
fclose($myfile);

?>



<?php
$file = fopen("duomenys.html", mode: "r");
echo fgets($file);
fclose($file);
?>

