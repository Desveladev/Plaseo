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
        "construct" => true,
    ),
    "main" => array(
        "home"    => true
    ),
);

/**
 * La variable de rutas de acciones, contiene todas las acciones y las define como activas o no
 * En caso de no estar activas, se redirecciona a un 404 tipo JSON
 */
$ACTION_ROUTES = array(

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
            "url"         => "",
        ),
    ),
    "error" => array(
        "404" => array(
            "title"       => "",
            "description" => "",
            "image"       => "",
            "card"        => "",
            "type"        => "",
            "url"         => "",
        ),
        "construct" => array(
            "title"       => "",
            "description" => "",
            "image"       => "",
            "card"        => "",
            "type"        => "",
            "url"         => "",
            "have_header" => false,
            "have_footer" => false,
        ),
    ),
    "default" => array(
        "title"       => "",
        "description" => "",
        "image"       => "",
        "card"        => "summary",
        "type"        => "website",
        "site_name"   => "",
        "have_header" => true,
        "have_footer" => true,
    ),
);


