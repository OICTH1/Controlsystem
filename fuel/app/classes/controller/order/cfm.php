<?php

class Controller_Order_Cfm extends Controller
{
    const ORDER = 'order';

    public function action_index()
    {
        $orders =  \Session::get(self::ORDER);
        $data['orders'] = array();
        if(!empty($orders['cart'])){
            foreach ($orders['cart'] as $order) {
                $item = Model_Item::find($order['item_id']);
                switch ($order['size']) {
                    case 's':
                        $unit_price = $item->unit_price_s;
                        break;
                    case 'm':
                        $unit_price = $item->unit_price_m;
                        break;
                    case 'l':
                        $unit_price = $item->unit_price_l;
                        break;
                    default:
                        $unit_price = $item->unit_price;
                        break;
                }
                $price = $unit_price * $order['num'];
                $data['orders'][] = array(
                    'item_name' => $order['item_name'],
                    'num' => $order['num'],
                    'size' => strtoupper($order['size']),
                    'price' => $price
                );
            }
        }
        return View::forge("order/cfm",$data);
    }
}

 ?>
