(function ($) {
    'use strict';

    var session = Auth.getSession();

    if (!session) {
        window.location.replace('index.html');
        return;
    }

    $('#welcome').text('Welcome, ' + session.username + '!');
    $('#session-username').text(session.username);
    $('#session-name').text(session.name || '-');
    $('#session-email').text(session.email || '-');

    $('#logout-btn').on('click', function () {
        Auth.endSession();
        window.location.replace('index.html');
    });
})(jQuery);
