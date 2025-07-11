<?php

//logical operators



$n = 12;

if ($n % 2 == 0){
    echo "{$n} is an  even number";
}else {
  echo "{$n} is a odd number";
}
echo "\n"; 
if ($n >10){
  echo "{$n} is greater than 10";
}
echo "\n"; 


$year = 2016;
if ($year % 4 ==0 && ($year % 100 !=0 || $year ==400)) {
  echo "{$year} is a leap year";
}else {
  echo "{$year} is not a leap year";
}


?>