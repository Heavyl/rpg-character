<?php 
require '../helpers.php';

//Creates routes for the app
$routes = [
    new Route('/','controllers/home.php','home'),
    new Route('/listings','controllers/listings/index.php','listings'),
    new Route('/listings/create','controllers/listings/create.php','create'),
    
];

$uri = $_SERVER['REQUEST_URI'];

//Display correct view depending on URI or display 404 page
foreach( $routes as $route ) {        
    if($uri === $route->uri){
        inspect($route);
        inspect($uri);
        $route->load();
    } 
}
/**
 * Route class
 * @param string $uri
 * @param string $route
 * @param string $view 
 */

class Route{

    public $uri;
    private $controller;
    private $view;

    public function __construct( $uri, $controller, $view ){
        $this->uri = $uri;
        $this->route = $controller;
        $this->view = $view;
    }
    public function load(){
        loadView($this->view);
    }
}