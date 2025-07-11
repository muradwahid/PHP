<?php
$filename = "/home/murad-wahid/Desktop/PHP/7.file/file7.txt";

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

//added new data
$student = array(
  'fname' =>'Kamal',
  'lname' => 'Ahmed',
  'age' =>13,
  'class' =>7,
  'roll' =>17
);


// $data = serialize($students);
// file_put_contents($filename,$data,LOCK_EX);

$dataFromFile = file_get_contents($filename);
$allStudents = unserialize($dataFromFile);
print_r($allStudents);


//add new data

array_push($allStudents,$student);

// unset($allStudents[1]);

$data = serialize($students);
file_put_contents($filename,$data,LOCK_EX);
