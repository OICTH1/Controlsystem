<?php
class Controller_Test extends Controller
{
  public function action_index()
  {
    $data = array();

    $data['test'] = Model_item::query()->where('id',1)->get();

    return Response::forge(View::forge('test', $data));
  }
}

 ?>
