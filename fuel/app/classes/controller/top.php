<?php

class Controller_Top extends Controller
{
  const ORDER = 'order';
  public function action_index()
  {

    Session::delete(self::ORDER);
    return View::forge('top/top');
  }

}

 ?>
