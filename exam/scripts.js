
var btn = document.getElementById("btn1");
var rez = document.getElementById('result');

//Add actions to Button
btn.addEventListener("click", showResult);
btn.addEventListener("click", showZodiacSign);

//get array with Lithuanians
var LTU = printPeopleFromLt(testData);

// display Lithuanian people
document.getElementById("people").innerHTML = '<p>' + showPeople(LTU) + '</p>';





function showResult() {
	var nm = document.getElementById("name").value;
	var dt = document.getElementById("date").value;
	if (nm == '' && dt == '') 
		{rez.innerHTML = 'Neįvestas vardas ir gimimo diena';}

	else {
		if (nm == '') { nm = 'Neįvestas vardas'};
		if (dt == '') { dt = 'Neįvesta gimimo diena'};
		rez.innerHTML = '<h2>' + nm + '</h2>' +'<p>Gimimo diena: ' + dt + '</p>';
	}

}

function showZodiacSign() {
	var d = Number(document.getElementById("date").value.split('-')[2]) ;
	var m = Number(document.getElementById("date").value.split('-')[1]) ;
	rez.innerHTML += '<p> Zodiako ženklas: ' + getZodiacSign(d,m) + '</p>';
	//console.log(d);
	//console.log(m);
}

function getZodiacSign(day, month) {

  var zodiacSigns = {
    'capricorn':"Ožiaragis",
    'aquarius':"Vandenis",
    'pisces':"Žuvys",
    'aries':"Avinas",
    'taurus':"Jautis",
    'gemini':"Dvyniai",
    'cancer':"Vėžys",
    'leo':"Liūtas",
    'virgo':"Mergelė",
    'libra':"Svarstyklės",
    'scorpio':"Skorpionas",
    'sagittarius':"Šaulys"
  }

  if((month == 1 && day <= 20) || (month == 12 && day >=22)) {
    return zodiacSigns.capricorn;
  } else if ((month == 1 && day >= 21) || (month == 2 && day <= 18)) {
    return zodiacSigns.aquarius;
  } else if((month == 2 && day >= 19) || (month == 3 && day <= 20)) {
    return zodiacSigns.pisces;
  } else if((month == 3 && day >= 21) || (month == 4 && day <= 20)) {
    return zodiacSigns.aries;
  } else if((month == 4 && day >= 21) || (month == 5 && day <= 20)) {
    return zodiacSigns.taurus;
  } else if((month == 5 && day >= 21) || (month == 6 && day <= 20)) {
    return zodiacSigns.gemini;
  } else if((month == 6 && day >= 22) || (month == 7 && day <= 22)) {
    return zodiacSigns.cancer;
  } else if((month == 7 && day >= 23) || (month == 8 && day <= 23)) {
    return zodiacSigns.leo;
  } else if((month == 8 && day >= 24) || (month == 9 && day <= 23)) {
    return zodiacSigns.virgo;
  } else if((month == 9 && day >= 24) || (month == 10 && day <= 23)) {
    return zodiacSigns.libra;
  } else if((month == 10 && day >= 24) || (month == 11 && day <= 22)) {
    return zodiacSigns.scorpio;
  } else if((month == 11 && day >= 23) || (month == 12 && day <= 21)) {
    return zodiacSigns.sagittarius;
  }
}

function printPeopleFromLt(data) {
	return data.filter ( x => x.salis == "Lithuania" );
}

function showPeople(x) {
	var row = '';
	for (let i = 0; i < x.length; i++ )
	{
		row += x[i].vardas + ' ' + x[i].pavarde + ' (' + x[i].salis +') ';
	}
	return row;
}
