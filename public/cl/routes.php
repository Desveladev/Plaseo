<?php

/**
 * Main Section
 */
$ROUTES = array(
    "error" => array(
        "404" => true,
    ),
    "main" => array(
        "home" => true,
    ),
);

$ACTION_ROUTES = array(
    "mail" => true,
);

$HEAD = array(
    "main" => array(
        "home" => array(
            "title"       => "",
            "description" => "",
            "image"       => "",
            "card"        => "",
            "type"        => "",
            "url"         => "/home",
            "site_name"   => "",
        ),
    ),
    "default" => array(
        "title"       => "Plaseo",
        "description" => "Descripcion general para las paginas",
        "image"       => "/img/favicon.png",
        "card"        => "summary",
        "type"        => "website",
        "site_name"   => "Plaseo",
    ),
);
