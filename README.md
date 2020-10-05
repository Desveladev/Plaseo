# Plaseo
_Plantilla para poder crear paginas con una estructura basada en la optimización tanto de la pagina como de su desarrollo para mantenerla a corto y largo plazo._

## Como comenzar
_Al descargar el repositorio, se debe de subir al servidor local o en la nube, el contenido de la carpeta INIT._

Estos archivos no contienen ningun tipo de configuracion cargada por lo que si se ejecuta sin mas, se lanzaran algunos errores a pantalla.

### ¿Que archivos configurar?
#### Configuracion global _/lib/setting.php_
* Se debe revisar el pais default al que se apunta y ver que este mismo. A su vez, el codigo de o el parametro _code_, sea el mismo que el del pais apuntado.
* Aqui les dejo un ejemplo de como estara y de ahi en mas, se puede configurar como se encuentre conveniente. 
```
$CONFIG['deployment'] = array(
    "default"         => "df",
    "multi_national"  => false,
    "df" => array(
        "active"      => true,
        "code"        => "df",
        "name"        => "Default",
        "multi_lang"  => false,
        "lang"        => array(
            "es" => true,
        ),
        "default_lang" => "es",
    ),
);
```

#### Configuracion del pais _/public/[countri_code]/setting.php_
* Se debe definir la url base, que es la url desde donde se va a ejecutar la aplicacion
* Se debe definir la url estatica, que es la url en donde se van a almacenar los archivos estaticos de la pagina. Si los archivos se usaran dentro del mismo archivo, el codigo deberia de quedar asi:
```
[url base]/public/[$country['code']]/static
```
* Con este codigo la url base sera dinamica y no debera ser configurada en caso de que se active el multinacional ya que usa la variable ``country['code']``

#### Configuracion de las Rutas 
##### _/public/[countri_code]/routes.php_
Este archivo permite configurar las rutas activas del proyecto y algunas configuraciones de la cabecera de cada pagina existente.


