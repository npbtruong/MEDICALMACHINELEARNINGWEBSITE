


    $('#popup_fb').on( "click", function() {

        if ($('#upload')[0].files.length === 0) {
            console.log("Uploading");
        } else {
            

            if ( $( '#fb_form' ).css('display') === 'none' ) {

                $( '#fb_form' ).css('display', 'block');

              } else if ( $( '#fb_form' ).css('display') === 'block' ) {

                $( '#fb_form' ).css('display', 'none');

              }
              
            if ($(this).text() == "NO - HELP US")
            $(this).text("Feedback Later!");
            else
            $(this).text("NO - HELP US");
        }

        
    });


    $('#popup_fbct').on( "click", function() {

        if ($('#uploadct')[0].files.length === 0) {
            console.log("Uploading");
        } else {
            
            
           
            
            if ( $( '#fb_formct' ).css('display') === 'none' ) {

                $( '#fb_formct' ).css('display', 'block');

              } else if ( $( '#fb_formct' ).css('display') === 'block' ) {

                $( '#fb_formct' ).css('display', 'none');

              }


            if ($(this).text() == "NO - HELP US")
            $(this).text("Feedback Later!");
            else
            $(this).text("NO - HELP US");
        }

        
    });
    
    
