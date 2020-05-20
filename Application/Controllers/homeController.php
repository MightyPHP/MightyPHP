<?php
namespace Application\Controllers;

use Application\Controllers\Controller;
use MightyCore\RESPONSE;
use MightyCore\VERSION;
use MightyCore\MOMENT;
class HomeController extends Controller
{
    public function welcome() {  
        RESPONSE::return($this->_view('welcome')->render(array(
            'MightyCoreVersion' => VERSION::getVersion(),
            "date" => MOMENT::now()->toDateTimeString('Y-m-d')
        )));
    }
    
}