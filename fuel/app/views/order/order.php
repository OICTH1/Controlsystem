<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ピザ注文</title>
	<?php echo Asset::css("pizza_order.css"); ?>
</head>
<body>
	<div class="header">
		<div class="title">
			<p>ピザ注文</p>
		</div>
		<div class="back">
			<p><?php echo Html::anchor('index.php/top','戻る') ?></p>
		</div>
	</div>
	<div class="content">
		<div class="content_left">
			<div class="content_left_top">
				<div class="item_search">
					<from>
						<p><b>商品検索</b></p>
						<p>
						<input type="radio" id="pizza" name="category" value="1"><label for="pizza">ピザ</label>
						<input type="radio" id="drank" name="category" value="2"><label for="drank">ドリンク</label>
						<input type="radio" id="side" name="category" value="3"><label for="side">サイド</label>
						</p>
					</form>
				</div>
			</div>
			<div class="content_left_bottom">
				<div class="item_view">
					<table border="1"rules="rows">
						<thead class="view_table_head">
							<tr>
								<th class="view">商品名</th>
							</tr>
						</thead>
						<tbody class="view_table_scroll">
							<tr>
								<td>ピザ</td>
							</tr>
							<tr>
								<td>ピザ</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="content_right">
			<div class="content_right_top">
				<div class="item_add">
					<p>商品名&nbsp;
					<input type="text" name="name" size="30" maxlength="20">
					<br>フリガナ</p>
					<from>
						<p>サイズ
						<input type="checkbox" id="s" name="S" value="1"><label for="s">S</label>
						<input type="checkbox" id="m" name="M" value="2"><label for="m">M</label>
						<input type="checkbox" id="l" name="L" value="3"><label for="l">L</label>
						</p>
						<input type="button" value="カートに追加">
					</form>
				</div>
			</div>
			<div class="content_right_center">
				<div class="cart">
					<p>カート</P>
						<table class="order_table" rules="rows" cellpadding="10">
							<thead class="order_table_head">
								<tr>
									<th id="number">&nbsp;</th>
									<th id="item_name">商品名</th>
									<th>個数</th>
									<th>サイズ</th>
								</tr>
							</thead>
							<tbody class="order_table_scroll">
								<tr>
									<td id="number">1</td>
									<td id="item_name">ピザ</td>
									<td>1</td>
									<td>S</td>
								</tr>
							</tbody>
						</table>
				</div>
			</div>
			<div class="content_right_bottom">
				<?php echo Form::Open('index.php/order/cfm'); ?>
				<?php echo Form::Button('button','確認'); ?>
				<?php echo Form::Close();?>
			</div>
		</div>
	</div>
</body>
</html>
