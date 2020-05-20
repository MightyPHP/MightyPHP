<?php
namespace Application\Controllers;

use MightyCore\RESPONSE;
use MightyCore\VERSION;
use MightyCore\MOMENT;
class HomeController extends \MightyCore\CONTROLLER
{
    public function welcome() {  
        RESPONSE::return($this->_view('welcome')->render(array(
            'MightyCoreVersion' => VERSION::getVersion(),
            "date" => MOMENT::now()->toDateTimeString('Y-m-d')
        )));
    }
    
}