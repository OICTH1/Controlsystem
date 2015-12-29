<?php

class Controller_Order_Order extends Controller
{
  public function action_index()
  {
    $data['item_list'] = Model_Item::find('all');
    return View::forge("order/order",$data);
  }
}

 ?>
