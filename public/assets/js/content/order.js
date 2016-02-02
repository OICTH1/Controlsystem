var baseurl = '/ControlSystem/public/index.php/';
var url = 'api/order/cart';

function poster(n,c){
  $.post('/ControlSystem/public/index.php/api/item/rowList.json',{vowel:n,category:c},listUpdata);
}
var name = 'a';
var category = 'pizza';
poster(name,category);

$('.indexlist_form input[name=index]').change(
  function() {
    $('.indexlist_form input' ) . closest( 'label' ) . css( {
    backgroundColor: 'orangered',
  } );
    $( '.indexlist_form :checked' ) . closest( 'label' ) . css( {
    backgroundColor: 'gold',
  });
}).trigger('change');

$(".indexlist_item").click(function(){
  name = $(this).attr("value");
  poster(name,category);

});

$('.item_title_form input[name=c]').change(
  function() {
    $('.item_title_form input' ) . closest( 'label' ) . css( {
    backgroundColor: 'lightblue',
  } );
    $( '.item_title_form :checked' ) . closest( 'label' ) . css( {
    backgroundColor: 'cyan',
  });
}).trigger('change');

$(".item_title").click(function(){
  category = $(this).attr("value");
  poster(name,category);

});

function listUpdata(data){
  var text = '';

  for(var i = 0;i <data.length;i++){
    if( i % 3 == 0){
      text += "<div class='viewlistrow'>";
    }

    if(name=="pizza"){
      text += "<div class='viewitem' id='" + data[i].size + "' place='" + data[i].place + "'>" + data[i].name + "(" + data[i].size +")</div>";
    }else{
      text += "<div class='viewitem' name=''>" + data[i].name + "" + data[i].size +"</div>";
    }

    if(data.length % 3 == 1  && (data.length - i)<3 ){
     text += "<div class='viewitem_n'></div>"
     text += "<div class='viewitem_n'></div>"
       }
     if( i % 3 ==2){
       text += "</div>";
     }
  }
  $(".viewlist").html(text);
}


//----------------------------------

$.get(baseurl + url,function(a){
    cartUpdate(a);
},"json");

$(document).on('change','select',function(){
    var $order_line = $(this).parent().parent();
    var order_id = $order_line.children('.number').text();
    var num = $order_line.children('.item_num').children('select').val();
    var size = $order_line.children('.item_size').children('select').val();
    editItem(order_id,num,size);
});

$('.cartin-btn').click(function(){
        addItem();
    });


function addItem(){
    var id = $(".item-selected").attr("id");
    var size = "";
        size = $();
    var num = $();
    var data = {
        item_id : id,
        "size" : size,
        "num" : num
    }
    var url = 'api/order/add';
    $.post(baseurl + url,data,function(a){
        cartUpdate(a);
    },"json");
}

function editItem(order_id,num,size){
    var data = {
        id : order_id,
        num : num,
        size : size,
    }
    var url = 'api/order/edit';
    $.post(baseurl + url,data,function(a){
        cartUpdate(a);
    },"json");
}

function deleteItem(order_id){
    var data = {
        id : order_id
    }
    var url = 'api/order/delete';
    $.post(baseurl + url,data,function(a){
        cartUpdate(a);
    },"json");
}

function cartUpdate(data){
    //console.log(data);
    var cart = document.getElementsByClassName('order_table_scroll')[0];
    cart.innerHTML = "";
    data['cart'].forEach(function(order,idx){
        var element = document.createElement('tr');
        var numHTML = "<select>";
        for(var i = 1; i <= 5; i++){
            var addStr = "<option value=" + i + ">" + i + "</option>"
            if(order['num'] == i){
                 addStr = "<option value=" + i + " selected>" + i + "</option>"
            }
            numHTML += addStr;
        }
        var sizeHTML = " ";
        if(order['category'] == 'ピザ'){
            sizeHTML = "<select>";
            ['S','M','L'].forEach(function(size){
                var addStr = "<option value=" + size.toLowerCase() + ">" + size + "</option>";
                if(order['size'] == size.toLowerCase()){
                     addStr = "<option value=" + size.toLowerCase() + " selected>" + size + "</option>";
                }
                sizeHTML += addStr;
            });
        }


        element.innerHTML = "<td class=\"number\">" + (idx+1) + "</td><td class=\"item_name\">" + order['item_name'] + "</td><td class=\"item_num\">" + numHTML + "</td><td class=\"item_size\">"+ sizeHTML +"</td><td><input type=\"button\" class=\"cart-delete-btn\" value=\"削除\"></td></tr>";
        cart.appendChild(element);
    });
}
