$(document).ready(function(){
    //surasti pagal id
    var a= $("#para").html();
    console.log(a);
    //surasti visus p
    var p= $("p");
    for (var i=0; i<p.length; i++) console.log($(p[i]).html());

    //uzdeti css
    $("#para").css({
        'font-weight':'bold'
    });
    //css paprastai ir ieskant
    $("p span").css('color','red');
    $("span", '#para').css('color','blue');
    $('#para').find('span').css('color', 'green');

    //div ieskojimas blokuose
    $('.antras').closest('.virsus').find('.pirmas').text ('blogas');

    //each
    $('#sekantis').each(function(){
        $(this).css('color','red');
    });
    //daugiau elementu zymejimas
    $('#lentele tr > td:first-child').css('color', 'green');

    //idejimas i pabaiga
    $('#kitas').append('<p>rytas</p>');
    //idejimas i prieki
    $('#kitas').prepend('<p>i pradzia</p>');

});