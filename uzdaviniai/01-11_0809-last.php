<?php

/* #8
Sukurkite PHP skriptą, kuriame būtų aprašyta klasė “salis”, kuri turi savybes ‐ pavadinimas, sostine, gyventojai. Sukurkite standartinį klasės __construct metodą, kuriam perdavus tris parametrus ‐ pavadinimas, sostine, gyventojai ‐ perduotus parametrus padėtų į savo savybes.
*/



class salis
{
	public $pavadinimas;
	public $sostine;
	public $gyventojai;

	function __construct($pavadinimas,$sostine,$gyventojai)
	{
		$this->pavadinimas=$pavadinimas;
		$this->sostine=$sostine;
		$this->gyventojai=$gyventojai;
	}
	function informacija()
	{
		return $this->pavadinimas .', '. $this->sostine . ', ' . $this->gyventojai;
	}
}
$LTU = new salis('Lietuva','Vilnius','Mažai');
echo $LTU->informacija().'<br>';

/* #9
Panaudodami prieš tai sukurtą klasę salis, sukurkite klases vakaru_salis ir rytu_salis, kurios paveldi salis klasę. Salis klasę papildykite metodu “informacija”, kuris išvestų suformatuotą eilutę “šalis, sostinė, gyventojai”. rytu_salis klasėje perrašykite metodą informacija, pakeisdami išvedamą eilutę į “šalis, sostinė, gyventojai (Rytų šalis)”. Rytų šalis ‐ tiesiog paprastas tekstas.
*/

class vakaru_salis extends salis 
{

}

class rytu_salis extends salis 
{
	function informacija()
	{
		return $this->pavadinimas .', '. $this->sostine . ', ' . $this->gyventojai . ' (Rytų šalis)';
	}
}
$CN = new rytu_salis('Kinija','Pekinas','Daug');
echo $CN->informacija().'<br>';