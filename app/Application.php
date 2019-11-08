<?php

namespace App;
use AltoRouter;
use Dispatcher;
 
class Application {

  private $router;
  private $controllerNamespace;

  /**
   * @var \App\Application
   */
  private static $_instance;

  private function __construct()
  {
    // On charge la conf
    $configData = parse_ini_file(__DIR__.'/config.ini');
    // On récupère le namespace des Controllers
    $this->controllersNamespace = $configData['CONTROLLERS_NAMESPACE'];
    $controllersNamespace = $this->controllersNamespace;

    $this->router = new AltoRouter();
    $this->router->setBasePath($_SERVER['BASE_URI']);
    $this->controllerNamespace = $configData['CONTROLLERS_NAMESPACE'];
    // on va définir dans un fichier à part, nos routes
    // pratique comme ça Application.php est générique, donc réutilisable de projet en projet
    // et routes.php est spécifique au projet 
    require 'routes.php';
    
    $this->router->addRoutes($routes);
  }

  public function run()
  {
    $match = $this->router->match();
    $dispatcher = new Dispatcher($match, $this->controllerNamespace.'ErrorController::notfound');
    $dispatcher->dispatch();
  }

  /**
   * Méthode permettant de récupérer l'unique instance de la classe Application
   * @return \App\Application
   */
  public static function getInstance() : \App\Application
  {
    if(empty(self::$_instance)){
      self::$_instance = new Application();
    }

    return self::$_instance;
  }



  /**
   * Get the value of router
   */ 
  public function getRouter()
  {
    return $this->router;
  }
}