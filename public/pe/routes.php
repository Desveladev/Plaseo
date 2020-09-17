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
        "product" => true,
        "blog" => true,
        "contact" => false
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
            "url"         => "/",
        ),
        "product" => array(
            "title"       => "Product - PLASEO",
            "description" => "Product demo page - PLASEO",
            "image"       => "",
            "card"        => "",
            "type"        => "",
            "url"         => "/product",
        ),
        "blog" => array(
            "title"       => "Blog - PLASEO",
            "description" => "Blog demo page",
            "image"       => "",
            "card"        => "",
            "type"        => "",
            "url"         => "/blog",
        ),
        "contact" => array(
            "title"       => "Contact - PLASEO",
            "description" => "Contact demo page",
            "image"       => "",
            "card"        => "",
            "type"        => "",
            "url"         => "/contact",
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
