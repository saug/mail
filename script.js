/*
* Form validation
* */
( function( $ ) {
    $( "form[name='send-mail']" ).on( 'submit', function( event ) {
        var name = $( "input[name='fName']" ),
            email = $( "input[name='email']" ),
            address = $( "input[name='address']" ),
            phone = $( "input[name='phone']" ),
            msg = $( "textarea[name='msg']" ),
            file = $( "input[name='attachment']" );

        var err = false;

        if( name.val().length < 1 ){
           name.next( '.invalid-feedback' ).html( 'Name is required.' ).show();
           err = true;
        }

        if( email.val().length < 1 ){
            email.next( '.invalid-feedback' ).html( 'Name is required.' ).show();
            err = true;
        }

        if( address.val().length < 1 ){
            address.next( '.invalid-feedback' ).html( 'Name is required.' ).show();
            err = true;
        }

        if( phone.val().length < 1 ){
            phone.next( '.invalid-feedback' ).html( 'Name is required.' ).show();
            err = true;
        }

        if( msg.val().length < 1 ){
            msg.next( '.invalid-feedback' ).html( 'Name is required.' ).show();
            err = true;
        }

        if( file.val().length < 1 ){
            file.next( '.invalid-feedback' ).html( 'Name is required.' ).show();
            err = true;
        }

        if( err == true ) event.preventDefault();

    });
})( jQuery );