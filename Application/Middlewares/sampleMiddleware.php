<?php

use MightyCore\MIDDLEWARE;
class sampleMiddleware extends MIDDLEWARE {
    public function administer(){
        echo 'i am in middleware';
    }
}

?>