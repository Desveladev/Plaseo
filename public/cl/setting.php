<?php

global $country, $lang, $CONFIG;

$CONFIG['base_url']   = "http://localhost/plaseo";
$CONFIG['static_url'] = "http://localhost/plaseo/public/cl/static";

if($country['name'] != $CONFIG['deployment']['default']) {

    $CONFIG['base_url'] .= "/" . $country['name'];
}

if($lang != $country['default_lang']) {

    $CONFIG['base_url'] .= "/" . $lang;
}
