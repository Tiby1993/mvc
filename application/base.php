<?php
class Application {
  var $uri;
  var $model;

    function __construct($uri) {
    $this->uri = $uri;
  }
    //Instantiate the base class and the method (controller) with the uri array
    function loadController($class) {
    $file = "application/controller/".$this->uri['controller'].".php";
    if(!file_exists($file)) die();
      require_once($file);
      $controller = new $class();

     if(method_exists($controller, $this->uri['method'])) {
        $controller->{$this->uri['method']}($this->uri['var']);
      } else {
        $controller->index();
      }
  }
    // load the view layer
     function loadView($view,$data) {
    require_once('view/'.$view.'.php');
  }
     //load the model layer
 function loadModel($model) {
    require_once('model/'.$model.'.php');
    $this->$model = new $model;
  }
}

?>