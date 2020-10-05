<?php

/**
 * La variable de rutas almacena todas las rutas en un array multidimencional el cual indica si la pagina esta activa
 * o no
 * En caso de que no este activa, al tratar de ingresar, se redireccionara a un 404
 * El ideal de esto es que las paginas se agreguen y se activen una vez esten completas en su desarrollo
 */
$ROUTES = array(
    "error" => array(
        "404" => true,
    ),
    "main" => array(
        "home"    => true,
        "product" => true,
        "blog"    => true,
        "contact" => true
    ),
);

/**
 * La variable de rutas de acciones, contiene todas las acciones y las define como activas o no
 * En caso de no estar activas, se redirecciona a un 404 tipo JSON
 */
$ACTION_ROUTES = array(
    "mail" => true,
);

/**
 * La variable de cabecera, contiene los parametros de cada pagina los cuales deben de estar ordenadas de igual forma
 * que la variable de rutas, solo que en vez de almacenar un true o false, almacena un array con los parametros
 * de cabecera de la pagina como el titulo y descripcion de la pagina
 * Esta variable contiene una seccion de default, la cual almacena valores que se usaran en caso de que las variables
 * de una pagina no existan o esten vacias
 */
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
        "image"       => "/img/cooperation_work_negotiation.png",
        "card"        => "summary",
        "type"        => "website",
        "site_name"   => "Plaseo",
        "have_header" => true,
        "have_footer" => true,
    ),
);
