<?php

$CONFIG = array();
$CONFIG['debug'] = true;

$CONFIG['deployment'] = array(
    "default"         => "df",
    "maintenance"     => true,
    "multi_national"  => false,
    "df" => array(
        "active"      => true,
        "code"        => "df",
        "name"        => "Default",
        "multi_lang"  => false,
        "lang"        => array(
            "es" => true,
        ),
        "default_lang" => "es",
    ),
);

$CONFIG['analytics']['google'] = "";
