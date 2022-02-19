<?php
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 
76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp) {
    $tot_temp += $temp;
}
$avg_high_temp = $tot_temp/$temp_array_length;
echo "Vidutinė temperatūra : ".$avg_high_temp."
";
sort($temp_array);
echo "<br>";
echo " Penkios žemiausios temperatūros : " ;
for ($i=0; $i< 5; $i++)
{
    echo $temp_array[$i].", ";
}
echo "<br>";
echo "Penkios aukščiausios temperatūros :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
    echo $temp_array[$i].", ";
}
?>



