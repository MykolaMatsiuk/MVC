<?php

class Router {

  protected $uri;

  protected $controller;

  protected $action;

  protected $params;

  protected $route;

  protected $method_prefix;

  protected $language;

  public function __construct($uri)
  {
    $this->uri = urldecode(trim($uri, '/'));

    // Get defaults
    $routes = Config::get('routes');
    $this->route = Config::get('default_route');
    
  }

  /**
   *
   * @return mixed
   *
   */
  public function getUri () 
  {
    return $this->uri;
  }

  /**
   *
   * @return mixed
   *
   */
  public function getController () 
  {
    return $this->controller;
  }

  /**
   *
   * @return mixed
   *
   */
  public function getAction () 
  {
    return $this->action;
  }

  /**
   *
   * @return mixed
   *
   */
  public function getParams () 
  {
    return $this->params;
  }
  
  /**
   *
   * @return mixed
   *
   */
  public function getRoute () 
  {
    return $this->route;
  }

  /**
   *
   * @return mixed
   *
   */
  public function getMethodPrefix () 
  {
    return $this->method_prefix;
  }

  /**
   *
   * @return mixed
   *
   */
  public function getLanguage () 
  {
    return $this->uri;
  }

}
