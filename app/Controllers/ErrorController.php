<?php
namespace NamespaceForThisProject\Controllers;

class ErrorController extends CoreController{
    public function notfound(){
        $this->show('not_found');
      }
}