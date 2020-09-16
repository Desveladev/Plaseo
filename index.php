<?php

include_once "lib/setting.php";
include_once "lib/php-html-css-js-minifier.php";
global $CONFIG;

/**
 * Validamos que exista la variable $_GET['c'] y que no este vacia
 * En caso de que exista tanto la variable como el pais en la configuración
 * En caso contrario se usara el pais marcado como default en la variable $CONFIG['deployment']
 */
if(isset($_GET['c']) && $_GET['c'] != "" && isset($CONFIG['deployment'][$_GET['c']]) && $CONFIG['deployment'][$_GET['c']]['active'] === true) {

    $country = $CONFIG['deployment'][$_GET['c']];
} else {

    $country = $CONFIG['deployment'][$CONFIG['deployment']['default']];
}

/**
 * Validamos que exista la variable $_GET['l'], tambien se valida su existencia en los idiomas del pais configurado previamente
 * En caso de que exista y que este activo, se almacena en la variable $lang
 * En caso contrario, se usa el idioma marcado como default en la variable $country['lang']['default_lang']
 */
if(isset($_GET['l']) && $_GET['l'] != "" && isset($country['lang'][$_GET['l']]) && $country['lang'][$_GET['l']] === true) {

    $lang = $_GET['l'];
} else {

    $lang = $country['default_lang'];
}

/**
 * Validamos si el sistema esta en modo de debug
 * En caso de no estarlo, se comienza a obtener lo que se imprime a pantalla
 */
if($CONFIG['debug'] === false) {

    ob_start();
}

/**
 * Incluimos el index del pais seleccionado
 */
include_once "public/" . $country['name'] . "/index.php";

/**
 * Valudamos si el sistema esta ne modo de debug
 * En caso de no estarlo, se cierra y limpia todo lo que va a pantalla y lo minifica
 */
if($CONFIG['debug'] === false) {

    $html = ob_get_clean();
    print minify_html($html);
}
