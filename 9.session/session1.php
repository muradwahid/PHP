<?php
session_name('myapp');
session_start( array(
  'cookie_lifetime'=>10
));
// $_SESSION['name']='Murad';
$_SESSION['counter']=$_SESSION['counter'] ?? 0;
$_SESSION['counter']++;
echo $_SESSION['name'];
