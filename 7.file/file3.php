<?php

$filename = "/home/murad-wahid/Desktop/PHP/7.file/f2.txt";

$fp = fopen($filename,'r+');
$line = fgets($fp);
echo $line;
fwrite($fp,"moon");


file_put_contents($filename,"Earth",FILE_APPEND); // save previous data
file_put_contents($filename,"Jupiter",FILE_APPEND | LOCK_EX);