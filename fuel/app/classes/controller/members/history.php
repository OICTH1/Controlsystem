<?php

class Controller_Members_History extends Controller
{
  public function action_index($id)
  {
    $user = Model_Member::find($id);

    $data['member'] = $user;
    $data['orders'] = $user->orders;

    return View::forge("members/history",$data);
  }
  public function action_detail($order_id)
  {
    $order = Model_Order::find($order_id);

    $data['member'] = $order->member;
    $data['orders'] = $order;
    $data['details'] = $order->orderline;

    return View::forge("members/detail",$data);
  }
}


 ?>
