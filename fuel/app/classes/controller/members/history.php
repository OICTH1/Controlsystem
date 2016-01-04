<?php

class Controller_Members_History extends Controller
{
  public function action_index()
  {
    $name = $_POST['m_name'];

    return View::forge("members/history");
  }
}


 ?>
