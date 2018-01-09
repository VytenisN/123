<?php
/*
Sukurkite PHP skriptą, kuriame būtų aprašyta funkcija, su 3 parametrais: minimalus skaicius, maksimalus skaicius, kiek atsitiktinių skaiciu sugeneruoti. Funkcija turi gražinti atsitiktinių skaičių masyvą. Pademonstruoti funkcijos veikimą.
*/

function fnc ($min,$max,$k)
{
    $mas=[];
    for ($i = 0; $i < $k; $i++)
    {
        $mas[$i]=rand($min,$max);
    }
    return $mas;
}

var_export( fnc(2,15,6));