<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .No{
        float: left;
      }
      .datetime{
        float: right;
        text-align: center;
        border-bottom:
      }
      .clearfix:after{
	      content: "";
	      clear: both;
	      display: block;
      }
      th:not(:last-child){
        border-right:solid 1px
      }
      td:not(:first-child){
        text-align: center;
      }
      td > p{
        margin: 4px 0px
      }
      #qrcode {
        width: 60px;
        margin: 0 auto;
      }
      #bc{
        width:100%;
        position: absolute;
        bottom: 0px;
      }
    </style>
    <script type="text/javascript" src="../script/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../script/jquery.qrcode.min.js"></script>
    <script type="text/javascript">
      $(function(){
        var order = {
                        "No":"1234567890128",
                        "list":[
                            {"name":"マルゲリータ","size":"S","num":1},
                            {"name":"マルゲリータ","size":"S","num":1},
                            {"name":"マルゲリータ","size":"S","num":1},
                            {"name":"マルゲリータ","size":"S","num":1},
                            {"name":"マルゲリータ","size":"S","num":1},
                            {"name":"マルゲリータ","size":"S","num":1},
                            {"name":"マルゲリータ","size":"S","num":1},
                            {"name":"ナゲット(8)","num":1}
                        ]
                    };

        make(order);

      });
      var make = function(order){
        $(".No").text("No." + order["No"].slice(-4));
        $(".datetime").text(formatDate(new Date));
        addRow(order["list"]);
        $("#qrcode").qrcode({width:60,height:60,text:order["No"]});
      };
      var formatDate = function (date, format) {
        if (!format) format = 'YYYY/MM/DD hh:mm:ss';
        format = format.replace(/YYYY/g, date.getFullYear());
        format = format.replace(/MM/g, ('0' + (date.getMonth() + 1)).slice(-2));
        format = format.replace(/DD/g, ('0' + date.getDate()).slice(-2));
        format = format.replace(/hh/g, ('0' + date.getHours()).slice(-2));
        format = format.replace(/mm/g, ('0' + date.getMinutes()).slice(-2));
        format = format.replace(/ss/g, ('0' + date.getSeconds()).slice(-2));
        if (format.match(/S/g)) {
          var milliSeconds = ('00' + date.getMilliseconds()).slice(-3);
          var length = format.match(/S/g).length;
          for (var i = 0; i < length; i++) format = format.replace(/S/, milliSeconds.substring(i, i + 1));
        }
        return format;
      };
      function addRow(order_list){
        var table = document.getElementById("order");
        order_list.forEach(function(order){
          var row = table.insertRow(-1);
          var keys = ["name","size","num"];
          for(i = 0; i < 3; i++){
            var cell = row.insertCell(-1);
            var data = order[keys[i]] == undefined? "":order[keys[i]];
            cell.innerHTML = "<p>" + data + "</p>";
          }
        });
      }
    </script>
  </head>
  <body >
    <div style="width:282px;height:400px;position:absolute">
      <h3 class="clearfix" style="margin-bottom:10px;"><span class="No">No.0001</span><span class="datetime">2015/10/10 12:44:23</span></h3>
      <table id="order" style="width:100%;" frame="border"rules="groups">
        <thead>
          <tr style="text-align: center"><th>商品名</th><th>サイズ</th><th>数量</th></tr>
        </thead>
        <tbody>
          <tr style="display:none"></tr>
        </tbody>
      </table>
      <div id="bc">
        <hr style="border-top: 2px dashed #666;width: 100%;">
        <h5 class="clearfix" style="margin-bottom:10px;"><span class="No">No.0001</span><span class="datetime">2015/10/10 12:44:23</span></h5>
        <div id="qrcode"></div>
      </div>
    </div>
  </body>
</html>
