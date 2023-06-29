<?php

// user input..
echo "Enter the first number:";
$a=fgets(STDIN);
echo "Enter the second number:";
$b=fgets(STDIN);

// processing...
$sum=$a+$b;
$sub=$a-$b;
$mul=$a*$b;
$div=$a/$b;
$mod=$a%$b;
// output..
echo "sum=$sum\n";
echo "sub=$sub\n";
echo "mul=$mul\n";
echo "div=$div\n";
echo "mod=$mod";
?>