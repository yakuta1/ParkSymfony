function postForm( $form, callback ){

    /*
     * Get all form values
     */
    var values = {};
    $.each( $form.serializeArray(), function(i, field) {
        values[field.name] = field.value;
    });

    /*
     * Throw the form values to the server!
     */
    $.ajax({
        type        : $form.attr( 'method' ),
        url         : $form.attr( 'action' ),
        data        : values,
        success     : function(data) {
            callback( data );
        }
    });

}


$(document).ready(function() {

    var forms = [
        '[ name="{{ form.vars.full_name }}"]'
    ];

    $( forms.join(',') ).submit( function( e ){
        e.preventDefault();

        postForm( $(this), function( response ){
        });

        return false;
    });


});

		
