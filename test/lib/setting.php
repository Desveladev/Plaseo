<?php

$CONFIG = array();
$CONFIG['debug'] = true;

$CONFIG['deployment'] = array(
    "default"         => "cl",
    "maintenance"     => false,
    "multi_national"  => true,
    "cl" => array(
        "active"      => true,
        "code"        => "cl",
        "name"        => "Chile",
        "multi_lang"  => false,
        "lang"        => array(
            "es" => true,
            "en" => true
        ),
        "default_lang" => "es",
    ),
    "es" => array(
        "active"      => true,
        "code"        => "es",
        "name"        => "España",
        "multi_lang"  => true,
        "lang"        => array(
            "es" => true,
            "en" => true
        ),
        "default_lang" => "es",
    ),
);

$CONFIG['analytics']['google'] = "";
