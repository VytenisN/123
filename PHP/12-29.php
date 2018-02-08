<?php
function suma($a,$b,$c) {

    return $a+$b+$c;
}

echo suma (5,2,10);
echo '<hr>';

//7 uzd
$mas=['Juozas','Algis','Brone','Angele','Ignas'];
$i=0;
foreach ($mas as $vrd ) {
     $mas[$i]=strtoupper($vrd);
     $i++;
}
var_export($mas);
echo '<hr>';

// 8uzd  Klase su konstruktorium ir isvedimas naujos klases

class person {
    public $name;
    public $surname;
    public $age;

    function __construct($n,$surname,$age){
        $this->name=$n;
        $this->surname=$surname;
        $this->age=$age;

    }
    function asmensDuomenys(){
        return ucfirst($this->name) . ' '.ucfirst($this->surname).'('.$this->age.')';
    }

}
$per1 = new person('jonas','jonaitis',25);
echo var_export($per1);
echo '<hr>';
echo $per1->asmensDuomenys().'<br>';
echo '<hr>';

// 9uzd
/* Panaudodami klase person sukurkite klases staff ir client, kurios paveldi person. Person papildykite metodu asmedDuomeys, kuris isvestu suformatuota eilute "Vardas Pavarde(amzius). Staff klaseje perrasykite metoda asmensDuomenys, pakeisdami isvedama eilute i "Pavarde Vardas darbuotojas". Darbuotojas-tiesiog paprastas zodis  */

class staff extends person {
    function asmensDuomenys()
    {
        return ucfirst($this->surname) .' '. ucfirst($this->name).' darbuotojas' ; // metodo pakeitimas
    }
}
class client extends person{

}

$petr= new staff('petras','petraitis',61);
echo $petr->asmensDuomenys().'<br>';
?>


