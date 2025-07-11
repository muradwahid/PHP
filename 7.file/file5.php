<?php
$filename = "/home/murad-wahid/Desktop/PHP/7.file/f2.txt";

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

// $fp= fopen($filename,'w');
// foreach($students as $student){
//   $data = sprintf("%s,%s,%s,%s,%s\n",$student['fname'],$student['lname'],$student['age'],$student['class'],$student['roll']);
//   fwrite($fp,$data);
// }
// fclose($fp);

// $fp= fopen($filename,'r');
// while ($data= fgets($fp)) {
//   $student=explode(",",$data);
//   printf("Name = %s %s\nAge = %s\nClass = %s\nRoll = %s\n\n",$student[0],$student[1],$student[2],$student[3],$student[4]);
// }

//added new data
$student = array(
  'fname' =>'Kamal',
  'lname' => 'Ahmed',
  'age' =>13,
  'class' =>7,
  'roll' =>17
);

// $fp= fopen($filename,'a');
// fputcsv($fp,$student);
// fclose($fp);

//remove data
$data = file($filename);

print_r($data);
unset($data[1]);
