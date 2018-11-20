<?php
require_once __DIR__."./app/loader.php";
$urlPath = Loader::getUrlBase();
header("location: ".$urlPath."condominio/views/login/");