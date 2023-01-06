topbar.config({
    autoRun: true,
    barThickness: 3,
    barColors: {
        '0': '#A06CD5',
        '.3': '#815AC0',
        '1.0': '#6247AA'
    },
    shadowBlur: 5,
    shadowColor: 'rgba(0, 0, 0, .5)',
    className: 'topbar',
})
topbar.show();
(function step() {
    setTimeout(function () {
        if (topbar.progress('+.01') < 1) step()
    }, 16)
})()

$(window).ready(function () {
    topbar.hide();
});

$(window).bind('beforeunload', function () {
    topbar.show();
});

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

    $('#checkButton').click(function () {
        $('.auth').addClass("animate__animated animate__fadeOutLeft animate__faster");
    })

    $('.nav-hamburger').click(function () {
        $('.navbar').toggleClass("active");
        $('main').toggleClass("active");
    })

    $('.account-menu').click(function () {
        window.location.href = "./?module=auth&action=sendLogout";
    })

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;
    
        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');
    
            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };

    var module = getUrlParameter('module');
    $('#' + module).toggleClass("active");

});