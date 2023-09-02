jQuery(document).ready(function ($){


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


    $(document).find('.header .menu__list .menu__item:nth-child(2) a').addClass('_popup-link');
    $(document).find('.header .menu-mobile .menumobile__list .list-top .menu__item:nth-child(2) a').addClass('_popup-link');

    $(document).find('.header .list-bottom .menu__item:first-child a').addClass('_popup-link');


});