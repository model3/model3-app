<?php

namespace App;

use Model3\Site\Bootstrap as Model3Bootstrap;

class Bootstrap extends Model3Bootstrap
{

    public function _initBase()
    {
        session_start();
    }

}