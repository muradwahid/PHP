<?php 

//for loop
// for ($i = 1; $i<= 20;$i+=2){
//   echo $i;
//   echo PHP_EOL;
//   for ($j=0; $j<$i; $j++){
//     echo "*";
//   }
// }

// for ($i= 10;$i>0; $i--){
//   echo $i;
//   echo PHP_EOL;

// }

// $n=3;
// for($i=$n,$factorial =1;$i>1; $i--){
//   $factorial = $factorial * $i;
// }
// echo $factorial;


//while loop
// $i=0;
// while ($i<=10){
//   $i++;
//   echo $i.PHP_EOL;
// }

// while($i <5){
//   echo $i.PHP_EOL;
//   $i++;
// }

// $j = 0;
// while ($j++ < 5){
//   echo $j.PHP_EOL;
// }


//do loop
// $i=0;
// do{
//   $i++;
//   echo $i.PHP_EOL;
// }while($i<10);

//go to loop
// $i=0;
// a: $i++;
// echo $i.PHP_EOL;
// if($i<=10) goto a;


//break and continue

// for ($i = 20 ; $i <50 ; $i++){
//   if($i%13==0) {
//     echo $i.PHP_EOL;
//     break;
//   }
// }


// for ($i = 20 ; $i <30 ; $i++){
//   if($i<27) {
//     continue;
//   }
//   echo $i.PHP_EOL;
// }


//fibonacci series
$veryOld= 0;
$old=1;
$new=1;

for ($i = 0;$i<10;$i++){
  echo $veryOld." ";
  $old=$new;
  $new=$old+$veryOld;
  $veryOld=$old;
}