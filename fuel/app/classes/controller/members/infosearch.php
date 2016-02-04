<?php

class Controller_Members_Infosearch extends Controller
{
  public function action_index()
  {
    return Response::forge(View::forge('members/infosearch'));
  }
}

 ?>
