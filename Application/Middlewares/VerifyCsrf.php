<?php
namespace Application\Middlewares;

use MightyCore\Middleware;
use MightyCore\Vault\Routing\VerifyCsrf as RoutingVerifyCsrf;

class VerifyCsrf extends Middleware
{
  public function administer(){
    $verifyCsrf = new RoutingVerifyCsrf();
    $verifyCsrf->verify();
  }
}