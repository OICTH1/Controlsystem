<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php echo Asset::css("top.css"); ?>
    <title>トップページ</title>
  </head>
  <body>
    <div class="content">
      <div class="frame"><p><?php echo Html::anchor('index.php/members/infosearch','会員検索'); ?></p></div>
      <div class="frame"><p><?php echo Html::anchor('index.php/item/search','商品検索')?></p></div>
      <!--<div class="frame"><p><?php echo Html::anchor('index.php/order/order','ピザ注文') ?></p></div>
      <div class="frame"><p><?php echo Html::anchor('index.php/item/registration','商品登録')?></p></div>-->
      <div class="frame"><p>売上情報</p></div>
    </div>
  </body>
</html>
