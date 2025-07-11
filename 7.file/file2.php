<?php

$filename = "/home/murad-wahid/Desktop/PHP/7.file/f2.txt";
if (is_writeable($filename)) {
  $existingData = file_get_contents($filename);
  
  // $fp = fopen($filename,'w'); // write mode
  $fp = fopen($filename,'a'); // append mode
  // fwrite($fp,$existingData);
  fwrite($fp,"murad\n");
  fwrite($fp,"wahid\n");
  fwrite($fp,"wahid\n");
  fclose($fp);
  
  echo(posix_getcwd);
}