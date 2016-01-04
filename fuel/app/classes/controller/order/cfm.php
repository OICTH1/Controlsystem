<?php

class Controller_Order_Cfm extends Controller
{
    const ORDER = 'order';

    public function action_index()
    {
        $orders =  \Session::get(self::ORDER);
        $data['orders'] = array();
        $data['total'] = 0;
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
                $data['total'] += $price;
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

    public function action_commit(){
        $orders =  \Session::get(self::ORDER);
        if(count($orders['curt']) == 0){
            Response::redirect('index.php/order/order');
        }
        $post = $_POST;
        $order = new Model_Order();
        $order->postalcode = $post['postalcode1'] . '-' . $post['postalcode2'];
        $order->destination = $post['address'];
        $order->print_flag = false;
        $order->status = false;
        $order->order_date = date( "Y-m-d H:i:s", time() );
        $customer = Model_Member::query()->where('name', $post['customer_name'])->get_one();
        if(!empty($customer)){
            $order->member_id = $customer->id;
        } else {
            $order->member_id = null;
        }
        $order->save();
        $order_id = $order->id;

        //make orderlines
        $orders =  \Session::get(self::ORDER);
        foreach ($orders['cart'] as $key => $value) {
            $orderline = new Model_Orderline();
            $orderline->order_id = $order_id;
            $orderline->item_id = $value['item_id'];
            $orderline->num = $value['num'];
            $orderline->size = strtoupper($value['size']);
            $orderline->save();
        }
        return View::forge('order/commit');
    }
}

 ?>
