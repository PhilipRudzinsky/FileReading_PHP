<?php
function pliki()
{
    $myfile = fopen("imie_i_nazwisko.txt","a");
    $myfile2 = fopen("doSkasowania.txt","a");
    $myfile1="doSkasowania.txt";
    if(!unlink($myfile1))
    {
        echo ("$myfile1 nie moze być usunięty, error");
    }
    else
    {
       echo "Usunięto plik $myfile1";
    }
    $dir="Filip Rudzinski";
    if( is_dir($dir) === false )
    {
        mkdir($dir);
    }
    $file = fopen($dir . '/' . "imie_i_nazwisko.txt","a");
}
pliki();