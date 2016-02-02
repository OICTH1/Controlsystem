$(":checked").parent().css("background","#f3f365");

function poster(n,c){
  $.post('/ControlSystem/public/index.php/api/item/rowList.json',{vowel:n,category:c},listUpdata);
}
var name = 'a';
var category = 'pizza';
poster(name,category);
$(".indexlist").click(function(){
  name = $(this).attr("id");
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
      text += "<div class='viewitem'>"+data[i].name +"("+ data[i].size +")</div>";
    }else{
      text += "<div class='viewitem'>"+data[i].name +""+ data[i].size +"</div>";
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
