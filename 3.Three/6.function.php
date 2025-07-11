<?php
//parameter type hint;


// function factorial ( int $x){
//   $result =1;
//   for($i=$x;$i>1;$i--){
//     $result = $result * $i;
//   }
//   return $result;
// }

// function factorial ($x){

//   $result =1;
//   if(gettype($x)!="integer") return "invalid";
//   for($i=$x;$i>1;$i--){
//     $result = $result * $i;
//   }
//   return $result;
// }
// $x="1";

// echo "Factorial of {$x} is ". factorial($x);

//recursive function

// function printNumber ($counter,$end,$stepping){
//   if ($counter > $end) {
//     return;
//   }
//   echo $counter."\n";
//   $counter+=$stepping;
//   printNumber($counter,$end,$stepping);

// }

// printNumber(21,37,5);


// function fibonacci($old,$new,$end){
//   static $start;
//   $start =$start ?? 1;
//     if ($start>$end) {
//       return;
//     }
//     $start++;
//     echo $old . " ";
//     $_temp = $old + $new;
//     $old =$new;
//     $new = $_temp;
//     fibonacci($old,$new,$end);
// }

// fibonacci(0,1,15);


function factorial($n){
  if($n<=1){
    return 1;
  }
 return $n * factorial($n-1);
}

echo factorial(5);