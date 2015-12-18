<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/item_search.css">
    <title></title>
  </head>
  <body>
    <div class="content">
      <div class="content_top">
          <div class="search">
            <form action="" method="">
              <p>検索条件</p>
              <p>商品名<br>フリガナ</p>
              <input type="textbox" id="item_name">
              <p>
                <input type="checkbox" name="pizza" value="1">ピザ
                <input type="checkbox" name="side" value="2">サイド
                <input type="checkbox" name="drink" value="3">ドリンク
                <input type="checkbox" name="set" value="4">セット
              </p>
              <input type="button" value="検索" id="search">
            </form>
          </div>
      </div>
      <div class="content_bottom">
        <div class="result">
          <table  rules="rows" cellpadding="10">
            <thead class="table_head">
              <tr>
                <th id="item_name">商品名</th>
                <th>カテゴリー</th>
                <th>単価</th>
                <th></th>
              </tr>
            </thead>
            <tbody class="table_scroll">
              <tr>
                <td id="item_name">ピザ</td>
                <td>ピザ</td>
                <td id="money">\600</td>
                <td><input type="button" value="商品情報編集"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
