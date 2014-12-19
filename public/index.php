<?php

/**
 * Only DEBUG
 */
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);

date_default_timezone_set('America/Mexico_City');

require_once __DIR__.'/../vendor/autoload.php';

//inicio de la aplicacion
Model3\Site\Site::initSite('../application/Config/config.ini');
Model3\Site\Site::dispatch(new Model3_Request);