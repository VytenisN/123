<?php
$m = ['bmw', 'audi', 'honda', 'lada'];
echo json_encode($m); echo '<br>';
sort($m); // rusiavimas pagal reiksme didejimo tvarka
echo json_encode($m); echo '<br>';
rsort($m); // rusiavimas pagal reiksme mazejimo tvarka
echo json_encode($m); echo '<br>'; // JSON.stringify - java script JSON kodavimo forma
//shuffle($m); // ismetymas atsitiktine tvarka
//echo json_encode($m); echo '<br>';
$m2 = array_slice($m, 1, 2);
echo json_encode($m2); echo '<br>'; // masyvo dalis
$m3 = array_slice($m, 1, 3);
echo json_encode($m3); echo '<br>'; // masyvo dalis
unset($m3[1]); // pasalinti elementa
echo json_encode($m3); echo '<br>'; // masyvo dalis
$m3 = array_slice($m, 1, 3);
echo json_encode($m3); echo '<br>'; // masyvo dalis
for ($i=0; $i<count($m3); $i++){ // surasti pagal reiksme ir pasalinti
    if ($m3[$i] == 'bmw'){
        unset($m3[$i]);
        break;
    }
}
echo json_encode($m3); echo '<br>'; // masyvo dalis
$m4 = $m;
if (in_array('honda', $m4)) echo 'hoda rasta<br>';
else echo 'honda nerasta<br>';
$s = 'honda, bmw, audi, lada';
$ms = explode(',', $s);
echo json_encode($ms); echo '<br>'; // masyvas is teksto
for ($i=0; $i<count($ms); $i++) $ms[$i] = trim($ms[$i]); // pasalinti tarpus is krastu
$s2 = implode(':', $ms);
echo $s2; echo '<br>'; // tekstas i smasyvo
list($auto1, $auto2, $auto3, $auto4) = $ms;
var_dump($auto1);
var_dump($auto2);
var_dump($auto3);
var_dump($auto4);
$a1 = $ms[0];
$a2 = $ms[1];
$a3 = $ms[2];
$a4 = $ms[3];
var_dump($a1);
var_dump($a2);
var_dump($a3);
var_dump($a4);


$m = [1,3,6,2,10,12,44];
function vidurkis($mas){
    $sum = 0;
    for ($i=0; $i<count($mas); $i++) $sum += $mas[$i];
    return $sum / count($mas);
}
echo vidurkis($m) . '<br>';
function prideti($mas, $skaicius){
    for ($i=0; $i<count($mas); $i++) $mas[$i] = $mas[$i] + $skaicius;
    return $mas;
}
echo json_encode(prideti($m, 1)); echo '<br>';
$m2 = [15, 3, 10, 20, 2, 0, 5];
function didziausias($mm){
    for ($i=0; $i<count($mm); $i++){
        if (isset($d)) {
            if ($mm[$i] > $d) $d = $mm[$i];
        } else $d = $mm[$i];
    }
    return $d;
}
echo didziausias($m2) . '<br>';
function maziausias($mm){
    for ($i=0; $i<count($mm); $i++){
        if (isset($d)) {
            if ($mm[$i] < $d && $mm[$i] > 0) $d = $mm[$i];
        } else $d = $mm[$i];
    }
    return $d;
}
echo maziausias($m2) . '<br>';


?>

<?php
$m = ['labas', 'rytAS', '...kaunas##','jonas jonAITIS'];
function mazosios($s){
    $x = strtolower($s);
    $x = rtrim(ltrim($x, '.'), '#');
    return $x;
}
$nm = [];
$nmd = [];
$nmp = [];
$nml = [];
$nmx = [];
$nms = [];
for ($i=0; $i<count($m); $i++) {
    $s = mazosios($m[$i]);
    //$nm[] = ucfirst($s);
    $nm[] = ucwords($s);
    $nmd[] = strtoupper($s);
    $nmp[] = str_replace('a', '*', $s);
    $nml[] = $s . '-' .  strlen($s);
    $nmx[] = $s . '-' .  strpos($s, 'a');
    $nms[] = str_shuffle($s);
}
echo json_encode($nm) .'<br>';
echo json_encode($nmd) .'<br>';
echo json_encode($nmp) .'<br>';
echo json_encode($nml) .'<br>';
echo json_encode($nmx) .'<br>';
echo json_encode($nms) .'<br>';
?>