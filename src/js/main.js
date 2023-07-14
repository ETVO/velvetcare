import 'bootstrap';
import './cookies.js';
import './contact.js';

(jQuery)(
    function ($) {

        $('#header .nav-link').click(function () {
            $('#header .navbar-collapse').collapse('hide');
        });

        $('#servicesAccordion .col .collapse').on('show.bs.collapse', function () {
            var collapseHeight = $(this).height();
            $(this).parent('.col').css('padding-bottom', collapseHeight + 'px');
        });
        $('#servicesAccordion .col .collapse').on('hide.bs.collapse', function () {
            $(this).parent('.col').css('padding-bottom', '0')
        });
    }
);

function isJSONObject(strData) {
    try {
        JSON.parse(strData);
    } catch (e) {
        return false;
    }
    return true;
}