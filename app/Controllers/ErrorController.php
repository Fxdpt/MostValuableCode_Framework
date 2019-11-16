<?php

namespace NamespaceForThisProject\Controllers;

use App\Controllers\CoreController;

class ErrorController extends CoreController
{
    public function notfound()
    {
        $this->show('not_found');
    }
}
