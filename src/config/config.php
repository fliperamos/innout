<?php
date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_TIME, "pt_BR", "pt_BR.utf-8", "portugueses");

//PASTAS
define("MODEL_PATH", realpath(dirname(__FILE__) . "/../models"));




//DATABASE
require_once(realpath(dirname(__FILE__) . "/database.php"));

