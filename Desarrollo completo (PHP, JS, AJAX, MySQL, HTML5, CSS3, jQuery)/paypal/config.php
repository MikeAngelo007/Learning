<?php
require 'paypal/autoload.php';
define('URL_SITIO','http://localhost/learning/Desarrollo%20completo%20(PHP,%20JS,%20AJAX,%20MySQL,%20HTML5,%20CSS3,%20jQuery)/paypal');
$apiContext = new \PayPal\Rest\apiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AU0Pfhcy9M3dIUBF-PdPbPKtgYmJz8SC2h4OTToHSJgrVNnaBFRqbLax0SfeNpihyueixjnrwo1Hj9jQ',//ClienteID
        'ECP3If1FS0Wf4apbNw6wanlWDQCvHHzkdXG83e0J6Lavpkd4gtHTMzbBRcqERfN_viXvsg9v7yPo0ZYE'//Secret
    )
);

