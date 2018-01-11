<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, kuriai padavus du parametrus ‐ skaičius, funkcija turi grąžinti rezultatą ‐ visų paduotų parametrų kvadratų sumą padaugintą iš pi.
*/

function stebuklas ($a,$b)
{
	return (($a*$a) + ($b*$b)) * pi();
}

echo stebuklas(10,1);

?>