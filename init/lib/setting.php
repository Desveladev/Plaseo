<?php

$CONFIG = array();
$CONFIG['debug'] = true;

$CONFIG['deployment'] = array(
    "default"        => "cl",
    "multi_national" => false,
    "cl" => array(
        "active"     => true,
        "code"       => "cl",
        "name"       => "Chile",
        "multi_lang" => true,
        "lang"       => array(
            "es" => true,
            "en" => true,
        ),
        "default_lang" => "es",
    ),
    "pe" => array(
        "active"     => true,
        "code"       => "pe",
        "name"       => "Peru",
        "multi_lang" => false,
        "lang"       => array(
            "es" => true,
            "en" => false,
        ),
        "default_lang" => "es",
    ),
);

$CONFIG['analytics']['google'] = "UA-178438579-1";
