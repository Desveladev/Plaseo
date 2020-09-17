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
 * Nos traemos la configuracion y rutas configuradas para este index
 */
include_once dirname(__FILE__) . "/public/" . $country['name'] . "/setting.php";
include_once dirname(__FILE__) . "/public/" . $country['name'] . "/routes.php";
global $ROUTES, $ACTION_ROUTES;

/**
 * Validamos la existencia de de la variable 's', que representa la seccion
 * En caso de no existir, la seccion que se seteara, sera la 'main'
 */
if(isset($_GET['s']) && $_GET['s'] != "") {

    $section = $_GET['s'];
} else {

    $section = "main";
}

/**
 * Validamos la existencia de la variable 'p', que representa la pagina a la que queremos acceder
 * en caso de no existir, se va a setear como pagina la 'home'
 */
if(isset($_GET['p']) && $_GET['p'] != "") {

    $page = $_GET['p'];
} else {

    $page = "home";
}

/**
 * Validamos que a la seccion a la que se quiere acceder sea 'action'
 * Se valida tambien si existe la accion en el array de rutas
 */
if($section == "action" && $ACTION_ROUTES[$page] === true) {

    include dirname(__FILE__) . "/action/" . $page . ".php";
    exit();
}

/**
 * Validamos que la seccion y la pagina existan en las rutas
 * En caso de que no existan, se configura el header de la pagina como un error 404
 * Esta redirecciona la pagina a la de error 404
 */
if(!isset($ROUTES[$section]) || $ROUTES[$section][$page] === false) {

    header("Location: " . $CONFIG['base_url'] . "/404");
    exit();
}

/**
 * Configuramos toda la estructura html que se usara en la pagina y la desplegamos directamente
 * El lenguale se lo asignamos segun el configurado
 * Se agrega el head y las master con las que se trabajara en la pagina
 */
?>
<!doctype html>
<html lang="<?= $lang; ?>">
<head>
    <?php

    /**
     * El head trae a este archivo todos los tag configurados para el correcto funcionamiento de la pagina
     * Este contiene toda la configuracion del SEO de la pagina
     * Los archivos de estilos y javascript que se usan en la pagina a desplegar
     */
    include_once dirname(__FILE__) . "/public/" . $country['name'] . "/master/head.php";

    ?>
</head>
<body>
<?php

/**
 * El header es una seccion de la pagina que suele
 * usarse para contener el navegador de la misma
 */
include_once dirname(__FILE__) . "/public/" . $country['name'] . "/master/header.php";

/**
 * Este codigo trae a este archivo la pagina que se desplegara
 * De esta forma lo unico que mantenemos en el archivo base de la pagina, es el contenido principal de la pagina
 * Es obligatorio que exista este archivo y se agregue a la seccion de rutas
 * o se va a generar un error 404
 */
include_once dirname(__FILE__) . "/public/" . $country['name'] . "/page/" . $section . "/" . $page . ".php";

/**
 * El footer contiene la parte final de la pagina, en este archivo
 */
include_once dirname(__FILE__) . "/public/" . $country['name'] . "/master/footer.php";

?>
</body>
</html>

<?php
/**
 * Valudamos si el sistema esta ne modo de debug
 * En caso de no estarlo, se cierra y limpia todo lo que va a pantalla y lo minifica
 */
if($CONFIG['debug'] === false) {

    $html = ob_get_clean();
    print minify_html($html);
}
