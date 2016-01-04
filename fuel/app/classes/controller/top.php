<?php

class Controller_Top extends Controller
{
  public function action_index()
  {
    Session::destroy();
    return View::forge('top/top');
  }

}

 ?>
