<?php

$myfile = fopen("duomenys.html", "r") or die("Unable to open file!");
echo fread($myfile, filesize("duomenys.html"));
fclose($myfile);

?>



<?php
$x = "Labas pasauli";

echo $x;
echo "<br>"

?>



