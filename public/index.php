<?php

/**
 * Usar esta seccion solo en desarrollo para debug
 */
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', true);
date_default_timezone_set('America/Mexico_City');

set_include_path('../library/' . PATH_SEPARATOR . get_include_path());
set_include_path('../library/Doctrine/lib/'.PATH_SEPARATOR.get_include_path());
set_include_path('../application/' . PATH_SEPARATOR . get_include_path());
set_include_path('../application/Controller/' . PATH_SEPARATOR . get_include_path());
set_include_path('../application/Model/' . PATH_SEPARATOR . get_include_path());

require_once('Model3/Loader.php');
Model3_Loader::registerAutoload();
//inicio de la aplicacion
Model3_Site::initSite('../application/Config/config.ini');
Model3_Site::dispatch(new Model3_Request);