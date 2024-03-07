<?php

$str = "wait im goated?";
$str = strtoupper($str);
echo $str; 

$mystring = 'West';
$findme   = 'Kanye';
$pos = strpos($mystring, $findme);

if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}

$filename = '/m3progproject/public/01/functions.md';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}

?>