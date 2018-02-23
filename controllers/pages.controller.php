<?php

class PagesController extends Controller
{

  public function index()
  {
    echo "Pages list!";
  }

  public function view()
  {
    $params = App::getRouter()->getParams();

    if (isset($params[0])) {
      $alias = strtolower($params[0]);
      echo "Here will be a page with '{$alias}' alias.";
    }
  }

}
