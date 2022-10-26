<?php
use App\App;
use App\Helpers\View;

$router =  new \Bramus\Router\Router();

/* ----------------------------------------------------------------
 | # IMPORTANTE:
 | La documentacion del `Router` se encuentra en:
 |      - https://github.com/bramus/router
 * ----------------------------------------------------------------
*/

/* Establecemos el namespace de los controllers */
$router->setNamespace("\App\Controllers");

/* ------------------------------------------------------------------------
 | Aquí van las rutas web 
 * ------------------------------------------------------------------------
 */
$router->get("/", "IndexController@index");
$router->get('/project/{slug}/ver', "ProjectController@index");

/* ------------------------------------------------------------------------
 | Aquí van las rutas para la `api` 
 * ------------------------------------------------------------------------
 */
$router->mount('/api', function() use($router) {
    foreach ( glob( __DIR__.'/Api/*.php' ) as $r  ) {
        require_once $r;
    }
});

/* ------------------------------------------------------------------------
 * Esto es para ejecutar el router
 * ------------------------------------------------------------------------
 */
$router->run();
