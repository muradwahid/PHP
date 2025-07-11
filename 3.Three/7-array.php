<?php

// $students = array("rahim","karim",'123',"monir");

// // $students[2] ="shafik";


// // array_shift first dik theke remove kore modify kore dei
// array_shift($students);
// // array_shift first a data add kore
// array_unshift($students,'murad');


// // array_pop last dik theke remove kore modify kore dei
// array_pop($students);
// // array_push last a data add kore dei
// array_push($students,"murad");


// //count array ar length check kore
// $n = count($students);

// for ($i=0; $i <$n ; $i++) { 
//   echo $students[$i]."\n";
// }

//associative array
$students=[
  '12'=>'Hasan',
  '13' =>'Karim',
  '20' =>'Jalal'
];
// echo $students['12'];

$foods =[
  'vagitables'=>'brinjal, brocolli, carrot,capsicam',
  'fruits'=>'orange, banana, apple',
  'drinks' =>'water, milk'
];

// echo count($foods);

// foreach($foods as $key=>$value){
//   echo $key." ".$value."\n";
// }

//array ar key and value ber kore jai
$keys =array_keys($foods);
$values =array_values($foods);
// print_r($keys);

// for ($i=0; $i <count($keys) ; $i++) { 
//   echo $foods[$keys[$i]];
// }


// $vegetables = explode(', ','brinjal, brocolli, carrot,capsicam');

// $vegetablesString = join(', ',$vegetables);

// print_r($vegetablesString);

// echo count($vegetables);

$person = array('fName'=>'Hello','lName'=>'World');
$newPerson=$person;
$newPerson['lName']='Pluto';
// print_r($person);
// print_r($newPerson);

// remove data
unset($person['fName']);

// print_r($person);

//check is data exist or not
// $name ='';
// if (isset($name)) {
//   echo "Name is Set";
// } else {
//   echo "Name is empty";
// }

// echo "\n";

// if (empty($name)) {
//   echo "Name is Set";
// } else {
//   echo "Name is empty";
// }

$fruits= array('apple','banana','orange','dates','mango');
// $someFruits=array_slice($fruits,2);
// $someFruits=array_slice($fruits,2,2);
// $someFruits=array_slice($fruits,2,-1);
$someFruits=array_slice($fruits,2,-1,true);
// print_r($someFruits);
// sort($fruits);
// print_r($fruits);

//search
$numbers =array(1,12,1243,"a"=>4325,52,45,23);
$numbers2 =array(51,2,13,"a"=>4325,52,45,3);
if (in_array(52,$numbers)) {
  echo "52 is found";
} 
echo "\n";
$offset= array_search(52,$numbers);
echo $offset;
echo "\n";

print_r(key_exists("a",$numbers));

//common
$common = array_intersect($numbers,$numbers2);
//check key value
$common2 =array_intersect_assoc($numbers,$numbers2);
print_r( $common);
print_r($common2);

//difference
$diff= array_diff($numbers,$numbers2);
print_r($diff);
