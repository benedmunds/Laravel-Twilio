<?php
//set the bundle path
Laravel\Autoloader::map(array(
'Twilio\Services_Twilio' => path('bundle').'twilio/twilio.php'
));

//set the autoloading for the classes
function Services_Twilio_autoload($className) {
    if (substr($className, 0, 15) != 'Services_Twilio') {
        return false;
    }
    $file = str_replace('_', '/', $className);
    $file = str_replace('Services/', '', $file);
    return include path('bundle') . "twilio/$file.php";
}

spl_autoload_register('Services_Twilio_autoload');