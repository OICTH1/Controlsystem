<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php echo Asset::css("k_infosearch.css"); ?>
    <?php echo Asset::js("jquery-1.11.3.min.js"); ?>
    <?php echo Asset::js("jquery.qrcode.min.js"); ?>
    <title>会員情報検索</title>
    <script type="text/javascript">
    $(function() {

    $('.submit').click(function(){
      $.ajax({
              type: "POST",
              url: "msearch/msearch.json",
              dataType : 'json',
              data:"key="+$("#form_name").val(),
              success: function( res )
              {
                  console.debug(res);
              }
           });

    })
  });
    </script>
  </head>
  <body>
    <div class="header">
      <div class="title">
        <p>会員情報検索</p>
      </div>
      <div class="back">
        <p><?php echo Html::anchor('index.php/top','戻る') ?></p>
      </div>
    </div>
    <div class="content">
      <div class="content_top">
        <!-- 検索条件 -->
        <div class="search">
          <p>検索条件</p>
          <?php Form::open(array('action' => '', 'method' => 'post')); ?>
            <table>
              <tr>
                <td>名前</td>
                <td><?php echo Form::input('name', ''); ?></td>
              </tr>
              <tr>
                <td>郵便番号</td>
                <td><?php echo Form::input('address', ''); ?></td>
              </tr>
              <tr>
                <td>電話番号</td>
                <td><?php echo Form::input('mailaddress', ''); ?></td>
              </tr>
              <tr>
                <td>メールアドレス</td>
                <td><?php echo Form::input('mailaddres', ''); ?></td>
              </tr>
            </table>
            <p><?php echo Form::submit('search', '検索', array('class'=>'submit')); ?></p>
          <?php Form::Close(); ?>
        </div>
      </div>
      <div class="content_bottom">
        <div class="result">
          <table rules="rows" cellpadding="10">
            <thead class="table_head">
              <tr>
                <th>氏名</th>
                <th>電話番号</th>
                <th id="address">住所</th>
                <th id="detail">&nbsp</th>
              </tr>
            </thead>
            <tbody class="table_scroll">
              <tr>
    						<td></td>
    						<td></td>
    						<td id="address"></td>
    						<td id="detail">
                  <?php echo Form::Open('index.php/members/history'); ?>
                  <?php echo Form::Button('button','注文履歴'); ?>
                  <?php echo Form::Close();?>
                </td>
    					</tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
