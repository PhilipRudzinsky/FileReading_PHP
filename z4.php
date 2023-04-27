<?php
$filename = 'napisy.txt';
$myfile = fopen($filename, 'r');
if (!$myfile) {
    return "Błąd";
}
while (!feof($myfile)) {
    $lines[] = fgets($myfile);
}
for($i=0;$i<count($lines)-1;$i++)
{
    echo $i+1, " - " ,$lines[$i], " - ", bindec($lines[$i]) ,"<br>";
}
fclose($myfile);