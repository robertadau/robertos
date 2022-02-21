<?php

$myfile = fopen("duomenys.html", "r") or die("Unable to open file!");
echo fread($myfile, filesize("duomenys.html"));
fclose($myfile);

?>



<?php

echo file_get_contents("duomenys.html");

?>


<?php
echo file_put_contents("duomenys.html","Labas <Roberta>");
?>
