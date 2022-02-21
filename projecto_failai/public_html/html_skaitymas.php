<?php

$myfile = fopen("duomenys.html", "r") or die("Unable to open file!");
echo fread($myfile, filesize("duomenys.html"));
fclose($myfile);

?>



<?php
$x = "Hello world!";

echo $x;
echo "<br>"

?>


