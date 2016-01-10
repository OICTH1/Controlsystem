<?php

class Controller_Earnings_Search extends Fuel\Core\Controller_Rest
{
    public function post_search()
    {


      $data = array(
        'start' => $_POST['s_period'],
        'end' => $_POST['e_period'],
        'category' => array(
          $_POST['category[0]'],$_POST['category[1]'],$_POST['category[2]'],
        )
        'item_name' => $_POST['name'],
      );

      return $data;

    }
}
?>
