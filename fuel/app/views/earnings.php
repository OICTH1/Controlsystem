<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php echo Asset::css("earnings.css"); ?>
        <?php echo Asset::js("jquery-1.11.3.min.js"); ?>
    <title>売上情報</title>
    <script type="text/javascript">
      $(function(){
        $('.submit').click(function(){
          var categorys = [];
          $("#category:checked").map(function(){
                categorys.push($(this).parent('label').text());
          });
          var start = $("#s_year").val() + $("#s_month").val() + $("#s_day").val();
          var end = $("#e_year").val() + $("#e_month").val() + $("#e_day").val();
          var data = {
            s_period: start,
            e_period: end,
            category: categorys,
            item_name: $("#item_name").val(),
          }
          //console.debug(data);
          $.post("search/search.json",data,function(res){
                    console.log(res);
          });

        });
      });
    </script>
  </head>
  <body>
    <div class="header">
      <div class="title">
        <p>売上情報</p>
      </div>
      <div class="back">
        <p><?php echo Html::anchor('index.php/top','戻る') ?></p>
      </div>
    </div>
    <div class="content">
      <div class="content_top">
        <div class="search_condition">
          <div class="heading">
            検索条件
          </div>
          <div class="period">
            <p>期間選択</p>
            <label><input type="textbox" name="s_year" id="s_year">年</label>
            <label><input type="textbox" name="s_month" id="s_month">月</label>
            <label><input type="textbox" name="s_day" id="s_day">日</label>
            〜
            <label><input type="textbox" name="e_year" id="e_year">年</label>
            <label><input type="textbox" name="e_month" id="e_month">月</label>
            <label><input type="textbox" name="e_day" id="e_day">日</label>
          </div>
          <div class="category">
            <p>カテゴリー</p>
            <label><input type="checkbox" id="category" value="pizza">ピザ</label>
            <label><input type="checkbox" id="category" value="side">サイド</label>
            <label><input type="checkbox" id="category" value="drink">ドリンク</label>
          </div>
          <div class="item_name">
            <p>商品名</p><input type="textbox" id="item_name">
          </div>
          <input type="button" class="submit" value="検索">
        </div>
      </div>
      <div class="content_bottom">
        <div class="result">
          <table id="earnings_result" rules="rows" cellpadding="10">
            <thead class="table_head">
              <tr>
                <th>日付</th>
                <th>商品名</th>
                <th>サイズ</th>
                <th>個数</th>
                <th>金額</th>
              </tr>
            </thead>
            <tbody class="table_scroll">
              <template>
              <tr id="earnings">
    						<td></td>
    						<td></td>
    						<td></td>
    						<td></td>
                <td><td>
    					</tr>
            </templaste>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>