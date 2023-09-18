<?php
$x=10;
$y=20;
$temp=0;

echo "Before swap ";
echo "<br>";
echo "x=$x and y=$y ";
echo "<br>";
$temp=$x;
$x=$y;
$y=$temp;


echo "After swap ";
echo "<br>";
echo "x=$x and y=$y \n";

/*output:
Before swap
x=10 and y=20
After swap
x=20 and y=10*/
?>
