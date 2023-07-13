import 'bootstrap';
import './cookies.js';

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

        $('#contact-form').submit(function (e) {
            e.preventDefault(); // Prevent form submission

            var formData = $(this).serialize(); // Serialize form data

            $('#contact-form #form-message').fadeOut(200);
            $('#contact-form #spinner').fadeIn(200);

            $.ajax({
                type: 'POST',
                url: $(this).attr('action') + '?ajax=true',
                data: formData,
                success: function (response) {
                    $('#contact-form #spinner').fadeOut(200);
                    clearControlFeedback();

                    showFormMessage('success', response);

                    $('#contact-form')[0].reset(); // Reset form fields
                },
                error: function (xhr, status, error) {
                    $('#contact-form #spinner').fadeOut(200);
                    clearControlFeedback();

                    if (isJSONObject(xhr.responseText)) {
                        // Get errors Array
                        var errors = JSON.parse(xhr.responseText);
                        // For each error, add invalid class and show feedback
                        $.each(errors, function (key, value) {
                            $('[name=' + key + ']').addClass('is-invalid');
                            $('[name=' + key + ']').siblings('.invalid-feedback').fadeIn(200);
                        });
                    }
                    else {
                        showFormMessage('error', xhr.responseText);
                    }
                }
            });

            function clearControlFeedback() {
                $('#contact-form .form-control').each(function () {
                    $(this).removeClass('is-invalid');
                });
            }

            function showFormMessage(type, message) {
                $('#contact-form #form-message').addClass(type);
                $('#contact-form #form-message').fadeIn(200);
                $('#contact-form #form-message .message').html(message); // Display response message
            }
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