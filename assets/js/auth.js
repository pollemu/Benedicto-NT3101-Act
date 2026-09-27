(function (window) {
    'use strict';

    var USERS_KEY = 'webdev_users';
    var SESSION_KEY = 'webdev_session';

    var DEMO_USER = {
        username: 'admin',
        password: '12345',
        name: 'Administrator',
        email: 'admin@example.com'
    };

    function readUsers() {
        try {
            return JSON.parse(window.localStorage.getItem(USERS_KEY)) || [];
        } catch (error) {
            return [];
        }
    }

    function writeUsers(users) {
        window.localStorage.setItem(USERS_KEY, JSON.stringify(users));
    }

    function usernameTaken(username) {
        var taken = DEMO_USER.username.toLowerCase() === username.toLowerCase();

        return readUsers().some(function (user) {
            return user.username.toLowerCase() === username.toLowerCase();
        }) || taken;
    }

    function authenticate(username, password) {
        var users = readUsers();
        var candidates = users.concat([DEMO_USER]);

        for (var i = 0; i < candidates.length; i++) {
            var user = candidates[i];

            if (user.username.toLowerCase() === username.toLowerCase() && user.password === password) {
                return user;
            }
        }

        return null;
    }

    function registerUser(user) {
        var users = readUsers();
        users.push(user);
        writeUsers(users);
    }

    function startSession(user) {
        window.localStorage.setItem(SESSION_KEY, JSON.stringify({
            username: user.username,
            name: user.name,
            email: user.email,
            loginTime: new Date().toISOString()
        }));
    }

    function getSession() {
        try {
            return JSON.parse(window.localStorage.getItem(SESSION_KEY));
        } catch (error) {
            return null;
        }
    }

    function endSession() {
        window.localStorage.removeItem(SESSION_KEY);
    }

    function showAlert(message, type) {
        var $alert = window.jQuery('#form-alert');

        $alert
            .removeClass('alert-error alert-success')
            .addClass('alert-' + (type || 'error'))
            .text(message)
            .prop('hidden', false);
    }

    function clearAlert() {
        window.jQuery('#form-alert').prop('hidden', true).text('');
    }

    window.Auth = {
        DEMO_USER: DEMO_USER,
        usernameTaken: usernameTaken,
        authenticate: authenticate,
        registerUser: registerUser,
        startSession: startSession,
        getSession: getSession,
        endSession: endSession,
        showAlert: showAlert,
        clearAlert: clearAlert
    };
})(window);
