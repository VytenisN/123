$(document).ready(function(){
    $('#kontrole').click(function(){
        console.log('click:' +$(this).val());
        var form=$(this).closest("form");
        $("form").submit();

    });
});