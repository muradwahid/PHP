<?php
$filename ="/home/murad-wahid/Desktop/PHP/video.txt";
if (is_readable($filename)) {
$fp = fopen($filename,'r');
$line = fgets($fp);
while ($line = fgets($fp)) {
  echo $line;
}
echo $line;
rewind($fp);
while ($line = fgets($fp)) {
  echo $line;
}

fclose($fp);

//full file read
$data = file($filename);
print_r($data);

echo "\n";

$data =file_get_contents($filename);
echo($data);
}