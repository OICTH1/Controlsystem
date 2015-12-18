<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	  <?php echo Asset::css("order_cfm.css"); ?>
    <title>注文確認</title>
  </head>
  <body>
    <div class="header">
      <div class="title">
        <p>注文確認</p>
      </div>
      <div class="return">
        <div class="top">
          <p><?php echo Html::anchor('index.php/top','トップに戻る') ?></p>
        </div>
        <div class="back">
          <p><?php echo Html::anchor('index.php/order/order','戻る') ?></p>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="content_top">
        <table>
          <tr>
            <td id="label"><b>注文日</b></td>
            <td><input type="textbox" name="name" size="10" maxlength="10"></td>
          </tr>
          <tr>
            <td id="label"><b>注文者</b></td>
            <td><input type="textbox" name="name" size="10" maxlength="10"></td>
          </tr>
          <tr>
              <td id="label"><b> 郵便番号</b></td>
              <td><input type="textbox"  size="3" maxlength="3"> <b>-</b>
                <input type="textbox"  size="4" maxlength="4">
              </td>
            </tr>
            <tr>
              <td id="label"><b> 住所</b></td>
              <td><input type="textbox"  size="30" maxlength="30">
              </td>
            </tr>
          </table>
      </div>
      <div class="content_center">
        <table border="2" rules="rows" cellpadding="10">
          <thead class="table_head">
            <tr>
              <th id="item_name">商品名</th>
              <th>個数</th>
              <th>サイズ</th>
              <th>金額</th>
            </tr>
          </thead>
          <tbody class="table_scroll">
            <tr>
              <td id="item_name">ピザ</td>
              <td>1</td>
              <td id="size">S</td>
              <td id="price">600</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="content_bottom">
        <div class="total"></div><br>
        <p>
          <input type="button" name="name" value="再編集">
          <input type="button" name="name" value="キャンセル">
          <input type="button" name="name" value="注文">
        </p>
      </div>
    </div>
  </body>
</html>
