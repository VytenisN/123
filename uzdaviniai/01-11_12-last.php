Užduotis: "Tarkime turime lentelę duomenų bazėje ‘salys’ su laukais ‘id, salis, sostine, gyventojai’. Parašykite SQL užklausą gauti visus duomenis apie 3 šalis, turinčias daugiausiai gyventojų"

SELECT * FROM salys order by gyventojai desc limit 0,3
