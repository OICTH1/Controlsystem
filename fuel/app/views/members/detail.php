<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php echo Asset::css("k_order_detail.css"); ?>
    <title>会員注文履歴詳細</title>
  </head>
  <body>
    <div class="content">
      <div class="header">
        <div class="title">
          <p>注文確認</p>
        </div>
        <div class="return">
          <div class="top">
            <p><?php echo Html::anchor('index.php/top','トップに戻る') ?></p>
          </div>
          <div class="back">
            <p><?php echo Html::anchor('index.php/members/history','戻る') ?></p>
          </div>
        </div>
      </div>
      <div class="k_name">
        あ
      </div>
      <p>注文日<input type="textbox"></p>
      <table>
        <tr>
          <td id="item_name">商品名</td>
          <td>サイズ</td>
          <td>個数</td>
          <td>金額</td>
        </tr>
        <div class="history">
          <tr>
            <td id="item_name">ピザ</td>
            <td>S</td>
            <td>1</td>
            <td id="money">\600</td>
          </tr>
        </div>
        <tr>
          <td ></td>
          <td colspan="2">合計金額</td>
          <td id="money">\600</td>
        </tr>
        <tr>
        <tr>
      </table>
    </div>
  </body>
</html>
