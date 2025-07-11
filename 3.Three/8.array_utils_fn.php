<?php

$numbers = array(1,2,3,4,5,6,7,8,9,10);

function square($n){
  printf("Square of %d is %d\n",$n,$n*$n);
}
// array_walk($numbers,'square');

function cube($n){
  return $n*$n*$n;
}

// $newArr = array_map('cube',$numbers);
// print_r($newArr);

function even($n){
  return $n%2==0;
}

$newArr = array_filter($numbers,'even');
// print_r($newArr);

$persons =array('sujon','kabir','sabana','salam');

function filterByS($name){
  return $name[0]=='s';
}

$newPersons = array_filter($persons,'filterByS');
// print_r($newPersons);

$numbers = array(1,2,3,4,5,6,7,8,9,10);

function sum($oldNum,$newNum){
  return $oldNum+ $newNum;
}

$sum = array_reduce($numbers,'sum');
// echo $sum;

$color = array(122,233,65);

list ($red,$green,$blue)=$color;

// echo $red." ".$green." ".$blue; 

$numbers = array();

for ($i=0; $i <21 ; $i++) { 
  array_push($numbers,$i);
}
// print_r($numbers);

$numbers=range(12,30,1);
// print_r($numbers);

//random
$random = mt_rand(0,32);
echo $random;

