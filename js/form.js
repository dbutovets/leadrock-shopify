(function(document) {
    var body = $('body');

    function setCookie(key, value, expiry) {
        var expires = new Date();
        expires.setTime(expires.getTime() + (expiry * 24 * 60 * 60 * 1000));

        document.cookie = key + '=' + value + ';path=/' + ';expires=' + expires.toUTCString();
    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');

        return keyValue ? keyValue[2] : null;
    }

    function formIsLocked() {
        var isLocked = getCookie('forms-lock') || body.hasClass('forms-disabled');

        console.log('forms-lock - status: ' + isLocked);
        return isLocked;
    }

    function formLock() {
        console.log('forms-lock - block forms');

        body.find(":submit").prop('disabled', true);
        body.find(":submit").css('opacity', '0.5');
        body.addClass('forms-disabled');

        setCookie('forms-lock', 'yes', 60);
    }

    var isLocked = formIsLocked();

    if (isLocked) {
        formLock();

        LeadrockValidator.on_submit = function(form) {
            return function(event) {
                return false;
            };
        }
    } else {
        var leadrockOnSubmit = LeadrockValidator.on_submit;

        LeadrockValidator.on_submit = function(form) {
            var leadrockHandler = leadrockOnSubmit(form);

            return function(event) {
                var isLocked = formIsLocked();

                if (isLocked) {
                    console.log('form-lock - double submit');
                    event.preventDefault();

                    return false;
                }

                if (leadrockHandler(event) === false) {
                    console.log('form-lock - leadrock validators failed');

                    return false;
                }

                formLock();

                $(form).find('input[type="submit"]').attr('value', 'OK');
                $(form).find('button').text('OK');
            };
        }
    }
})(document);