<?php

include_once "../../../lib/setting.php";
include_once "../routes.php";
global $ROUTES, $CONFIG;

$HEAD = array();
$HEAD['lang']        = "";
$HEAD['title']       = "";
$HEAD['description'] = "";
$HEAD['canonical']   = "";
$HEAD['image']       = "";
$HEAD['twitter'] = array(
    "card" => "",
);

if(isset($CONFIG['debug']) && $CONFIG['debug'] === true) {

    $HEAD['cache'] = "<meta http-equiv=\"Cache-Control\" content=\"no-cache, mustrevalidate\">";
} else {


}

