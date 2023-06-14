import 'bootstrap';

(jQuery)(
    function ($) {

        $('#header .nav-link').click(function () {
            $('#header .navbar-collapse').collapse('hide');
        });
    }
);