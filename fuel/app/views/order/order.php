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
			<p>注文登録</p>
		</div>
		<div class="back">
			<p><?php echo Html::anchor('index.php/top','戻る') ?></p>
		</div>
		<div style="clear :both;"></div>
	</div>
	<div class="content">
		<div class="content_top">
			<div class="content_top_top">
					<table class="order_table"  border="1">
						<thead class="order_table_head">
							<tr>
								<th id="number">No.</th>
								<th id="item_name">商品名</th>
								<th>個数</th>
								<th>単価</th>
								<th>小計</th>
							</tr>
						</thead>
						<tbody class="order_table_scroll">
						</tbody>
					</table>
			</div>
			<div class="content_top_bottom">
					<table class="sum_table" border="1">
						<tbody class="sum_table_body">
							<tr>
								<th>数量</th>
								<td></td>
							</tr>
							<tr>
								<th>合計金額</th>
								<td></td>
							</tr>
						</tbody>
					</table>
			</div>
		</div>
		<div class="content_center">
			<div class="item_title">ピザ
			</div>
			<div class="item_title">サイド
			</div>
			<div class="item_title">ドリンク
			</div>
			<div style="clear :both;"></div>
		</div>
		<div class="content_bottom">
			<div class="content_bottom_left">
				<a class="indexlist" id='a'>あ</a></br>
				<a class="indexlist" id='k'>か</a></br>
				<a class="indexlist" id='s'>さ</a></br>
				<a class="indexlist" id='t'>た</a></br>
				<a class="indexlist" id='n'>な</a></br>
				<a class="indexlist" id='h'>は</a></br>
				<a class="indexlist" id='m'>ま</a></br>
				<a class="indexlist" id='y'>や</a></br>
				<a class="indexlist" id='r'>ら</a></br>
				<a class="indexlist" id='w'>わ</a>

			</div>
			<div class="content_bottom_center">
					<table border="1">
						<tbody class="view_table_scroll">
							<?php foreach($item_list as $item){
									$class = "item ";
									switch($item['category']){
										case 'ピザ':$class .= 'pizza '; break;
										case 'ドリンク':$class .=  'drink '; break;
										case 'サイド':$class .=  'side '; break;
									}
									echo "<tr class='$class' id='$item->id'><td>$item->name</td></tr>";
							}?>
						</tbody>
					</table>
			</div>
			<div class="content_bottom_right">
				<div class="content_bottom_right_top">
					<div class="numbox">
						<div class="numboxrow">
							<div class="numbutton" id='7'>7</div>
							<div class="numbutton" id='8'>8</div>
							<div class="numbutton" id='9'>9</div>
						</div>
						<div class="numboxrow">
							<div class="numbutton" id='4'>4</div>
							<div class="numbutton" id='5'>5</div>
							<div class="numbutton" id='6'>6</div>
						</div>
						<div class="numboxeow">
							<div class="numbutton" id='1'>1</div>
							<div class="numbutton" id='2'>2</div>
							<div class="numbutton" id='3'>3</div>
						</div>
						<div class="numbox">
							<div class="numbutton" id='Delete'>消</div>
							<div class="numbutton" id='0'>0</div>
							<div class="numbutton" id='decision'>決</div>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
				<div class="content_bottom_right_bottom">
					<div class="allclear">
					</div>
					<div class="commit">
					</div>
				</div>
			</div>
		</div>
	<div id="msg"></div>
	<?php echo Asset::js('jquery-1.11.3.min.js')?>
	<script type="text/javascript">
		var baseurl = <?php echo "\"http://$_SERVER[SERVER_ADDR]/Controlsystem/public/index.php/\"" ?>;
	</script>
	<?php echo Asset::js('content/order.js')?>
</body>
</html>
