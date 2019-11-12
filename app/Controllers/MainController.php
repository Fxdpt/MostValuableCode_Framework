<?php

namespace NamespaceForThisProject\Controllers;

class MainController extends \App\Controllers\CoreController
{
    public function home()
    {
        $this->show('home');
    }
}
