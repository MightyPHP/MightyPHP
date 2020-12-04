<?php
namespace Application\Controllers;

use Application\Controllers\Controller;
use MightyCore\Version;
class HomeController extends Controller
{
    public function welcome() {  
        return view('welcome', array(
            'MightyCoreVersion' => Version::getVersion(),
        ));
    }
}