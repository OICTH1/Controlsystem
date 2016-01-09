<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>商品登録</title>
    <link rel="stylesheet" type="text/css" href="../css/item_registration.css">
  </head>
  <body>
    <div class="content">
        <form class="regi_content" action="" method="">
          <p><label>商品名<input id="item_name" type="textbox" name="item_name"></label></p>
          <p><label>フリガナ<input id="phonetic" type="textbox" name="phonetic"></labbel></p>
          <p><label>単価<input id="price" type="textbox" name="money">円</label></p>
          <p>カテゴリー
            <label><input id="category" type="checkbox" name="pizza">ピザ</label>
            <label><input type="checkbox" name="side">サイド</label>
            <label><input type="checkbox" name="drink">ドリンク</label>
          </p>
          <p>サイド単価
            <label><input type="checkbox" name="S" checked="checked">S
              <input id="s_price" type="textbox" name="s_money">円</label>
            <label><input  type="checkbox" name="M" checked="checked">M
              <input id="m_price" type="textbox" name="m_money">円</label>
            <label><input type="checkbox" name="L" checked="checked">L
              <input id="l_price" type="textbox" name="l_money">円</label>
          </p>
          <p><label>商品説明<br>
            <textarea id="explanation" name="explanation" rows="6" cols="60"></textarea></label>
          </p>
          <p><label>画像ファイル<input id="appload" type="file" name="pic"></label></p>
          <p><input id="registration" type="submit" value="登録"></p>
        </form>
    </div>
  </body>
</html>
