<?php

namespace App\Utils;

class FormHandler{


    public static function check(){
        $userDataArray = [];

        $data = $_POST;
        dump($data);
        foreach($data as $key => $userData){
            $userDataArray[$key] = $userData;
        }
        dump($userDataArray);
        $extract = extract($userDataArray);
        dump($extract);

    }

}