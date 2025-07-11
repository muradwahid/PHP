<?php

/**
 * string reverse strrev($string)
 * printf placeholder
 * %s =>string
 * %d => decimal
 * %b => binary
 * %x => hexadecimal
 * %o => octal
*/

$name="Earth";

printf("We'r leaving on %s \n",strtoupper($name));

$fname ="murad";
$lname = "wahid";

// variable swapping
printf('My name is %2$s %1$s',$lname,$fname);

print("\n");

$n = 12.3445;
printf("%.2f",$n);

print("\n");

$n=32;
printf("%04d \n",$n);

$n =45.454674564;
printf("%07.2f \n",$n);

print("\n");

$output = sprintf("My name is %s %s",$fname,$lname);
print($output);

?> 