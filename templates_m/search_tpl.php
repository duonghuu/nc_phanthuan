<div class="tit_dv1">
	<p><?=$title_cat?></p>
	<span><?=$company['slogan']?></span>
</div>
<div class="wap_item clearfix">
<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	?>
    <div class="item_vl item_sp">
        <div class="img_sp hover_sang1 zoom_hinh">
			<a href="<?=$product[$i]['type']?>/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html"><img src="thumb/600x520/1/<?=_upload_sanpham_l.$product[$i]['photo']?>" alt="<?=$product[$i]['ten']?>" /></a>
		</div>
		<h3><a href="<?=$product[$i]['type']?>/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html"><?=$product[$i]['ten']?></a></h3>
		<p class="sp_gia">
        	Giá: <span><?php if($product[$i]['gia'] > 0)echo number_format($product[$i]['gia'],0, ',', '.').'  vnđ';else echo _lienhe; ?></span>
        </p>
        <p class="mota_sp"><?=catchuoi($product[$i]['mota'],200)?></p>
    </div><!---END .item-->
<?php } ?>
<div class="clear"></div>
<div class="pagination"><?=pagesListLimitadmin($url_link , $totalRows , $pageSize, $offset)?></div>
</div><!---END .wap_item-->