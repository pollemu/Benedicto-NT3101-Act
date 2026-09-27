(function ($) {
    'use strict';

    if (Auth.getSession()) {
        window.location.replace('landing_page.html');
        return;
    }

    $('#login-form').validate({
        rules: {
            username: {
                required: true,
                minlength: 3
            },
            password: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            username: {
                required: 'Please enter your username.',
                minlength: 'Your username must be at least 3 characters long.'
            },
            password: {
                required: 'Please enter your password.',
                minlength: 'Your password must be at least 5 characters long.'
            }
        },
        highlight: function (element) {
            $(element).addClass('input-error');
        },
        unhighlight: function (element) {
            $(element).removeClass('input-error');
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
        },
        submitHandler: function (form, event) {
            event.preventDefault();

            var username = $.trim($('#username').val());
            var password = $('#password').val();
            var user = Auth.authenticate(username, password);

            if (!user) {
                Auth.showAlert('Sorry, that username and password combination is not recognised.', 'error');
                $('#password').val('').trigger('focus');
                return false;
            }

            Auth.startSession(user);
            Auth.showAlert('Login successful. Redirecting to your dashboard...', 'success');

            window.setTimeout(function () {
                window.location.href = 'landing_page.html';
            }, 700);

            return false;
        }
    });

    $('#login-form').on('input change', 'input', function () {
        Auth.clearAlert();
        $(this).removeClass('input-error');
    });
})(jQuery);
