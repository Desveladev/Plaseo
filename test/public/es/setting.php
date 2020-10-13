<?php

global $country, $lang, $CONFIG;

/**
 * Definimos las url base para el proyecto
 * Se trabaja por separado la base url y la static url para poder diferenciar desde donde se sacan los archivos estaticos
 */
$CONFIG['base_url']    = "http://localhost/plaseo/test";
$CONFIG['static_url']  = "http://localhost/plaseo/test/public/" . $country['code'] . "/static";

/**
 * la url actual habla de la pagina en la que nos encontramos parados
 * Esta se puede ir modificando segun la pagina, pais o idioma que se este desplegando
 */
$CONFIG['actual_url'] = $CONFIG['base_url'];

/**
 * Validamos que el sistema tenga el multinacional activo, de ser asi, la 'country_url', se actualiza con la url base
 * y el codigo de pais
 * En caso contrario el 'country_url', seria la url base
 */
if($CONFIG['deployment']['multi_national'] === true) {

    $CONFIG['country_url'] = $CONFIG['base_url'] . "/" . $country['code'];
} else {

    $CONFIG['country_url'] = $CONFIG['base_url'];
}

/**
 * Validamos que el codigo del pais sea o no igual al codigo default
 * tambien que el multi_nacional este activo
 * En caso de que no sea igual y que el multi_nacional este activo se cambia el 'actual_url', agregandole el codigo de
 * pais
 * En caso contrario, el actual url se mantiene igual al base_url
 */
if($country['code'] != $CONFIG['deployment']['default'] && $CONFIG['deployment']['multi_national'] === true) {

    $CONFIG['actual_url']  .= "/" . $country['code'];
}

/**
 * Configuramos el 'lang_url', el cual se usa para traspasos entre idiomas a usar
 * De base, 'lang_url', la country_url
 * En caso de que el multi_lang este activo, se debe de agregar el codigo de idioma que se va a usar durante
 * el despliegue
 */
$CONFIG['lang_url']    = $CONFIG['country_url'];
if($lang != $country['default_lang'] && $country['multi_lang'] === true) {

    $CONFIG['actual_url'] .= "/" . $lang;
    $CONFIG['lang_url']   .= "/" . $lang;
}

$CONFIG['header_fixed'] = true;
