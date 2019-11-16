<?php

namespace NamespaceForThisProject\Controllers;

use App\Controllers\CoreController;

class MainController extends CoreController
{
    public function home()
    {
        $this->show('home');
    }
}
