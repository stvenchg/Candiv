$(document).ready(function () {
    $('#email').keyup(function () {
        var email = false;

        $('#email').each(function () {

            if ($(this).val().indexOf("@") > -1 && $(this).val().indexOf(".") > -1) {
                email = true;
            }
        });

        if (!email) {
            $('#checkButton').attr('disabled', 'disabled');
        } else {
            $('#checkButton').removeAttr('disabled');
        }
    });
});