<?php
/**
 * Created by PhpStorm.
 * User: vytenis
 * Date: 17.12.19
 * Time: 11.00
 */

$mas= [11,34,23,21];

function daugyba($a, $x) {

    for ($i=0; $i< count($a);$i++)
    $a[$i]= $a[$i]*$x;
    return $a;
}
echo json_encode(daugyba($mas,10));
echo '<br>';
echo '<br>';

//funkcija kuri perziures tekstus, suskaiciuos simboliu skaiciu,

$tekstai = ['abrA','dvidesimt','kefyRAas','volga', 'KOMPIUTER'];

function skaiciuokle ($t) {
  return  strlen(join("",$t));
}
echo skaiciuokle($tekstai);
echo '<br>';
echo '<br>';

function didziausias_zodis($a) {
    $max=0;
    $zodis ='';
    for ($i=0; $i<count($a);$i++) {

        if (strlen ($a[$i])> $max)  {$max=strlen($a[$i]); $zodis=$a[$i];}
    }
        return $zodis;
}

echo didziausias_zodis($tekstai);
echo '<br>';
echo '<br>';


function naujas ($array) {
    $suma=0;
    for($i=0; $i<count($array);$i++)
    $suma += $array[$i];
    $rez=sqrt($suma);
    return $rez;
}
echo naujas($mas);
echo '<br>';
echo '<br>';


function didzRaides($t) {
    $mas=[];
    for($i=0;$i<count($t);$i++)
        $mas[$i]=ucfirst(strtolower($t[$i]));
    return $mas;
}
echo json_encode (didzRaides($tekstai));
echo '<br>';
echo '<br>';

function maisymas($t)
{
    $mas = [];
    for ($i = 0; $i < count($t); $i++)
        $mas[$i] = str_shuffle($t[$i]);
    $rez = implode(" ", $mas);
    return $rez;
}
echo maisymas($tekstai);
echo '<br>';
echo '<br>';

?>