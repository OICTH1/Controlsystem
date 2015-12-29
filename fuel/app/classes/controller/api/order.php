<?php

class Controller_Api_Order extends Controller_Rest
{
    const ORDER = 'order';

    public function before(){
        parent::before();
        //\Session::delete(self::ORDER);
        if(empty(\Session::get(self::ORDER))){
            \Session::set(self::ORDER,array('cart'=>array()));
        }
    }



    public function post_item(){
        $order = \Session::get(self::ORDER);
        $order['cart'][] = array(
            'item_id' => $_POST['item_id'],
            'item_name' => Model_Item::find($_POST['item_id'])->name,
            'order_id' => "",
            'num' => $_POST['num'],
            'size' => $_POST['size']
        );
        \Session::set(self::ORDER,$order);
        return $this->response($order);
    }

    public function get_test(){
        \Session::delete(self::ORDER);
        return $this->response(true);
    }

}
