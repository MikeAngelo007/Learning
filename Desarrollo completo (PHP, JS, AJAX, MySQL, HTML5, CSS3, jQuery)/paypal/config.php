<?php
require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\apiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AU0Pfhcy9M3dIUBF-PdPbPKtgYmJz8SC2h4OTToHSJgrVNnaBFRqbLax0SfeNpihyueixjnrwo1Hj9jQ',//ClienteID
        'ECP3If1FS0Wf4apbNw6wanlWDQCvHHzkdXG83e0J6Lavpkd4gtHTMzbBRcqERfN_viXvsg9v7yPo0ZYE'//Secret
    )
);

