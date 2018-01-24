var arr = [];
var btn = document.getElementById("butt");
btn.addEventListener("click", roll);

var dice1 = document.getElementById("dice1");
var dice2 = document.getElementById("dice2");

function roll() {

    var x = Math.floor((Math.random() * 6) + 1);
    var y = Math.floor((Math.random() * 6) + 1);
    var guess = document.getElementById("ieskoti").value;
    var pair = x + ' and ' + y;

    displaydice(x,y);

    //output a random number and push it to array
    document.getElementById("rez").innerHTML = pair;
    arr.push(pair);
    
    //text display
    if (guess == x + y)
        document.getElementById("tekstas").innerHTML = "Win";
    else
        document.getElementById("tekstas").innerHTML = "Lose";
    
    document.getElementById("array").innerHTML = display(arr);
    //console.log(arr);
}
//array display
function display(a){
    var rez='';
    for (var i = 0; i < a.length; i++ )
        rez += "<p>" + a[i] + "</p>";
    return rez;            
} 
function displaydice(x, y) {
    dice1.src = "img/dice "+x+".png";
    dice2.src = "img/dice "+y+".png";
}