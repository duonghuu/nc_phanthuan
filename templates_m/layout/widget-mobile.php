<?php if($deviceType=='phone') { ?>
	<link href="css/widget-mobile.css" type="text/css" rel="stylesheet" />
	<div class="toolbar">
		<ul class="flex">
			<li>
				<a href="tel:<?=replace_number($company['dienthoai'])?>"><img src="images/icon-t1.png"></a>
			</li>
			<li>
				<a href="sms:<?=replace_number($company['dienthoai'])?>"><img src="images/icon-t2.png"></a>
			</li>
			<li>
				<a href="//zalo.me/<?=replace_number($company['dienthoai'])?>" target="_blank"><img src="images/icon-t3.png"></a>
			</li>
			<li>
				<a href="<?=$company['fanpage']?>"><img src="images/icon-t4.png"></a>
			</li>
		</ul>
	</div>
<?php } ?>

<!-- style 2 -->
<?php if($deviceType=='abc') { ?>
	<link href="css/widget-mobile.css" type="text/css" rel="stylesheet" />
	<div class="coccoc-alo-phone coccoc-alo-green coccoc-alo-show" id="coccoc-alo-phoneIcon">
		<a style="display: block;width: 100%;height: 100%;" href="tel:+<?=replace_number($company['dienthoai'])?>">
			<p class="coccoc-alo-ph-circle"></p>
			<p class="coccoc-alo-ph-circle-fill"></p>
			<p class="coccoc-alo-ph-img-circle"></p>
		</a>
	</div>
<?php } ?>