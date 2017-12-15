<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
echo 'labas';
//kintamieji
$a = 5;
$e = new stdClass(); //objektas
$f = NULL;
function pvz_static(){
    static $a=0; //del static veikia tik pirma kart kreipiantis i funkcija
    $a++;
    echo $a.'<br>';
}
pvz_static(); //sukuriamas $a, +1 ir parodoma
pvz_static();
pvz_static();
global $g;
$g= "sveiki";
//funkcijos vidus neskaito i isore
function pvz_local (){
$g= "rytas";
echo $g."<br>";
}
pvz_local();
//global ivedimas i funkcija
function pvz_global(){
global $g;
echo $g.'<br>';
}
pvz_global();

//Globals masyvas
echo $GLOBALS['g'].'<br>';
//eval naudojimas - ivykdo php koda is teksto
eval ('$s="aaa";');
echo $s. '<br>';
//unset-panaikina kintamaji
unset($s);
echo $s. '<br>';
//konstante
define('konst','konstante ?');
echo konst."<br>"
?>
</body>
</html>
