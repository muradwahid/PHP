<?php
  $n=12;
  $numberInWord = 12 == $n ? "Twelve" : "A Number";
  echo $numberInWord;
  echo "\n";

  $result = $n % 2 == 0 ? "Even" : "Odd";
  echo $result;
  echo "\n";


  //switch case
  $r = $n % 2;
  switch($r){
    case 0:
      echo "{$n} is an even number";
      break;
    default :
      echo "{$n} is an odd number";
  }

  $color = "red"; 
  switch($color){
    // case "red":
    //   echo "Red is our favorite color";
    //   break;
    // case "green":
    //   echo "Green is our favorite color";
    //   break;
    case "red":
    case "green":
      echo ucwords($color)." is our favorite color";
      break;
    case "blue":
      echo "Blue is not our favorite color";
      break;
    default:
      echo "This color is ok";
  }

  // nested switch case
  // abs() converted to absolute value
  $n = 12;
  $r = $n % 2;
  switch($r){
    case  0:
      switch($n){
        case $n>0 :
          echo "{$n} is a positive even number";
          break;
        case $n<0 :
          echo "{$n} is a negative even number";
          break;
      }
      break;
    default :
          switch($n){
        case $n>0 :
          echo "{$n} is a positive odd number";
          break;
        case $n<0 :
          echo "{$n} is a negative odd number";
          break;
      }
  }

switch (true) {
  case ($r==0 && $n>0):
    echo "{$n} is a positive even number";
    break;
  case ($r==0 && $n<0):
    echo "{$n} is a negative even number";
    break;
  case ($r==1 && $n>0):
    echo "{$n} is a positive odd number";
    break;
  case ($r==-1 && $n<0):
    echo "{$n} is a negative odd number";
    break;
}


$string = "8balls";
switch ($string) {
  case (string) "9balls":
    echo "Nine ball";
    break;
  case (string) 8:
    echo "8";
    break;
  case (string) "8balls":
    echo "Eight ball";
    break;
}

// alternate syntax

if ($n%2 ==0):
  echo "{$n} is an even number";
  echo PHP_EOL;
else:
  echo "{$n} is an odd number";
  echo PHP_EOL;
endif;

switch ($n%2):
  case 0: 
    echo "{$n} is an even number";
    echo PHP_EOL;
    break;
  case 1:
    echo "{$n} is an odd number";
    echo PHP_EOL;
    break;
  endswitch;



?>