<?php
/**
 * Created by PhpStorm.
 * User: vytenis
 * Date: 17.12.21
 * Time: 20.20
 */

class zmogus {
    public $vardas;
    public $pavarde;
    public $gdata;
    function info(){
        $this->vardas= 'Andrius';
        $this->pavarde='Andriukaitis';
        $this->gdata='1990-00-00';
        $s= 'Vardas: %s, pavarde: %s, gimimo data %s';
        return sprintf($s, $this->vardas, $this->pavarde, $this->gdata);
    }
};
$zm = new zmogus();
echo $zm->info().'<br>';//kvieciame f-ja
echo $zm->vardas.'<br>';//nuskaitome savybe
$zm->vardas='Tomas';//pakeiciam savybe
echo $zm->vardas .'<br>';

echo $zm->info().'<br>';

class darbuotojas {
    public $vardas='nezinomas';
    public $pavarde='nezinomas';
    public $atlyginimas=0;
    function info(){
        $s= 'Vardas: %s, pavarde: %s, atlyginimas %s EUR';
        return sprintf($s, $this->vardas, $this->pavarde, $this->atlyginimas);
    }
};
$db=new darbuotojas();
echo $db->info().'<br>';
$db->vardas='Jonas';
echo $db->info().'<br>';
$db->pavarde='Jonaitis';
echo $db->info().'<br>';
$db->atlyginimas='1565';
echo $db->info().'<br>';
//var_dump($db).'<br>';
//var_export ($db).'<br>';
unset ($db);//panaikina funkcija po atlikimo, taupo vieta
//echo $db->info().'<br>';
echo '<hr>';
class darbuotojas2
{
    public $vardas;
    public $pavarde;
    public $atlyginimas;

    function __construct($vard, $pav, $atl)
    {
        $this->vardas = $vard;
        $this->pavarde = $pav;
        $this->atlyginimas = $atl;
    }

    function info()
    {
        $s = 'Vardas: %s, pavarde: %s, atlyginimas %s EUR';
        return sprintf($s, $this->vardas, $this->pavarde, $this->atlyginimas);
    }
    function vardas_pavarde ($skyriklis){
        return $this->vardas. $skyriklis .$this->pavarde;
    }
};
$d= new darbuotojas2('Jonas', 'Jonaitis', '1500');
//var_dump ($d).'<br>';
echo $d->info().'<br>';
echo $d->vardas_pavarde(' ').'<br>';
echo $d->vardas_pavarde('*').'<br>';
unset ($d);
echo '<hr>';
class svecias {
    public $vardas;
    public $pavarde;
    public $maistas;
    function __construct ($vardas, $pavarde, $maistas){
        $this-> vardas=ucfirst(strtolower($vardas));
        $this-> pavarde=ucfirst(strtolower($pavarde));
        $this-> maistas=ucfirst(strtolower($maistas));
    }
    function eilute(){
        $s='<tr>';
        $s.='<td>'.$this->vardas.' '.  '</td>';
        $s.='<td>'.$this->pavarde.' '.  '</td>';
        $s.='<td>'.$this->maistas.' '.  '</td>';
        $s.='</tr>';
        return $s;
    }
}
$d=new svecias ('JonAs', 'JonAitIs','keBabAs');
echo $d->eilute();
$sveciai=[];
$sveciai[]=new svecias ('Jonas', 'Jonaitis','mesa');
$sveciai[]=new svecias ('Petras', 'Patraitis','koldunai');
$sveciai[]=new svecias ('Ona', 'Oniene','fotosinteze');
var_export ($sveciai);
echo '<table>';
foreach ($sveciai as $sv){
    echo $sv->eilute();
}
echo '</table>';
unset ($d);
echo '<hr>';
class automobilis {
    public $marke;
    public $modelis;
    public $metai;
    function __construct ($marke, $modelis, $metai){
        $this->marke=ucfirst($marke);
        $this->modelis=ucfirst ($modelis);
        $this->metai=ucfirst ($metai);

    }
        function sablonas(){
        $d='Čia yra %s %s ir jis pagamintais %s metais!';
        return sprintf ($d, $this->marke, $this->modelis, $this->metai);
        }

};
$dd=[];
$dd[]=new automobilis ('honda', 'accord', '2015');
$dd[]=new automobilis ('ford', 'mustang', 1958);
foreach ($dd as $dy){
    echo $dy->sablonas().'<br>';
};
unset ($d);

class zmogai {
    const copy='CodeAcademy';
    public $vardas;
    public $pavarde;
    public $amzius;
    private $sablonas ='Vardas: %s, Pavarde: %s, Amzius: %s';//private f-jos yra nematomos uz f-jos ribu
    function __construct ($v, $p, $a = 'nezinomas'){
        $this->vardas=$this->pakeisti ($v);
        $this->pavarde=$this->pakeisti($p);
        $this->amzius=$a;
    }
   protected function pakeisti ($s){//galima matyti susietoje klaseje, bet nematoma uz f-jos ribu
        return ucfirst(strtolower($s));
    }
    function eilute(){
        return zmogai::copy. ' '.sprintf($this->sablonas, $this->vardas, $this->pavarde, $this->amzius);
    }
};
$z= new zmogai('Petras', "Petraitis", 15);
echo $z->vardas .'<br>';
echo $z->eilute($z).'<br>';
define ('aaa',"labas");

class mokinys extends zmogai {
    public $pazimys;
    function __constructor ($v, $p, $a, $pz){
        $this->vardas=$this->pakeisti($v);
        $this->pavarde=$this->$p;
        $this->amzius=$a;
        $this->pazimys=$pz;
    }

};
$mokinys= new mokinys ('Jonas', 'Jonaitis', '9', '2');
var_dump ($mokinys);
echo $mokinys->eilute(). '<br>';
unset ($mokinys);
echo '<hr>';
class zmogau {
    public $vardas;
    public $pavarde;
    public $amzius;
     function __construct ($v, $p, $a){
         $this->vardas=$v;
         $this->pavarde=$p;
         $this->amzius=$a;
}
static function keisti($s){
         return ucfirst(strtolower($s));
}
    function keisti2($s)
    {
        return ucfirst(strtolower($s));
    }
};
echo zmogau::keisti('Tomas'). '<br>';
$z= new zmogau ('Jonas', 'jonaiTis', 25);
echo $z->keisti2 ('tOmas').'<br>';

class mokinys2 extends zmogau {
    function keisti2($s){
        return strtoupper($s). ' '. parent::keisti2($s);
    }
};
$z= new mokinys2 ('Jonas', 'jonaiTis', 25);
echo $z->keisti2 ('tOmas').'<br>';
echo '<hr>';
class autom {
    public $gamintojas;
    public $modelis;
    public $metai;
     function __construct ($g,$mod,$m){
         $this->gamintojas=$g;
         $this->modelis=$mod;
         $this->metai=$m;

     }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<div style="height:130px; width:750px; background-color: yellow" >.                     .</div>
<div style="height:130px; width:750px;background-color: green">.                     .</div>
<div style="height:130px; width:750px;background-color: red">.                     .</div>
<br>
<div style="height: 100px; width:100px; top:500px; left: 200px; background-color: red ; border-radius: 50%"></div>

</body>
</html>
