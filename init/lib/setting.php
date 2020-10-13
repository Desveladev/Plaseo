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
        "name"        => "Default",
        "multi_lang"  => false,
        "lang"        => array(
            "es" => true,
        ),
        "default_lang" => "es",
    ),
);

$CONFIG['analytics']['google'] = "";
