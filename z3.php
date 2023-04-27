<?php
$filename = 'imiona.txt';
$lines=[];
$myfile = fopen($filename, 'r');
if (!$myfile) {
    return "Bład";
}

while (!feof($myfile)) {
    $lines[] = fgets($myfile);
}
sort($lines);
echo "Posortowane: <br>";
for($i=0;$i<count($lines);$i++)
{
    echo $lines[$i]," ";
}
echo "<br>Odwrócone: <br>";
for($j=6;$j>-1;$j--)
{
    echo $lines[$j]," ";
}

fclose($myfile);