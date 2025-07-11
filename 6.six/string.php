<?php
// $string = "Hello World";
// echo substr($string,1,4);
// $length = strlen($string);

// echo substr($string,$length-3);
// echo substr($string,-3);
// echo substr($string,-3,1);


//reverse str

// $length = strlen($string) - 1;

// for ($i=$length; $i>=0 ; $i--) { 
//   echo $string[$i];
// }

// echo PHP_EOL;
// $length= strlen($string);
// for ($i=1; $i <= $length ; $i++) { 
//   echo $string[$i * -1];
// }
// echo PHP_EOL;

// echo strrev($string);

//explode string

// $string = "Hello World, How are you";
// $part = explode(", ",$string);
// print_r($part);
// echo "\n";

// $original= join(" ",$part);
// $original= implode(" ",$part);
// echo $original;

//search string

$string = "Quick brown fox jumps over the lazy dog";
// case sensitive
// echo strpos($string,"fox");
// case insensitive
// echo stripos($string,"fox");

// replace string

// case sensitive
$replaceString = str_replace('brown','Brown',$string);
// echo $replaceString;

// case insensitive
$replaceString = str_ireplace('Brown','red',$string);
// echo $replaceString;

$string = "  hello \n";
$string = trim($string,' ');
echo $string;

//word wrap
$string = "Quick brown fox jumps over the lazy dog";
echo wordwrap($string,26,"\n",true);

// nl to br

