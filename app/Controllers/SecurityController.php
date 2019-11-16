<?php

namespace NamespaceForThisProject\Controllers;

use App\Controllers\CoreController;
use App\Utils\FormHandler;

//TODO: Remove after Test
class SecurityController extends CoreController
{

    public function signInPostAction(){
        FormHandler::check();
    }

    public function SignInAction(){
        $this->show('sign_in');
    }
}