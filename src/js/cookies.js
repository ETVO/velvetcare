
(jQuery)(
    function ($) {
        const cookiesConsentId = 'allowCookies';

        $(document).ready(function () {
            if (consent = localStorage.getItem(cookiesConsentId)) {
                if(consent == 'allow') {
                    addGTag();
                }
                else {
                    removeGTag();
                }
            }
            else {
                $('#cookiesConsent').fadeIn(200);
            }
        })
        
        // If user clicks X or Accept
        $('#cookiesConsent #continue, #cookiesConsent #accept').click(function (e) {
            localStorage.setItem(cookiesConsentId, 'allow');
            addGTag();
            $('#cookiesConsent').fadeOut(200);
        });
        
        // If user clicks Reject
        $('#cookiesConsent #reject').click(function (e) {
            localStorage.setItem(cookiesConsentId, 'deny');
            $('#cookiesConsent').fadeOut(200);
        });
    }
)