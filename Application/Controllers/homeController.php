<?php
use MightyCore\CONTROLLER;
use MightyCore\RESPONSE;
use MightyCore\VERSION;
use MightyCore\MOMENT;
use MightyCore\UTIL;
class homeController extends CONTROLLER
{
    public function welcome() {  
        UTIL::log('hello');
        RESPONSE::return($this->_view('welcome')->render(array(
            'MightyCoreVersion' => VERSION::getVersion(),
            "date" => MOMENT::now()->toDateTimeString('Y-m-d')
        )));
    }
    
}