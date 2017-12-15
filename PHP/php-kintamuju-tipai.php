<?php

$c = 5 > 6;
$d= 6>5;
echo $c.'<br>';
echo $d.'<br>';
//testavimui
var_dump($c);
print_r($d);

$f= (bool)1.; //tipo cast
var_dump($f);

$int_a = 0x10; //hex dec integer
echo $int_a."<br>";

$float_a = 1.15e1; //float
echo $float_a."<br>";

//eilutes (string)
echo '<br>';
echo 'STRING VARIACIJOS'.'<br>';
echo '<br>';
$eil = '***';
$eil_a= 'labas $eil rytas';
$eil_b= "labas $eil rytas";
echo $eil_a.'<br>';
echo $eil_b.'<br>';
echo "labas $eil rytas".'<br>';
echo "labas \x31 rytas".'<br>';
//tekstas keliose eilutese
$aaa = <<<EOT
vienas du simtas keturiasdesimt <br>staiga nauja eilute
EOT;
echo $aaa.'<br>';

var_dump(array(<<<EOD
foolbar!
EOD
));

echo strlen('abcdef').'<br>';
//modifikavimas teksto
$bbb ="labas rytas";
$ccc = substr($bbb, 6, 3);
echo $ccc.'<br>';
echo strtoupper($ccc). "<br>";
// objektai
$o_1 = new stdClass();
$o_3 = (object)[];

$o_1->tipas='automobilis';
$o_1->pavdeze='automatine';
$o_1->durys='4';
var_dump($o_1);
echo '<br>';
//kaip prieiti prie objekto savybiu
echo $o_1->tipas.' '.$o_1-> pavdeze."<br>";

?>