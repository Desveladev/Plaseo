<?php

$CONFIG = array();
$CONFIG['debug'] = true;

$CONFIG['deployment'] = array(
    "default"         => "cl",
    "maintenance"     => true,
    "multi_national"  => false,
    "cl" => array(
        "active"      => true,
        "code"        => "cl",
        "name"        => "Chile",
        "multi_lang"  => true,
        "lang"        => array(
            "es" => true,
            "en" => true
        ),
        "default_lang" => "es",
    ),
);

$CONFIG['analytics']['google'] = "";
