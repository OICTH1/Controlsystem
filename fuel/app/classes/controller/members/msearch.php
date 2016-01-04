<?php
  class Controller_Members_Msearch extends \Fuel\Core\Controller_Rest
  {
    public function post_msearch()
    {
      $search = $_POST['key'];
      $data = array('key' => $search);

      $condtions['where'] = array(array('name','LIKE',$search));

      $result = Model_Member::find('all',$condtions);
      return $result;


    }
  }


 ?>
