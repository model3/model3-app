<?php

class Bootstrap extends Model3_Site_Bootstrap
{

    public function _initBase()
    {
        session_start();
    }

}