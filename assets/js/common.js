jQuery(document).ready(function ($){


    $(document).find('.header .menu__list .menu__item:nth-child(1) a').addClass('_popup-link');
    $(document).find('.header .menu-mobile .menumobile__list .list-top .menu__item:nth-child(1) a').addClass('_popup-link');

    $(document).find('.header .list-bottom .menu__item:first-child a').addClass('_popup-link');

    $(document).on('click', '.menu__item a', function (){ 
        if ( $(this).attr('href') === '#contacts' ) {
        
          setTimeout(function(){
              $(document).find('.popup.popup_contacts').addClass('_active');
              console.log('sasasas');
          }, 200);
            
        }else{
            $(document).find('.popup.popup_contacts').removeClass('_active');
        }
        if ( $(this).attr('href') === '#demo' ) {
            
           setTimeout(function(){
              $(document).find('.popup.popup_demo').addClass('_active');
              console.log('wqwqwq');
            }, 200);
            
        } else {
            $(document).find('.popup.popup_demo').removeClass('_active');
        }
    });
    
    



    window.onhashchange = function() {
       $('.popup.popup_demo').removeClass('_active');
       $('.popup.popup_contacts').removeClass('_active'); 
    }



    $(document).on('submit', '.popup.popup_demo', function (e){
        e.preventDefault();
        let first_name = $(this).find('.first-name').val();
        let phone = $(this).find('.phone').val();
        let email = $(this).find('.email').val();
        let message = $(this).find('.message').val();

        let that = $(this);

        if ( first_name && phone && email ) {
            $.ajax({
                url: vars_common.ajaxurl,
                method: 'POST',
                dataType: 'json',
                data: {
                    action: 'send_demo_email',
                    first_name: first_name,
                    phone: phone,
                    email: email,
                    message: message,
                },
                success: function (data) {
                    if ( data.text ) {
                        that.find('form').html('<h3 class="response-reporting"> ' + data.text + ' </h3>');
                    }
                },
                error: function () {
                    console.log('Ajax error');
                }
            });
        }
    });





    $(document).on('submit', '.popup.popup_contacts', function (e){
        e.preventDefault();
        let first_name = $(this).find('.first-name').val();
        let phone = $(this).find('.phone').val();
        let email = $(this).find('.email').val();
        let message = $(this).find('.message').val();

        let that = $(this);

        if ( first_name && phone && email ) {
            $.ajax({
                url: vars_common.ajaxurl,
                method: 'POST',
                dataType: 'json',
                data: {
                    action: 'send_contacts_email',
                    first_name: first_name,
                    phone: phone,
                    email: email,
                    message: message,
                },
                success: function (data) {
                    if ( data.text ) {
                        that.find('form').html('<h3 class="response-reporting"> ' + data.text + ' </h3>');
                    }
                },
                error: function () {
                    console.log('Ajax error');
                }
            });
        }
    });



    
   

   
    

});