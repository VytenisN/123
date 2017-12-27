function daugyba(a,b) {
    return a*b;
}

var auto = ['raudona','balta','juoda','zalia','melyna'];
var numeris = null;
for(var i=0;i<auto.length;i++) {
    var spalva = auto[i];
    if (spalva=='zalia') numeris =i;
}

function surastispalva(spalva) {
    var rezultatas = null;
    var n=auto.length;
    var i=0;
    while(rezultatas == null && i<n){
        if (auto[i]==spalva) rezultatas =i;
        i++;
    }
    return rezultatas;

}//switch statement

function surasti(arg){
    var rezultatas;
    switch (arg) {
        case 'raudona':rezultatas = 'obuolys';break ;
        case 'juoda':rezultatas ='pele';break;
        default: rezultatas='nezinomas';
    }
    return rezultatas
}