<?php if($id_danhmuc!='') { ?>
	<div class="tit_dv1">
		<p><?=$title_cat?></p>
		<span><?=$company['slogan']?></span>
	</div>
	<div class="wap_item clearfix">
	<?php for($i=0,$count_product=count($product);$i<$count_product;$i++){	?>
	    <div class="item_vl item_sp">
            <div class="img_sp hover_sang1 zoom_hinh">
				<a href="<?=$product[$i]['type']?>/<?=$product[$i]['tenkhongdau']?>-<?=$product[$i]['id']?>.html"><img src="thumb/769x690/1/<?=_upload_sanpham_l.$product[$i]['photo']?>" alt="<?=$product[$i]['ten']?>" /></a>
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
<?php }else{ ?>
	<?php
	
		$d->reset();
		$sql="select ten$lang as ten,tenkhongdau,id,type from #_product_danhmuc where hienthi=1 and type='".$_GET['com']."' order by stt,id asc";
		$d->query($sql);
		$product_danhmuc=$d->result_array();
	?>

	<?php for ($i=0; $i <count($product_danhmuc) ; $i++) { 
		$d->reset();
		$sql_product="select id,ten,tenkhongdau,photo,thumb,mota$lang as mota,type,gia from #_product where hienthi=1 and id_danhmuc='".$product_danhmuc[$i]['id']."' and type='".$_GET['com']."' order by stt,id asc limit 0,12";
		$d->query($sql_product);
		$product=$d->result_array();
		if(count($product)>0) { 
	?>
		<div class="tit_dv1">
			<p><?=$product_danhmuc[$i]['ten']?></p>
			<span><?=$company['slogan']?></span>
		</div>
		<div class="wap_item clearfix">
			<?php for($p=0,$count_product=count($product);$p<$count_product;$p++){	?>
			    <div class="item_vl item_sp">
		            <div class="img_sp hover_sang1 zoom_hinh">
						<a href="<?=$product[$p]['type']?>/<?=$product[$p]['tenkhongdau']?>-<?=$product[$p]['id']?>.html"><img src="thumb/769x690/1/<?=_upload_sanpham_l.$product[$p]['photo']?>" alt="<?=$product[$p]['ten']?>" /></a>
					</div>
					<h3><a href="<?=$product[$p]['type']?>/<?=$product[$p]['tenkhongdau']?>-<?=$product[$p]['id']?>.html"><?=$product[$p]['ten']?></a></h3>
					<p class="sp_gia">
		            	Giá: <span><?php if($product[$p]['gia'] > 0)echo number_format($product[$p]['gia'],0, ',', '.').'  vnđ';else echo _lienhe; ?></span>
		            </p>
		            <p class="mota_sp"><?=catchuoi($product[$p]['mota'],200)?></p>
			    </div><!---END .item-->
			<?php } ?>
		</div>
		<div class="xem_pro"><a href="<?=$product_danhmuc[$i]['type']?>/<?=$product_danhmuc[$i]['tenkhongdau']?>-<?=$product_danhmuc[$i]['id']?>">Xem thêm</a></div>
	<?php } } ?>
<?php } ?>
