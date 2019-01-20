<?php
require 'paypal/autoload.php';
define('URL_SITIO','http://localhost/learning/Desarrollo%20completo%20(PHP,%20JS,%20AJAX,%20MySQL,%20HTML5,%20CSS3,%20jQuery)/Big%20Project');
$apiContext = new \PayPal\Rest\apiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AbWHalVYznzXGvCTd0MaRVvYK8tm10-5yhtQBeNgVEvrEEgcHsP-F9K2Zkim5uLBP22X44YQGPDW-kfr',//ClienteID
        'EC226DiVruoNRMNo6-oPXHzpIyUAFOQn_5k93p_1CzZT75_GklI4rBACpE1-Lki-iVBGmrK2qk0uIBI-'//Secret
    )
);

