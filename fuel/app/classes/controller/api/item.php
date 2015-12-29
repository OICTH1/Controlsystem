<?php

class Controller_Api_Item extends Controller_Rest
{
    public function get_list($category){
        $category_table = array("pizza" => "ピザ","side"=> "サイド","drink"=> "ドリンク");
        $item_list = Model_Item::find('all',array(
            "where" => array(
                array("category" => $category_table[$category])
            )
        ));
        return $this->response($item_list);
    }
}
