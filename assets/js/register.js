(function ($) {
    'use strict';

    if (Auth.getSession()) {
        window.location.replace('landing.html');
        return;
    }

    $.validator.addMethod('strongPassword', function (value) {
        return /[A-Za-z]/.test(value) && /\d/.test(value);
    }, 'Your password must contain at least one letter and one number.');

    $.validator.addMethod('uniqueUsername', function (value) {
        if (this.optional(value)) {
            return true;
        }

        return !Auth.usernameTaken($.trim(value));
    }, 'That username is already taken. Please pick another one.');

    $('#register-form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            username: {
                required: true,
                minlength: 3,
                uniqueUsername: true
            },
            password: {
                required: true,
                minlength: 5,
                strongPassword: true
            },
            confirm_password: {
                required: true,
                equalTo: '#password'
            }
        },
        messages: {
            name: {
                required: 'Please enter your full name.',
                minlength: 'Your name must be at least 2 characters long.'
            },
            email: {
                required: 'Please enter your email address.',
                email: 'Please enter a valid email address, e.g. juan@example.com'
            },
            username: {
                required: 'Please choose a username.',
                minlength: 'Your username must be at least 3 characters long.'
            },
            password: {
                required: 'Please create a password.',
                minlength: 'Your password must be at least 5 characters long.'
            },
            confirm_password: {
                required: 'Please re-enter your password.',
                equalTo: 'Passwords do not match. Please try again.'
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

            var password = $('#password').val();

            if ($('#confirm_password').val() !== password) {
                Auth.showAlert('Passwords do not match. Please try again.', 'error');
                return false;
            }

            Auth.registerUser({
                name: $.trim($('#name').val()),
                email: $.trim($('#email').val()),
                username: $.trim($('#username').val()),
                password: password
            });

            form.reset();

            Auth.showAlert('Registration successful! You can now log in with your new account.', 'success');

            return false;
        }
    });

    $('#register-form').on('input change', 'input', function () {
        Auth.clearAlert();
        $(this).removeClass('input-error');
    });
})(jQuery);
