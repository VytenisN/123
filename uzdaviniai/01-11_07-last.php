<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašytas vienmatis masyvas iš 3 elementų ‐ teksto eilučių. Panaudodami foreach ciklą ‐ pakeiskite visus masyvo elementus ‐ paversdami tekstą mažosiomis raidėmis.
 */
$country = 
[
	"Etiopija",
	"Adis Adeba",
	"20 tūkst. KVADR. km"
];
$i = 0;
foreach ($country as $tmp) 
{
	$country[$i++] = strtolower($tmp);
}

var_export($country);
?>