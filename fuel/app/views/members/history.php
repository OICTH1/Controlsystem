<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php echo Asset::css("k_order_history.css"); ?>
    <title>会員注文履歴</title>
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
            <p><?php echo Html::anchor('index.php/members/infosearch','戻る') ?></p>
          </div>
        </div>
      </div>
      <div class="k_name">
        ａ
      </div>
      <table>
        <tr>
          <td>注文日</td>
          <td>商品一覧</td>
          <td>&nbsp</td>
        </tr>
        <div class="history">
            <p>
              <tr>
                <td id="time">2015/11/17</td>
                <td id="item_name">ピザ、ピザ、ピザ、ピザ、ピザ、ピザ、ピザ</td>
                <td>
                  <?php echo Form::Open('index.php/members/detail'); ?>
                  <?php echo Form::Button('button','詳細'); ?>
                  <?php echo Form::Close();?>
                </td>
              </tr>
            </p>
        </div>
      </table>
    </div>
  </body>
</html>
