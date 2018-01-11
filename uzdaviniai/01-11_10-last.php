<?php
/*
Sukurkite PHP skriptą, kuriame aprašykime klasę countryList, kurioje būtų viena savybė ‐ $countries, kuri bus masyvas, taip pat būtų metodas insert($country), kuris papildo savybę $countries nauja šalimi. Taip pat sukurkite metodą average(), kuris grąžintų masyve sąvybėje esančių šalių pavadinimų ilgio matematinį vidurkį
*/
class countryList
{
	public $countries=[];

	function insert($country)
	{
		$this->countries[]=$country;
	}

	function average()
	{
		$len = 0;  //set strlen to 0
		for ($i=0; $i <count($this->countries); $i++) 
		{ 
			$len += strlen($this->countries[$i]); // add length of each string
		}
		return $len/count($this->countries); 
	}

}

$list = new countryList; 
$list->insert('AA');
$list->insert('BB');
$list->insert('CC');
$list->insert('DD');

echo $list->average();

?>