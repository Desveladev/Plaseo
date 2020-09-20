<?php

global $country, $lang, $CONFIG;

$CONFIG['base_url']    = "http://35.226.18.171";
$CONFIG['static_url']  = "http://35.226.18.171/public/" . $country['code'] . "/static";

$CONFIG['actual_url']  = $CONFIG['base_url'];
$CONFIG['country_url'] = $CONFIG['base_url'] . "/" . $country['code'];
$CONFIG['lang_url']    = $CONFIG['country_url'];

if($country['code'] != $CONFIG['deployment']['default']) {

    $CONFIG['actual_url']  .= "/" . $country['code'];
}

if($lang != $country['default_lang']) {

    $CONFIG['actual_url'] .= "/" . $lang;
    $CONFIG['lang_url']   .= "/" . $lang;
}
