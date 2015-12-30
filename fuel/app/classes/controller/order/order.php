<?php

class Controller_Order_Order extends Controller
{
    const ORDER = 'order';
    public function action_index()
    {
        \Session::delete(self::ORDER);
        $data['item_list'] = Model_Item::find('all');
        return View::forge("order/order",$data);
    }
}

 ?>
