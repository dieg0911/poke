<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//                 clase::metodo

$routes->get('/inicio', 'Home::index');
$routes->get('/categorias', 'CategoriasController::index');
$routes->get('/productos', 'ProductosController::index');

//Rutas para el login
$routes->get('/', 'SigninController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

//CRUD CATEGORIAS
// vista de la tabla de categorias y eliminados
$routes->get('dataTable', 'InventarioController::index');
$routes->get('categorias/eliminados', 'CategoriasController::eliminados');
//agregar y guardar crud categorias
$routes->get('categorias-form', 'CategoriasController::nuevo');
$routes->post('insert-form', 'CategoriasController::insertar');
// editar actualizar eliminar crud categorias
$routes->get('editar-form/(:num)', 'CategoriasController::editar/$1');
$routes->post('actualizar', 'CategoriasController::actualizar');
$routes->get('eliminar/(:num)', 'CategoriasController::eliminar/$1');
$routes->get('reingresar/(:num)', 'CategoriasController::reingresar/$1');

//CRUD productos
// vista de la tabla de productos y eliminados
$routes->get('productos/eliminados', 'ProductosController::eliminados');
//agregar y guardar crud productos
$routes->get('/productos-form', 'ProductosController::nuevo');
$routes->post('insertp-form', 'ProductosController::insertar');
// editar actualizar eliminar crud productos
$routes->get('editar/(:num)', 'ProductosController::editar/$1');
$routes->post('actualizarp', 'ProductosController::actualizar');
$routes->get('eliminarp/(:num)', 'ProductosController::eliminar/$1');
$routes->get('reingresarp/(:num)', 'ProductosController::reingresar/$1');

//ruta para cliente
$routes->get('/clientes', 'ClientesController::index');
$routes->get('/clientes-form', 'ClientesController::nuevo');
$routes->post('insertc-form', 'ClientesController::insertar');


//
//
/*
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}