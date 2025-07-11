<?php
//set data for json format
$filename = "/home/murad-wahid/Desktop/PHP/7.file/file8.txt";
$students = array(
  array(
    'fname'=>'Murad',
    'lname'=> 'Wahid',
    'age'=> 26,
    'class'=>16,
    'roll'=>50
  ),
  array(
    'fname'=>'Rahim',
    'lname'=> 'Ahmed',
    'age'=> 26,
    'class'=>16,
    'roll'=>50
  ),
  array(
    'fname'=>'Karim',
    'lname'=> 'Ahmed',
    'age'=> 26,
    'class'=>16,
    'roll'=>50
  )
);

// $encodedData= json_encode($students);

// file_put_contents($filename,$encodedData,LOCK_EX);

$data = file_get_contents($filename);
// $allStudents = json_decode($data);
$allStudents = json_decode($data, true);

print_r($allStudents);