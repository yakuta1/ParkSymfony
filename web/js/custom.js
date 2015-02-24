new WOW().init();

$(document).ready(function(){

    $('.filtrus').show();

});

$('#reset_button').on('click', function(){ $('#mainContent').empty();})
$('#filter').addClass( "col-lg-12 row" );
$("#filter>div").addClass( "col-lg-3" );
$("#filter label").addClass( "noprint" );
