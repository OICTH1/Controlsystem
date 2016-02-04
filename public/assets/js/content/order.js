var baseurl = '/ControlSystem/public/index.php/';
var url = 'api/order/cart';

function poster(n,c){
  $.post('/ControlSystem/public/index.php/api/item/rowList.json',{vowel:n,category:c},listUpdata);
}
var name = 'a';
var category = 'pizza';
var cartdata;
var sumdata =0;

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

    if(category == "pizza"){
      text += "<div class='viewitem' >" + data[i].name + " (" + data[i].size +") <input type='hidden' name='" + data[i].size + "' value='" + data[i].place + "'></div>";
    }else{
      text += "<div class='viewitem' >" + data[i].name + "<input type='hidden' name='" + data[i].size + "' value='" + data[i].place + "'></div>";
    }

    if(data.length % 3 == 1  && (data.length - i)<3 ){
     text += "<div class='viewitem_n'></div>";
     text += "<div class='viewitem_n'></div>";
   }else if(data.length % 3 == 2  && (data.length - i)<2 ){
     text += "<div class='viewitem_n'></div>";
   }else if( i % 3 ==2){
       text += "</div>";
     }
  }
  $(".viewlist").html(text);
}
cartpos("5","l","50");
function cartpos(id,size,num){
  $.post('/ControlSystem/public/index.php/api/order/add.json',{id:id,size:size,num:num},cartUpdata);
}

function cartUpdata(data){
  var i;
  var sum = 0;
  for(i=0;i<4;i++){
    if(data["cart"][i] == undefined){break;}
    sum = data["cart"][i].unit_price * data["cart"][i].num;
    $(".tr"+i).children(".number").html(i);
    if(data["cart"][i].size == ""){
    $(".tr"+i).children(".item_name").html(data["cart"][i].item_name);
  }else{
    $(".tr"+i).children(".item_name").html(data["cart"][i].item_name + "("+ data["cart"][i].size+")");
  }
    $(".tr"+i).children(".num").html(data["cart"][i].num);
    $(".tr"+i).children(".unit_price").html(data["cart"][i].unit_price);
    $(".tr"+i).children(".sum_price").html(sum);
  }
  Object.keys(data["cart"]).forEach(function (key){
    sum = data["cart"][key].unit_price * data["cart"][key].num;
    sumdata += sum;
  });
  $(".sumpricetd").html(sumdata);
}

function cartScroll(){
  var i=0;
  var j=0;
  var k=4;
  for(i = j;i <= k;i++){
//    $(".number ")data["cart"]
  }
}

$(".viewitem").click(function(){
  alert("hoge");
});
