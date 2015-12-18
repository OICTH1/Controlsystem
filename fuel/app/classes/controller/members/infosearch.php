<?php

class Controller_Members_Infosearch extends Controller
{
  public function action_index()
  {
    $data = array();

    $data['member'] = Model_Member::find('all', array('where'=>array(array('id',1))));

    return Response::forge(View::forge('members/infosearch', $data));
  }
}

 ?>
