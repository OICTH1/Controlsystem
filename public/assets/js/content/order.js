
var api_basepath = 'http://localhost/Controlsystem/public/index.php/api/';

$('input[name=category]:radio').change(function(){
    var select_category = $('input[name=category]:radio:checked').val();
    var show_item = $('.item:not(.item-hide)');
    /*show_item.each(function(i,item){
        console.debug(item);
        //item.removeClass('item-hide');
    });*/
    show_item.show();
    var hide_item = $('.item:not(.' + select_category  + '):not(.item-hide)');
    hide_item.hide();
});

$(function(){
    $('.item').click(function(){
        $('.item-selected').removeClass('item-selected');
        $(this).addClass('item-selected');
        $('.slct-item-name').text($(this).text());
    });

    $('.cartin-btn').click(function(){
        addItem();
    });

    $(document).on('click','.cart-delete-btn',function(){
        var $order_line = $(this).parent().parent();
        var order_id = $order_line.children('.number').text();
        deleteItem(order_id);
    });
});

function addItem(){
    var data = {
        item_id : $(".item-selected").attr("id"),
        size : $('input[name=size]:radio:checked').val(),
        num : $('input[name=num]:radio:checked').val(),
    }
    var url = 'http://localhost/Controlsystem/public/index.php/api/order/item';
    $.post(url,data,function(a){
        cartUpdate(a);
    },"json");
}

function deleteItem(order_id){
    var data = {
        id : order_id
    }
    var url = 'http://localhost/Controlsystem/public/index.php/api/order/delete';
    $.post(url,data,function(a){
        cartUpdate(a);
    },"json");
}

function cartUpdate(data){
    console.log(data);
    //var data = JSON.parse(json);
    var cart = document.getElementsByClassName('order_table_scroll')[0];
    cart.innerHTML = "";
    data['cart'].forEach(function(order,idx){
        var element = document.createElement('tr');
        element.innerHTML = "<td class=\"number\">" + (idx+1) + "</td><td class=\"item_name\">" + order['item_name'] + "</td><td class=\"item_num\">" + order['num'] + "</td><td class=\"item_size\">"+ order['size'] +"</td><td><input type=\"button\" class=\"cart-edit-btn\" value=\"編集\"><br><input type=\"button\" class=\"cart-delete-btn\" value=\"削除\"></td></tr>";
        cart.appendChild(element);
    });
}
